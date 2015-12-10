<?php namespace App\Http\Controllers;

use App\Keywords;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KeywordController extends Controller {

	public function index()
	{
		$keywords = Keywords::all();
		return view( 'lists.keywords.index', compact('keywords'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
