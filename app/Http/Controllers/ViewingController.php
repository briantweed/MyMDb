<?php namespace App\Http\Controllers;

use App\Viewings;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewingController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$viewings = Viewings::all();
		$user = $this->checkUserDetails();
		foreach($viewings as $viewing)
		{
			$viewing->viewed = date("jS F Y @ H:i",strtotime($viewing->date));
		}
		return view( 'admin.viewings.index', compact('viewings','user'));
	}

}
