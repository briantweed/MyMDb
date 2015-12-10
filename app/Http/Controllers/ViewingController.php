<?php namespace App\Http\Controllers;

use App\Viewings;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewingController extends Controller {

	public function index()
	{
		$viewings = Viewings::all();
		foreach($viewings as $viewing)
		{
			$viewing->viewed = date("jS F Y @ H:i",strtotime($viewing->date));
		}
		return view( 'lists.viewings.index', compact('viewings'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
