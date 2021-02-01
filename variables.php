<?php  
	// Single line comment
	# Single line comment
	/* 
		Multiline 
		comment 
	*/
	$output	= 'Hello World!';
	
	$num1 =	4;
	$num2 =	10;
	$sum =	$num1 + $num2;

	$string1 =	'Hello';
	$string2 =	'World';
	$greeting = $string1 . ' ' . $string2 . '!';
	$greeting2 = "$string1 $string2";
	$string3 = 'They\'re here';

	define('GREETING', 'Hello Everyone');

	echo GREETING;
?>