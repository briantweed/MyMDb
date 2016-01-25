<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Forms;
use App\Movies;
use App\Genres;
use App\Studios;
use App\Formats;
use App\Certificates;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateMovie;

class ApiController extends Controller {

	use ImageFunctions, AdminChecks;

	private $isAdmin;

	public function __construct()
   {
  	  $this->isAdmin = $this->checkUserDetails();
   }

	public function index()
	{
		$data = Request::all();
		$title = $data['title'];
		if($title)
		{
			$rating = isset($data['rating']) ? $data['rating'] : null;
			$year = isset($data['year']) ? $data['year'] : null;
			$client = new \GuzzleHttp\Client();
			$my_token = env('IMDB_KEY');

			$app = app();
			$values = $app->make('stdClass');

			$url = 'http://api.myapifilms.com/imdb/idIMDB?title='.$title.'&token='.$my_token;
			if($year!=null && $year!="null") $url .= '&year='.$year.'&limit=2';

			$imdb_response = $client->get($url);
			$imdb_body = $imdb_response->getBody();
			$imdb_api = json_decode($imdb_body);
			if(count($imdb_api->data->movies))
			{
				$imdb = $imdb_api->data->movies[0];

				$values->name = $imdb->title;
				$values->imdb_id = $imdb->idIMDB;
				$values->bio = $imdb->plot;
				$values->purchased = "01-01-2015";
				$values->rating = $rating;
				$values->format_id = 1;
				$values->released = $imdb->year;
				$values->image = $imdb->urlPoster;

				$tmdb_response = $client->get('http://api.myapifilms.com/tmdb/movieInfoImdb?idIMDB='.$imdb->idIMDB.'&token='.$my_token.'&format=json&language=en&casts=1&releases=1');

				$tmdb_body = $tmdb_response->getBody();
				$tmdb_api =  json_decode($tmdb_body);
				if(!isset($tmdb_api->error->message))
				{
					$tmdb = $tmdb_api->data;
					$values->running_time = $tmdb->runtime;
					$certification = '';
					foreach($tmdb->releases as $rel) if($rel->iso_3166_1=="GB") $certification = $rel->certification;
					switch($certification)
					{
						case "UC":  $certificate_id = 1; break;
						case "U":   $certificate_id = 2; break;
						case "PG":  $certificate_id = 3; break;
						case "12":  $certificate_id = 4; break;
						case "12A": $certificate_id = 5; break;
						case "15":  $certificate_id = 6; break;
						case "18":  $certificate_id = 7; break;
						default :   $certificate_id = '';
					}
					$values->certificate_id = $certificate_id;

					$app = app();
					$infos = $app->make('stdClass');

					$studio_info = null;
					if(count($tmdb->production_companies))
					{
						foreach($tmdb->production_companies as $studio)
						{
							$studio_names[] = $studio->name;
						}
						$studio_info .= implode(", ", $studio_names);
					}
					$infos->studio_id = $studio_info;
				}
			}
			else $message = "Movie not found on IMDb";
		}
		else $message = "Enter a title to search for";

		// foreach($tmdb->genres as $genres) $genre_names[] = $genres->name;
		// echo implode($genre_names, ", ");

		$app = app();
		$options = $app->make('stdClass');

		$options->certificates = Certificates::lists('title', 'certificate_id')->toArray();
		$options->studios = Studios::orderBy('name', 'asc')->lists('name', 'studio_id')->toArray();
		$options->formats = Formats::lists('type', 'format_id')->toArray();

		$fields = Forms::getFormFields('create_movie', true);

		$user = $this->isAdmin;

		return view('movies.create', compact('fields', 'options', 'values', 'infos', 'user', 'message'));
	}


	/*
	| --------------------------------------------------
	|		Private Functions
	| --------------------------------------------------
	*/


	private function makeDecades()
	{
		$decades = [];
		$start = 1930;
		$end = floor(date("Y")/10)*10;
		for($decade=$start; $decade<=$end; $decade+=10)
		{
			$decades[$decade] = $decade;
		}
		return $decades;
	}



} // end of class
