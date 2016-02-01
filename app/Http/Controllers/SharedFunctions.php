<?php namespace App\Http\Controllers;

use Auth;

trait SharedFunctions
{

   /**
   *
   * Uppercase first letter of name and encode for database storage
   * @param  string  $name
   * @return Response
   *
   */
   private function formatName($name)
   {
      $characters = ["'", "-", "."];
      $replacements = ["' ", "- ", ". "];
      $prefixes = ['mc','mac'];
      foreach($prefixes as $prefix)
      {
         $name = preg_replace('/^'.$prefix.'/i', $prefix.' ', $name);
      }
      $name = str_replace($characters, $replacements, $name);
      $name = ucwords(strtolower(trim($name)));
      foreach($prefixes as $prefix)
      {
         $name = preg_replace('/^'.$prefix.'\s+/i', ucwords($prefix), $name);
      }
      $name = htmlentities(str_replace($replacements, $characters, $name), ENT_QUOTES);
      return $name;
   }

   /**
   *
   * Remove non alphanumerical characters from string for image name
   * @param  string  $name
   * @return Response
   *
   */
   private function createImageName($name)
	{
		return preg_replace("/[^a-zA-Z0-9]/", '_', $name).'_'.date('U').'.jpg';
	}

   private function checkImageExists($src, $name, $dest)
	{
      if($src != null)
      {
   		list($image, $ext) = explode('.', $src);
   		$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
   		$basePath = $protocol.$_SERVER['HTTP_HOST'].'/MyMDb/public';
         if(@getimagesize($basePath.'/images/'.$dest.'/'.$src))
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