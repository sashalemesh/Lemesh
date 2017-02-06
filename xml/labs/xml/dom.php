<?php
header("Content-Type:text/html;charset=utf-8");
	/*
	ЗАДАНИЕ 1
	- Создайте объект DOM
	- Загрузите XML-документ в объект
	- Получите корневой элемент
	*/
	$dom = new DOMDocument();
	$dom->load("catalog.xml");
	$root = $dom->documentElement;
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
	/*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
	foreach ($root->childNodes as $book){
		if($book->nodeType == 1){
			echo "<tr>";
			foreach ($book->childNodes as $childNode) {
				if($item->nodeType == 1){
					echo "<td>";
					echo $item->textContent;
					echo "</td>";
				}
			}
			echo "</tr>";
		}
	}
?>
	</table>
</body>
</html>





