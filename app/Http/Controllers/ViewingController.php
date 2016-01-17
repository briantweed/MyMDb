<?php namespace App\Http\Controllers;

use Request;
use Session;
use App\Viewings;
use App\Http\Controllers\Controller;

class ViewingController extends Controller {

	use AdminChecks;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$viewings = Viewings::all();
		foreach($viewings as $viewing)
		{
			$viewing->viewed = date("jS F Y @ H:i",strtotime($viewing->created_at));
		}
		$user = $this->checkUserDetails();
		return view( 'admin.viewings.index', compact('viewings','user'));
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
