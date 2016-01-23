<?php namespace App\Http\Controllers;

use DB;
use Request;
use App\Movies;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

   public function index()
   {
      $x = Movies::select(
         DB::raw('count(*) as movie_total'),
         DB::raw('sum(case when format_id=2 then 1 else 0 end) as bluray_total'),
         DB::raw('sum(case when format_id=1 then 1 else 0 end) as dvd_total'),
         DB::raw('sum(case when rating=10 then 1 else 0 end) as rating_10_total'),
         DB::raw('sum(case when rating=9 then 1 else 0 end) as rating_9_total'),
         DB::raw('sum(case when rating=8 then 1 else 0 end) as rating_8_total'),
         DB::raw('sum(case when rating=7 then 1 else 0 end) as rating_7_total'),
         DB::raw('sum(case when rating=6 then 1 else 0 end) as rating_6_total'),
         DB::raw('sum(case when rating=5 then 1 else 0 end) as rating_5_total'),
         DB::raw('sum(case when rating=4 then 1 else 0 end) as rating_4_total'),
         DB::raw('sum(case when rating=3 then 1 else 0 end) as rating_3_total'),
         DB::raw('sum(case when rating=2 then 1 else 0 end) as rating_2_total'),
         DB::raw('sum(case when rating=1 then 1 else 0 end) as rating_1_total')
      )->get();
      $data = $x[0];
      return view('admin.index', compact('data'));
   }

}
