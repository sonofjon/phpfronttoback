<?php 
	function simpleFunction(){
		echo 'Hello World';
	}	

	# simpleFunction();

	# function sayHello($name){
	function sayHello($name = 'World'){
		echo "Hello $name<br>";
	}

	# sayHello('Joe');
	# sayHello('Bob');
	# sayHello();

	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	# echo addNumbers(2,3);

	// Passing variables by reference (global variable?)

	$myNum = 10;

	function addFive($num){ # by value
		$num += 5; # Same as $num = $num + 5;
	}

	function addTen(&$num){ # by reference
		$num += 10;
	}

	addFive($myNum);
	echo "Value: $myNum<br>";

	addTen($myNum);
	echo "Value: $myNum<br>";
?>