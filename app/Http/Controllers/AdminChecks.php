<?php namespace App\Http\Controllers;

use Auth;

trait AdminChecks
{

   private function checkUserDetails()
   {
      return Auth::check() ? ( Auth::user() ? Auth::user() : false ) : false;
   }

}
