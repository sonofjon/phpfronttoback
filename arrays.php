<?php 
	// Indexed
	$people	= array('Kevin', 'Jeremy', 'Sara');
	$ids = array(12, 13, 14);
	$cars = ['Honda', 'Toyota', 'Ford']; # Alterative array assignment

	$cars[3] = 'Chevy'; # Grow array
	$cars[] = 'BMW'; # Grow array if length is unknown

	//echo $people[1];
	//echo $ids[1];
	//echo $cars[3];

	// Array functions
	//print_r($cars);
	//var_dump($cars); 

	// Associative
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = array(22 => 'Brad', 44 => 'Jose', 63 => 'William');

	//echo $people['Brad'];
	//echo $ids[22];

	$people['Jill'] = 42;
	//echo $people['Jill'];
	//print_r($people);
	var_dump($people); 


?>