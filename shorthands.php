<?php 
	$loggedIn = true;
	$arr = [1,2,3,4,5];
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

/*
	# Nested ternary operator statements
	$age = 5;
	$score = 5;

	echo 'Your score is ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Excellent') : ($age > 10 ? 'Horrible' : 'Average'));
*/

 ?>

 <div>
 	<?php if ($loggedIn) { ?>
 		<h1>Welcome User</h1>
	<?php } else { ?>
 		<h1>Welcome Guest</h1>
	<?php } ?>
 </div>

<!-- Shorthand if-statement -->
<div>
 	<?php if ($loggedIn): ?>
 		<h1>Welcome User</h1>
	<?php else: ?>
 		<h1>Welcome Guest</h1>
	<?php endif; ?>
 </div>

<!-- Shorthand foreach-statement -->
<div>
 	<?php foreach ($arr as $val): ?>
 		<?php echo $val ?>
	<?php endforeach; ?>
 </div>

<!-- Shorthand for-statement -->
<div>
 	<?php for ($i=0; $i<10 ; $i++): ?>
 		<li><?php echo $i ?></li>
	<?php endfor; ?>
 </div>