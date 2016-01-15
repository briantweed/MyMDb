<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AviaryController extends Controller
{

   public function replaceImage()
   {
      if(Request::ajax()){
         $data = Request::all();
         $src = $data['src'];
         $img = $data['img'];
         $dest = $data['dest'];
         $protocol     = isset( $_SERVER["HTTPS"] ) ? 'https://' : 'http://';
      	$absolutePath = $protocol. $_SERVER['HTTP_HOST'].'/MyMDb/public/images/'.$dest.'/';
      	$uploadPath   = $_SERVER['DOCUMENT_ROOT'].'//MyMDb/public/images/'.$dest.'/';

      	// FILENAME
      	$filename = str_replace($absolutePath, '', $src);
         copy($img, $uploadPath.$filename);
         $return['src'] = $absolutePath.$filename;
         $return['time']   = date("i");
         $return['msg'] = $filename;
         return json_encode($return);
      }
      return "Feck Off";
   }

}
