<?php namespace App\Http\Controllers;

use Request;
use Session;
use App\Viewings;
use App\Http\Controllers\Controller;

class ViewingController extends Controller {

	use SharedFunctions, AdminChecks;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$viewings = Viewings::select('viewings.created_at', 'movies.name')
						->join('movies', 'movies.movie_id', '=', 'viewings.movie_id')
						->orderBy('viewings.created_at', 'desc')
						->orderBy('movies.sort_name', 'asc')
						->get();
		foreach($viewings as $viewing)
		{
			$viewing->viewed = $this->formatDate($viewing->created_at, 'display');
		}
		$user = $this->checkUserDetails();
		return view( 'admin.viewings', compact('viewings','user'));
	}

	/**
	* Show the confirmation modal to record movie viewing.
	*
	* @return Response
	*/
	public  function createMovieViewing()
	{
		if(Request::ajax())
		{
			return (String) view('modal.create_viewing');
		}
		return false;
	}

	/**
	* Store the movie viewing.
	*
	* @return Response
	*/
	public function storeMovieViewing()
	{
		if(Request::ajax())
		{
			$data['movie_id'] = Session::get('movie_id');
			$update = Viewings::create($data);
			$app = app();
			$message = $app->make('stdClass');
			$message->type = 'success';
			$message->text = 'Viewing stored.';
			return (String) view('segments.layout.message', compact('message'));
		}
		return false;
	}

} // end of controller
