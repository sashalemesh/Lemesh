<?php
header("Content-Type:text/html;charset=utf-8");

//Определение функций обработки
	function onStart($xml,$tag,$attributes){
		if($tag != "CATALOG" and  $tag != "BOOK")
			echo '<td>';
		if($tag == "BOOK")
			echo '<tr>';
	}

	function onEnd($xml,$tag){
		if($tag != "CATALOG" and  $tag != "BOOK")
			echo '</td>';
		if($tag == "BOOK")
			echo '</tr>';
	}

	function onText($xml,$data){
		echo $data;
	}
//Создание парсера
	$parser = xml_parser_create("UTF-8");
//Регистрация функций
	xml_set_element_handler($parser,"onStart","onEnd");

	xml_set_character_data_handler($parser,"onText");
?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php

	//Запуск парсера
		xml_parse($parser,file_get_contents("catalog.xml"));
	?>
	</table>
	</body>
</html>