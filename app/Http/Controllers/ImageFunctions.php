<?php namespace App\Http\Controllers;

use Auth;

trait ImageFunctions
{

   private function createImageName($name)
	{
		return str_replace(' ', '_', $name).'_'.date('U').'.jpg';
	}

   private function checkImageExists($src, $name, $dest, $compressed = true)
	{
      if($src != null)
      {
   		list($image, $ext) = explode('.', $src);
   		$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
   		$basePath = $protocol.$_SERVER['HTTP_HOST'].'/MyMDb/public';
         if($compressed==true && @getimagesize($basePath.'/images/compressed/'.$image.'-compressor.'.$ext))
   		{
   			return 'images/compressed/'.$image.'-compressor.'.$ext;
   		}
   		else if(@getimagesize($basePath.'/images/'.$dest.'/'.$src))
   		{
   			return 'images/'.$dest.'/'.$src;
   		}
      }
      return $name ? ucwords(substr($name,0,1)) : "?";
	}

   private function unlinkExistingImage($dest, $filename)
   {
      $uploadPath = $_SERVER['DOCUMENT_ROOT'].'/MyMDb/public/images/'.$dest.'/';
      if(@getimagesize($uploadPath.$filename)) unlink($uploadPath.$filename);
   }

}
