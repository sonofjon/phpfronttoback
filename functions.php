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

	echo addNumbers(2,3);
?>