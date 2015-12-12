<?php namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GenreController extends Controller {

	public function index()
	{
		$genres = Genres::all();
		return view( 'admin.genres.index', compact('genres'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
