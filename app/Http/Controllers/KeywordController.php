<?php namespace App\Http\Controllers;

use App\Keywords;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KeywordController extends Controller {

	use AdminChecks;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$keywords = Keywords::all();
		$user = $this->checkUserDetails();
		return view( 'admin.keywords.index', compact('keywords','user'));
	}

}
