<?php 
	/*
	$num = 4;
	if ($num == 5) {
		echo "5 passed";
	} elseif ($num ==6) {
		echo "6 passed";
	} else {
		echo "Did not pass";
	}
	*/

	/*
	$num = 6;
	if ($num > 5) {
		if ($num < 10) {
			echo "$num passed";
		}
	}
	*/

	/*
	$num = 5;
	if ($num > 5 && $num < 10) {
		echo "$num passed";
	}
	*/

	$favVolor = 'yellow';
	switch ($favVolor) {
		case 'red':
			echo 'Your favorite color is red';
			break;
		case 'blue':
			echo 'Your favorite color is blue';
			break;
		case 'green':
			echo 'Your favorite color is green';
			break;	
		default:
			echo 'Your favorite color is something else';
			#break;
	}
?>