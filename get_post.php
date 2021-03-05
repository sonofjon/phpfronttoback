<?php 
	if (isset($_GET["name"])) {
		print_r($_GET);
		echo $_GET["name"];
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
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