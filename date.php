<?php 
	/*
	# date_default_timezone_set('America/New_York');
	date_default_timezone_set('Europe/Stockholm');
	echo date('Y/m/d');
	echo date('h:i:sa');
	*/

	/*
	$timestamp = mktime(10, 14, 54, 9, 10, 1981); 
	echo date('Y/m/d h:i:sa', $timestamp);
	*/

	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 Days');
	echo date('Y/m/d h:i:sa', $timestamp5);
?>