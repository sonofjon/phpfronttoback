<?php 
#	if (isset($_GET["name"])) {
#		#print_r($_GET);
#		$name = htmlentities($_GET["name"]);
#		echo $name;
#	}

	if (isset($_POST["name"])) {
		#print_r($POST);
		$name = htmlentities($_POST["name"]);
		echo $name;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="POST" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" name="Submit">
	</form>
</body>
</html>