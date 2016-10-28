<?php
//define('AAA',100);
	/*echo "<h1>Функции</h1>";
	function sayHello($name='Guest',$h=3){
		echo "<h$h>Hello, $name!</h$h>";
	}
	
	sayHello('John',1);
	$n='Mike';
	sayHello($n);
	sayHello();*/
	function sayHello($name='Guest',$h=3){
		echo "<h$h>Hello, $name!</h$h>";
	}
	print_r(get_defined_functions());
	
?>