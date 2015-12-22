<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
   use ImageFunctions, AdminChecks;

   protected $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

   public function filterMovies()
   {
      if(Request::ajax()){
         $data = Request::all();
         $movies = DB::table('movie_details')
                     ->where('name',  'LIKE', '%'.$data['val'].'%')
                     ->orWhere('studio',  'LIKE', '%'.$data['val'].'%')
                     ->get();
         foreach($movies as $movie)
   		{
   			$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name);
   			$movie->cover_count = strlen($movie->cover);
   		}
         $user = $this->isAdmin;
         return (String) view('ajax.movie_filter', compact('movies','user'));
      }
   }

} // end of class
