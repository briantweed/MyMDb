<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Cast;
use App\Movies;
use App\Genres;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
   use SharedFunctions, AdminChecks;

	private $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	public function index()
	{
		$user = $this->isAdmin;
		return view('search', compact('user'));
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
                  $query->where('search_name', 'LIKE', '%'.$search_string.'%');
               break;

               case "studio":
                  $query->where('studios.name', 'LIKE', '%'.$search_string.'%')
                        ->join('studios', 'movies.studio_id', '=', 'studios.studio_id');
               break;

               case "format":
                  $query->where('formats.type', 'LIKE', '%'.$search_string.'%')
                        ->join('formats', 'movies.format_id', '=', 'formats.format_id');
               break;

               case "certificate":
                  $query->where('certificate_id', $search_string);
               break;

               case "year":
                  $query->where('released', $search_string);
               break;

               case "rating":
                  $query->where('rating', $search_string);
               break;

               case "tag":
                  $query->where('keywords.word', 'LIKE', '%'.$search_string.'%')
                     ->join('tags', 'movies.movie_id', '=', 'tags.movie_id')
                     ->join('keywords', 'keywords.keyword_id', '=', 'tags.keyword_id');
            break;
            }

            $query->orderBy('sort_name');
            $movies = $query->get();

            if($type=="all")
            {
               $people = Persons::where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%'.$search_string.'%')
                        ->orderBy('forename')
                        ->get();
      		}
            else $people = [];
            $user = $this->isAdmin;
            $quote = count($movies) ? "" : $this->getRandomQuote();

            return (String) view('ajax.movie_filter', compact('movies', 'people', 'quote', 'user'));
         }
         else return "blank";
      }
   }

} // end of class
