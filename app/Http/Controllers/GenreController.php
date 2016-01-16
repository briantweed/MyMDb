<?php namespace App\Http\Controllers;

use Request;
use Session;
use App\Forms;
use App\Genres;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GenreController extends Controller {

	use AdminChecks;
	protected $isAdmin;

	public function __construct()
	{
		$this->isAdmin = $this->checkUserDetails();
	}

	/**
	* Display the listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$genres = Genres::all();
		$user = $this->checkUserDetails();
		return view( 'admin.genres.index', compact('genres','user'));
	}

	/**
	* Display a specific resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		return $this->index();
	}

	/**
	* Show the form for creating a new genre.
	*
	* @return Response
	*/
	public function createNewGenre()
	{
		if($this->isAdmin)
		{
			if(Request::ajax())
			{
				$data = Request::all();
				$fields = Forms::getFormFields('create_genre', false);
				$app = app();
				$values = $app->make('stdClass');
				$values->movie_id = Session::get('key');

				return (String) view('modal.create_genre', compact('fields', 'values'));
			}
		}
		return false;
	}

	/**
	* Store a newly created genre in storage.
	*
	* @param  array $data
	* @return Response
	*/
	public function storeNewGenre()
	{
		if($this->isAdmin)
		{
			if(Request::ajax())
			{
				$data = Request::all();
				$new_genre = trim(preg_replace("/[^A-Za-z\s]/", '', $data['type']));
				$attach = $data['attach'];
				$genre_exist = $this->checkExistingGenres($new_genre);
				if(!$genre_exist)
				{
					$update = Genres::create(['type'=>$new_genre]);
					return "hello";
				}
				return "exists";
			}
		}
		return false;
	}

	/**
	* Check against existing genres in storage.
	*
	* @param  string $genre
	* @return Response
	*/
	private function checkExistingGenres($genre)
	{
		$existing = Genres::where('type', $genre)->first();
		if(count($existing)==0) return false;
		else return $existing;
	}

} // end of class
