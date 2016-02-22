<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Cast;
use App\Movies;
use App\Genres;
use App\Persons;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
   use SharedFunctions, AdminChecks;

   protected $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

   public function index()
   {
      return redirect()->action('WelcomeController@index');
   }

   public function filterMovies()
   {
      $data = Request::all();
      $search_string = trim($data['filter-movie-text']);
      if($search_string!="")
      {
         $movies = Movies::where('name', 'LIKE', '%'.$search_string.'%')
                  ->orderBy('sort_name')
                  ->get();
         $people = Persons::where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%'.$search_string.'%')
                  ->orderBy('forename')
                  ->get();

         $tags = Movies::where('keywords.word', 'LIKE', '%'.$search_string.'%')
               ->join('tags', 'movies.movie_id', '=', 'tags.movie_id')
               ->join('keywords', 'keywords.keyword_id', '=', 'tags.keyword_id')
               ->orderBy('sort_name')
               ->get();

         $user = $this->isAdmin;
         $quote = count($movies) ? "" : $this->getRandomQuote();

         return view('ajax.filter', compact('movies', 'people', 'tags', 'quote', 'user'));
      }
   }

   public function getCastDetails()
   {
      if(Request::ajax())
      {
         $data = Request::all();
         $cast_id = $data['cast_id'];
         return Cast::find($cast_id);
      }
   }

   public function movieDecadeCount()
   {
      $start_year = floor(date("Y")/10)*10;
      $end_year = floor(date("Y")/10)*10;
      $years = [];
      $movies = [];
      $results = [];
      $query = Movies::select(DB::raw('floor(released/10)*10 as released'),DB::raw('count(*) as count'))
            ->groupBy(DB::raw('floor(released/10)'))
            ->get();
      foreach($query as $result)
      {
         $movies[$result->released] = $result->count;
         if($result->released < $start_year) $start_year = $result->released;
      }
      for($x=$start_year; $x<=$end_year; $x+=10)
      {
         $year = [];
         $year['label'] = $x;
         $year['y'] = isset($movies[$x]) ? $movies[$x] : 0;
         $years[] = $year;
      }
      return $years;

   }

   public function movieYearCount()
   {
      if(Request::ajax())
      {
         $max = 0;
         $years = [];
         $movies = [];
         $results = [];
         $data = Request::all();
         $start_year = $data['start'];
         $end_year = $data['end'] > date("Y") ? date("Y") : $data['end'];
         $query = Movies::select('released', DB::raw('count(*) as count'))
                     ->where('released', '>=', $start_year)
                     ->where('released', '<=', $end_year)
                    ->groupBy('released')
                    ->get();
         foreach($query as $result)
         {
            $movies[$result->released] = $result->count;
            if($result->count>$max) $max = $result->count;
         }
         for($x=$start_year; $x<=$end_year; $x++)
         {
            $year = [];
            $year['label'] = $x;
            $year['y'] = isset($movies[$x]) ? $movies[$x] : 0;
            $years[] = $year;
         }
      }
      $results['years'] = $years;
      $results['interval'] = $max > 499 ? 100 : ($max > 99 ? 50 : ($max > 19 ? 10 : ($max > 4 ? 5 : 1)));
      return $results;
   }

	public function movieFormatCount()
	{
		$movies =  Movies::select('formats.type as label', DB::raw('count(*) as y'))
			->join('formats', 'movies.format_id', '=', 'formats.format_id')
			->groupBy('movies.format_id')
			->get();
      return $movies;
	}

	public function movieCertificateCount()
	{
		$movies = Movies::select('certificates.title as label', DB::raw('count(*) as y'), 'movies.certificate_id as id')
			->join('certificates', 'movies.certificate_id', '=', 'certificates.certificate_id')
			->groupBy('movies.certificate_id')
			->get();
      foreach($movies as $movie)
      {
         $movie['exploded'] = true;
      }
      return $movies;
	}

	public function movieGenreCount()
	{
		$movies = Genres::select('genres.type as label', DB::raw('count(*) as y'))
			->join('categories', 'categories.genre_id', '=', 'genres.genre_id')
			->groupBy('genres.type')
         ->orderBy('genres.type','DESC')
			->get();
      foreach($movies as $movie)
      {
         $movie['exploded'] = true;
      }
      return $movies;
	}

	public function movieRatingCount()
	{
      $movies = [];
      $ratings = [];
		$query = Movies::select('rating', DB::raw('count(*) as count'), 'rating as id')
			->groupBy('rating')
			->get();
         foreach($query as $result)
         {
            $movies[$result->rating] = $result->count;
         }
         for($x=1; $x<=10; $x++)
         {
            $rating = [];
            $rating['label'] = $x;
            $rating['y'] = isset($movies[$x]) ? $movies[$x] : 0;
            $ratings[] = $rating;
         }
      return $ratings;
	}

   public function getAvailableCast()
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
            ->get()->toJson();
         return $actors;
      }
   }

   public function getAvailableCrew()
   {
      if(Request::ajax())
      {
         $data = Request::all();
         $movie_id = $data['movie'];
         $actors = Persons::select(DB::raw("CONCAT(forename, ' ', surname) AS full_name"), 'person_id')
            ->whereNotIn('person_id', function($query) use ($movie_id)
            {
               $query->select('person_id')
                     ->from('crew')
                     ->where('movie_id', $movie_id);
            })
            ->orderBy('forename')
            ->get()->toJson();
         return $actors;
      }
   }

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
