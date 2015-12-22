<?php namespace App\Http\Controllers;

use App\Genres;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GenreController extends Controller {

	use AdminChecks;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$genres = Genres::all();
		$user = $this->checkUserDetails();
		return view( 'admin.genres.index', compact('genres','user'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
