<?php namespace App\Http\Controllers;

use DB;
use Request;
use Session;
use DateTime;
use App\Forms;
use App\Movies;
use App\Genres;
use App\Persons;
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

	/**
	*
	* Show form to create new actor in database
	* @param integer $id
	* @return Response
	*
	*/
	 public function createImdbActor()
	 {
		 if(Request::ajax())
		 {
		   $data = Request::all();
			$actor_id = $data['id'];
		   $my_token = env('IMDB_KEY');
			$client = new \GuzzleHttp\Client();
			$url = 'http://api.myapifilms.com/imdb/idIMDB?idName='.$actor_id.'&token='.$my_token.'&format=json&language=en-us&bornDied=1';
			$imdb_response = $client->get($url);
			$imdb_body = $imdb_response->getBody();
			$imdb_api = json_decode($imdb_body);
			if(count($imdb_api->data->names))
			{
				$imdb = $imdb_api->data->names[0];
				$names = array_values(array_filter(explode(' ', $imdb->name)));
				$surname = count($names) ? ucwords(strtolower(array_pop($names))) : "";
				$forename = count($names) ? ucwords(strtolower(implode(" ", $names))) : "";

				$app = app();
				$values = $app->make('stdClass');
				$values->forename = $forename;
				$values->surname = $surname;
				$values->bio = $str = substr($imdb->bio, 0, 1500)." ....";
				if(isset($imdb->dateOfBirth))
				{
					$born = new DateTime(preg_replace("/[^a-zA-Z0-9]/", ' ', $imdb->dateOfBirth));
					$values->birthday =  $born->format('d-m-Y');
				}
				if(isset($imdb->died))
				{
					$app = app();
					$infos = $app->make('stdClass');
					$infos->deceased = $imdb->died;
				}
				$values->image = $imdb->urlPhoto;
				$fields = Forms::getFormFields('create_person', false);

				return (String) view('modal.create_person', compact('fields', 'values', 'infos'));
			}
		}
	 }

	public function searchForMovie()
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

		return view('movies.create_content', compact('fields', 'options', 'values', 'infos', 'user', 'message'));
	}

	public function getCastFromIMDb()
	{
		if(Request::ajax())
      {
	      $data = Request::all();
			$my_token = env('IMDB_KEY');

			$movie_id = Session::get('movie_id');
			$movie = Movies::findorfail($movie_id);
			$new_cast = [];
			$existing_cast = [];
			foreach($movie->cast as $cast)
			{
				$existing_cast[] = $cast->person_id;
			}

			$client = new \GuzzleHttp\Client();
			$url = 'http://api.myapifilms.com/imdb/idIMDB?idIMDB='.$movie->imdb_id.'&token='.$my_token.'&format=json&language=en-us&actors=2';
			$imdb_response = $client->get($url);
			$imdb_body = $imdb_response->getBody();
			$imdb_api = json_decode($imdb_body);
			$additional = [];
			if(count($imdb_api->data->movies))
			{
				$imdb = $imdb_api->data->movies[0];
				foreach($imdb->actors as $actor)
				{
					$actor->character = trim(preg_replace("/[^a-zA-Z0-9\s]/", '', $actor->character));
					$person = Persons::where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), htmlentities($actor->actorName, ENT_QUOTES))->first();
					if($person)
					{
						if(!in_array($person->person_id, $existing_cast))
						{
							$movie->cast()->attach($person->person_id, array('character' => $actor->character));
						}
					}
					else $additional[] = $actor;
				}
				$movie = Movies::findorfail($movie_id);
			}
			return (String) view('movies.cast', compact('movie', 'additional'));
		}
	}

} // end of class
