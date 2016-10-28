<?php
	/*
	«јƒј„ј
	ќтрисовать навигационное меню на странице, типа
		<a href="contact.php">Contact</a>
	использу¤ массив в качестве структуры меню
	
	«јƒјЌ»≈ 1
	- —оздайте ассоциативный массив $menu
	- «аполните массив соблюда¤ следующие услови¤:
		- Ќазвание ¤чейки ¤вл¤етс¤ пунктом меню, например: Home, About, Contact...
		- «начение ¤чейки ¤вл¤етс¤ именем файла, на который будет указывать ссылка, 
		например: index.php, about.php, contact.html...
	*/
	$menu = [
		Home => index.php,
		About => about.php,
		Contact => contact.html
	];
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Меню</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Меню</h1>
	<?php
	echo "<ul style='list-style-type:none'>";
	foreach($menu as $key => $value){
		
			echo "<li><a href ='$value' >$key</a></li>";
	}
		echo "</ul>";
	
	/*
	«јƒјЌ»≈ 2
	- »спользу¤ цикл foreach отрисуйте вертикальное меню, структура которого описана в 
	массиве $menu
	*/
	?>
</body>
</html>
