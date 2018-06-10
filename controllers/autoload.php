<?php
 /*
	Autoload all classes in this folder with .php extension
	Written By Lord Offei Acheampong *_*
 */
	$handlebar = realpath(dirname(__DIR__));
	$base 		= $handlebar. '/public/base.php';
	$truncation = $handlebar. '/app/Handlers'.'/'.'truncation.php';
	$__connection = $handlebar. '/controllers'.'/DBController.php'; 
	$__lessons	  = $handlebar. '/controllers'.'/LessonController.php';
	$__videos     = $handlebar. '/controllers'.'/VideoController.php';

	if (file_exists($truncation) && file_exists($__connection) && file_exists($__lessons) && file_exists($__videos)) {
		require_once $truncation;
		require_once $__connection;
		require_once $__lessons;
		require_once $__videos;
		//This is the base class for the entire project
		require_once $base;

			//Initializing the connection
		$SystemConnect = new DBConnect();
		$mysqli = $SystemConnect::_init();


	}


 ?>