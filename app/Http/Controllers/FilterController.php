<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{

   public function filterMovies()
   {
      if(Request::ajax()){
         $data = Request::all();
         $html="";
         $movies = DB::table('movie_details')->where('name',  'LIKE', '%'.$data['val'].'%')->get();
         foreach($movies as $movie) $html .= $movie->name."\n";
   		return $html;
      }
   }

}
