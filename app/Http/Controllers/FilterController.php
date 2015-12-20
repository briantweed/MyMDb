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
   			$movie->cover = $this->checkImageExists($movie->cover, $movie->sort_name);
   			$movie->cover_count = strlen($movie->cover);
   		}
         $user = $this->isAdmin;
         return (String) view( 'ajax.movie_filter', compact('movies','user'));
      }
   }

   private function checkImageExists($src, $name)
	{
		list($image, $ext) = explode('.', $src);
		$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
		$basePath = $protocol.$_SERVER['HTTP_HOST'].'/'.env('BASE_PATH');
		if(@getimagesize($basePath.'/images/compressed/'.$image.'-compressor.'.$ext))
		{
			return 'images/compressed/'.$image.'-compressor.'.$ext;
		}
		else if(@getimagesize($basePath.'/images/covers/'.$src))
		{
			return 'images/covers/'.$src;
		}
		return ucwords(substr($name,0,1));
	}

}
