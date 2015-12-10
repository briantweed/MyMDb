<?php namespace App\Http\Controllers;

use App\Studios;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudioController extends Controller {

	public function index()
	{
		$studios = Studios::all();
		return view( 'lists.studios.index', compact('studios'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
