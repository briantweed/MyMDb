<?php namespace App\Http\Controllers;

use App\Characters;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CharacterController extends Controller {

	public function index()
	{
		$characters = Characters::all();
		return view( 'lists.characters.index', compact('characters'));
	}

	public function show($id)
	{
		return $this->index();
	}

}
