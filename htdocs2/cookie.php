<?php							//COOKIE
	$arr = array(
		"one"=>1,
		2=>"two",
		3=>true
	);
	//echo serialize($arr);
	$str = serialize($arr);//загнать массив в строку
	$arr = unserialize($str);//вернуть строку в массив
	
	//setcookie("test","test");
	//echo $_COOKIE["test"];
	setcookie("name","John", time()+120);
	if(isset($_COOKIE["name"]))
	echo $_COOKIE["name"];
else
	echo Привет;
?>