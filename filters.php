<?php 
	// Check for posted data
	if (filter_has_var(INPUT_POST, "data")) {
		echo "Data found";
	} else {
		echo "No Data";
	}
 ?>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 	<!-- PHP_SELF points to filename of the currently executing script -->
 	<input type="text" name="data">
 	<button type="submit">Submit</button>
 </form>