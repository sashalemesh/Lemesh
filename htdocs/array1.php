<?php

$str = "Hello";
echo $str{0}."<br>";//H
echo $str[0]."<br>";//H


echo "array Массивы <br>";//array Массивы
	$user[11]="John";
	$user[]="root";
	$user[44]="1234";
	$user[]=25;
	$user[]=true;
	
//Тоже самое
	$user1=array(
		0=>"John",
		"root",
		17=>"1234",
		25,
		true
	);	
	
	echo '<pre>';
		print_r($user);//Печатает информацию об объекте
	echo '</pre>';
	
		echo '<pre>';
			var_dump($user1);//Печатает информацию об объекте (расширенную)
		echo '</pre>';
	//echo count($user);//Выводит длину масива - 5
	echo '<hr>';
	
	//array Ассоциативные Массивы
	$user2[name]="John";
	$user2[login]="root";
	$user2[pass]="1234";
	$user2[age]=25;
	$user2[]=true;
	
		//Тоже самое
	$user3=array(
		name=>"John",
		login=>"root",
		pass=>"1234",
		age=>25,
		true
	);	
	
	echo '<pre>';
		print_r($user2);//Печатает информацию об объекте
	echo '</pre>';
	
		echo '<pre>';
			var_dump($user3);//Печатает информацию об объекте (расширенную)
		echo '</pre>';
		echo "<hr>";
		
		echo "Многомерные массивы <br>";//Многомерные массивы
	$cars["bmw"] = array(
		"model"=> "X5",
		"speed"=> 120,
		"doors"=> 5,
		"year"=> "2006"
	);	
	$cars["toyota"] = array(
		"model"=> "Carina",
		"speed"=> 130,
		"doors"=> 4,
		"year"=> "2007"
	);
	$cars["opel"] = array(
		"model"=> "Corsa",
		"speed"=> 140,
		"doors"=> 5,
		"year"=> "2007"
	);
	echo $cars["opel"][speed].'<br>';
	echo '<hr>';
	echo "Konstant <br>";//Konstant
	define('AAA',100);
	if(!defined('AAA'))
		define('AAA',200);
	echo AAA;
?>