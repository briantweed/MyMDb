<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
   public $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

   public function filterMovies()
   {
      if(Request::ajax()){
         $data = Request::all();
         $movies = DB::table('movie_details')->where('name',  'LIKE', '%'.$data['val'].'%')->get();
         foreach($movies as $movie)
   		{
   			$movie->cover = $movie->cover == "" ? ucwords(substr($movie->sort_name,0,1)) : $movie->cover;
   			$movie->cover_count = strlen($movie->cover);
   		}
         $user = $this->isAdmin;
         return (String) view( 'ajax.movie_filter', compact('movies','user'));
      }
   }

}
