<?php namespace App\Http\Controllers;

use DB;
use Image;
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

	use SharedFunctions, AdminChecks;

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
				$surname = count($names) ? $this->formatName(array_pop($names)) : "";
				$forename = count($names) ? $this->formatName(implode(" ", $names)) : "";

				$app = app();
				$values = $app->make('stdClass');
				$values->forename = $forename;
				$values->surname = $surname;
				$values->bio = strlen($imdb->bio) > 1000 ? substr($imdb->bio, 0, 1000)." ...." : $imdb->bio;
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

	/**
 	*
 	* Return search result from API call
 	* @return Response
 	*
 	*/
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

				$values->name = trim($imdb->title);
				$values->imdb_id = trim($imdb->idIMDB);
				$values->bio = trim($imdb->plot);
				$values->purchased = "01-01-2015";
				$values->rating = $rating;
				$values->format_id = 1;
				$values->released = trim($imdb->year);
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

		$app = app();
		$options = $app->make('stdClass');

		$options->certificates = Certificates::lists('title', 'certificate_id')->toArray();
		$options->studios = Studios::orderBy('name', 'asc')->lists('name', 'studio_id')->toArray();
		$options->formats = Formats::lists('type', 'format_id')->toArray();

		$fields = Forms::getFormFields('create_movie', true);

		$user = $this->isAdmin;

		return view('movies.create_content', compact('fields', 'options', 'values', 'infos', 'user', 'message'));
	}

	/**
	*
	* Get cast list from IMDb ID number
	* @return Response
	*
	*/
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
					$actor->clean_character = trim(preg_replace("/[^a-zA-Z0-9\s]/", '', $actor->character));
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

	public function getDirectors()
	{
		echo "Started ".date("H:i:s")."...... <br/><br/>";
		$movie_count = Movies::all()->count();
		echo $movie_count." movies<br/>";
		flush();
		ob_flush();

		$movies = Movies::all();
		foreach($movies as $movie)
		{
			if($movie->imdb_id)
			{
				$hasDirector = false;
				foreach($movie->crew as $person)
				{
					if($person->pivot->position=="Director") $hasDirector = true;
				}
				if(!$hasDirector)
				{
					$client = new \GuzzleHttp\Client();
					$my_token = env('IMDB_KEY');

					$url = 'http://api.myapifilms.com/imdb/idIMDB?idIMDB='.$movie->imdb_id.'&token='.$my_token.'&format=json&language=en-us';
					$imdb_response = $client->get($url);
					$imdb_body = $imdb_response->getBody();
					$imdb_api = json_decode($imdb_body);
					if(count($imdb_api->data->movies))
					{
						$imdb = $imdb_api->data->movies[0];
						if($imdb->directors)
						{
							$director_name = $imdb->directors[0]->name;
							$imdb_id = $imdb->directors[0]->nameId;
							$person = Persons::where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), htmlentities($director_name, ENT_QUOTES))->first();
							if(!$person)
							{
								$client = new \GuzzleHttp\Client();
								$url = 'http://api.myapifilms.com/imdb/idIMDB?idName='.$imdb_id.'&token='.$my_token.'&format=json&language=en-us&bornDied=1';
								$imdb_response = $client->get($url);
								$imdb_body = $imdb_response->getBody();
								$imdb_api = json_decode($imdb_body);
								if(count($imdb_api->data->names))
								{
									$data = [];
									$imdb = $imdb_api->data->names[0];
									$names = array_values(array_filter(explode(' ', $imdb->name)));
									$data['surname'] = count($names) ? $this->formatName(array_pop($names)) : "";
									$data['forename'] = count($names) ? $this->formatName(implode(" ", $names)) : "";

									$deceased = isset($imdb->died) ? $imdb->died."<br/><br/>" : "";
									$data['bio'] = isset($imdb->bio) ? (strlen($imdb->bio) > 1000 ? $deceased . substr($imdb->bio, 0, 1000)." ...." : $deceased . $imdb->bio) : "";
									$content = file_get_contents($imdb->urlPhoto);
									$image_name = $this->createImageName($data['forename']." ".$data['surname']);
									$fp = fopen('images/people/'.$image_name, "w");
									fwrite($fp, $content);
									fclose($fp);

									$img = Image::make('images/people/'.$image_name);
									$img->resize(300, 450);
									$img->save('images/people/'.$image_name);
									$data['image'] = $image_name;

									if(isset($imdb->dateOfBirth))
									{
										$born = new DateTime(preg_replace("/[^a-zA-Z0-9]/", ' ', $imdb->dateOfBirth));
										$data['birthday'] =  $born->format('Y-m-d');
									}

									$update = Persons::create($data);
									$inserted_id = $update->person_id;
									$movie->crew()->attach($inserted_id, array('position' => 'Director'));
									echo "NEW (".$movie->movie_id.") ".$movie->name." : ".$director_name." added<br/>";
								}
							}
							else
							{
								$movie->crew()->attach($person->person_id, array('position' => 'Director'));
								echo "ADD (".$movie->movie_id.") ".$movie->name." : ".$director_name." added to movie<br/>";
							}
						}
						else echo "N/A (".$movie->movie_id.") ".$movie->name." : no directors found<br/>";
					}
					else echo "N/A (".$movie->movie_id.") ".$movie->name." : no data found<br/>";
				}
				else echo "EXT (".$movie->movie_id.") ".$movie->name." : director exists<br/>";
			}
			else echo "nID (".$movie->movie_id.") ".$movie->name." : no imdb id<br/>";
			flush();
    		ob_flush();
		}
		echo "<br/><br/>Finished ".date("H:i:s");
	}

	public function getGenres()
	{
		echo "Started ".date("H:i:s")."...... <br/><br/>";
		$movie_count = Movies::all()->count();
		echo $movie_count." movies<br/>";
		flush();
		ob_flush();

		for($x=500;$x<7000;$x+=10)
		{
			$movies = Movies::take(10)->offset($x)->get();
			foreach($movies as $movie)
			{
				if($movie->imdb_id)
				{
					$client = new \GuzzleHttp\Client();
					$my_token = env('IMDB_KEY');

					$url = 'http://api.myapifilms.com/imdb/idIMDB?idIMDB='.$movie->imdb_id.'&token='.$my_token.'&format=json&language=en-us';
					$imdb_response = $client->get($url);
					$imdb_body = $imdb_response->getBody();
					$imdb_api = json_decode($imdb_body);
					if(count($imdb_api->data->movies))
					{
						$imdb = $imdb_api->data->movies[0];
						echo $movie->name." : ";
						if($imdb->genres)
						{
							$data = [];
							foreach($imdb->genres as $genre)
							{
								$genre_id = Genres::where('type', $genre)->value('genre_id');
								if($genre_id) $data[] = $genre_id;
							}
							$movie->genres()->sync($data);
							echo " genres added<br/>";
						}
						else echo "no genres<br/>";
						flush();
						ob_flush();
					}
				}
			}
		}
		echo "<br/><br/>Finished ".date("H:i:s");
	}



} // end of class
