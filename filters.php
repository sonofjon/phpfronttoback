<?php 
	// Check for posted data
	/*
	if (filter_has_var(INPUT_POST, "data")) {
		echo "Data found";
	} else {
		echo "No Data";
	}
	
	if (filter_has_var(INPUT_POST, "data")) {
		$email = $_POST["data"];

		// Remove illegal characters
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email ."<br>";

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Email is valid";
		} else {
			echo "Email is NOT valid";
		}
	}

	$var = 23;
	$var = '23';
	$var = "23asdasd87a6sd786asd";	
	if (filter_var($var, FILTER_VALIDATE_INT)) {
		echo $var." is a number.";
	} else {
		echo $var." is NOT a number.";
	}

	echo filter_var($var, FILTER_SANITIZE_NUMBER_INT);

	$var = "<script>alert(1)</script>";
	# echo $var;
	echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
	*/

	$filters = array(
		"data" => FILTER_VALIDATE_EMAIL,
		"data2" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 100
			)
		)
	);

	print_r(filter_input_array(INPUT_POST, $filters));
 ?>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 	<!-- PHP_SELF points to filename of the currently executing script -->
 	<input type="text" name="data">
 	<input type="text" name="data2">
 	<button type="submit">Submit</button>
 </form>