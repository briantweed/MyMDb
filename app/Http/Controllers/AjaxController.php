<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
   use ImageFunctions, AdminChecks;

   protected $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

   public function filterMovies()
   {
      if(Request::ajax())
      {
         $data = Request::all();
         $type = $data['type'];
         $search_string = trim($data['val']);
         if($search_string!="")
         {
            $query = Movies::select('movies.*');
            switch($type)
            {
               case "all":
                  $query->where('name', 'LIKE', '%'.$search_string.'%');
               break;

               case "studio":
                  $query->where('studios.name', 'LIKE', '%'.$search_string.'%')
                        ->join('studios', 'movies.studio_id', '=', 'studios.studio_id');
               break;

               case "format":
                  $query->where('formats.type', 'LIKE', '%'.$search_string.'%')
                        ->join('formats', 'movies.format_id', '=', 'formats.format_id');
               break;

               case "year":
                  $query->where('released', $search_string);
               break;

               case "rating":
                  $query->where('rating', $search_string);
               break;
            }

            $movies = $query->get();
            foreach($movies as $movie)
      		{
      			$movie->cover = $this->checkImageExists($movie->image, $movie->sort_name, 'covers');
      			$movie->cover_count = strlen($movie->cover);
      		}

            if($type=="all")
            {
               $people = Persons::where('forename', 'LIKE', '%'.$search_string.'%')
                        ->orWhere('surname', 'LIKE', '%'.$search_string.'%')
                        ->orWhere(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%'.$search_string.'%')
                        ->get();
               foreach($people as $person)
         		{
         			$person->cover = $this->checkImageExists($person->image, $person->forename, 'people');
         			$person->cover_count = strlen($person->cover);
         		}
      		}
            else $people = [];
            $user = $this->isAdmin;
            $quote = count($movies) ? "" : $this->getRandomQuote();
            return (String) view('ajax.movie_filter', compact('movies', 'people', 'quote', 'user'));
         }
         else return "blank";
      }
   }

   public function getAvailableActors()
   {
      if(Request::ajax())
      {
         $data = Request::all();
         $movie_id = $data['movie'];
         $actors = Persons::select(DB::raw("CONCAT(forename, ' ', surname) AS full_name"), 'person_id')
            ->whereNotIn('person_id', function($query) use ($movie_id) 
            {
               $query->select('person_id')
                     ->from('cast')
                     ->where('movie_id', $movie_id);
            })
            ->orderBy('forename')
            ->lists('person_id', 'full_name');
         return $actors;
      }
   }


//          SELECT * FROM persons AS p where p.person_id NOT in (
// select person_id from cast where movie_id=1
// ) and p.person_id NOT in(
// 	select person_id from crew where movie_id=1
// )


   private function getRandomQuote()
   {
      $quoteCount = DB::table('quotes')->count();
      $selectedQuote = rand(1, $quoteCount);
      $quote = DB::table('quotes')
               ->select('movies.movie_id', 'movies.name', 'movies.released as released', 'quotes.text as text')
               ->join('movies', 'movies.movie_id', '=', 'quotes.movie_id')
               ->where('quote_id', $selectedQuote)
               ->first();
      return $quote;
   }

} // end of class
