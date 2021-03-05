<?php 
	$loggedIn = true;

	/*
	if ($loggedIn) {
		echo "You are logged in";
	} else {
		echo "You are NOT logged in";		
	}
	*/

	# Ternary operator
	#echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

	# Ternary operator with variable assignment
	#$isRegistered = ($loggedIn == true) ? true : false;
	#echo $isRegistered;

	# Nested ternary operator statements
	$age = 5;
	$score = 5;

	echo 'Your score is ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Excellent') : ($age > 10 ? 'Horrible' : 'Average'));


 ?>