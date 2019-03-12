<?php
	include_once "Log.php";
	$log = new log();
	$log->emergency("Emergency message");
	$log->alert("Alert message");
	$log->critical("Critical message");
	$log->notice("Notice message");
	$log->info("Info message");
	$log->error("Error message");
	$log->warning("Warning message");
	$log->debug("DEBUG message");
	$log->readLog();
?>