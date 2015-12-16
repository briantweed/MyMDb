<?php

   session_start();
   header('Cache-Control: no-cache');
   header('Pragma: no-cache');

	// POST DATA
	$img = $_POST['img'];
	$src = $_POST['url'];

	// SET VARIABLES
	$message      = "";
	$error		  = "";
	$protocol     = isset( $_SERVER["HTTPS"] ) ? 'https://' : 'http://';
	$absolutePath = $protocol. $_SERVER['HTTP_HOST'].'/public/images/cover/';
	$uploadPath   = $_SERVER['DOCUMENT_ROOT'].'/public/images/cover/';

	// FILENAME
	$filename 	 = str_replace( $absolutePath, '', $src );


	// SAVE TO FOLDER
	copy( $img, $uploadPath . '/' . $filename );

	// RETURN AJAX DATA AS JSON
	$return['src'] = $absolutePath . $filename;
	$return['msg'] = $message;

	echo json_encode( $return )

?>
