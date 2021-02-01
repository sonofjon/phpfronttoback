<?php 
	# For Loop
	# @params - initial value, condtion, increment 
	/*
	for ($i=0; $i < 10; $i++){
		echo 'Number '.$i;
		echo '<br>';
	}
	*/

	/*
	# While Loop
	# @params - Condtion 
	$i = 0;
	while ($i < 10) {
		echo 'Number '.$i;
		echo '<br>';
		$i++;
	}
	*/

	# Do..While Loop
	# @params - Condtion 
	/*
	$i = 0;
	do {
		echo 'Number '.$i;
		echo '<br>';
		$i++;
	}
	while($i < 10);
	*/

	# For Each Loop
	# @params - ?
	
	/*
	$people	= array('Kevin', 'Jeremy', 'Sara');
	foreach ($people as $person) {
		echo $person;
		echo '<br>';
	*/

	$people	= array('Kevin' => 'kevin@gmail.com', 'Jeremy' => 'jeremy@gmail.com', 'Sara' => 'sara@gmail.com');
	foreach ($people as $person => $email) {
		echo $person . ': ' . $email;
		echo '<br>';

	}

?>