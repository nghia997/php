<?php
	include_once(dirname(__FILE__).'/../lids/SessionDB/session.php');
	include_once(dirname(__FILE__).'/../lids/GhiLog/Log.php');
	include_once(dirname(__FILE__).'/../config/config.php');
	//require 'lids/SessionDB/session.php';
	//$app = new App;
	//$app->run();

	$session = new session();	
	// Set to true if using https
	$session->start_session('_s', false);
	$_SESSION['something'] = 'Pham Huu Nghia';
	echo 'Kết quả Session : '. $_SESSION['something'];
?>		