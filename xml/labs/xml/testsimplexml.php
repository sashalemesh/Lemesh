<?php
header("Content-Type:text/html;charset=utf-8");
//Зачитываем строку
//$str = <<<LABEL
//<html>
//    <head>
//        <title>Test</title>
//    </head>
//    <body>
//        <p>Это <a href="#">мой</a> сайт</p>
//    </body>
//</html>
//LABEL;
//$sxml = simplexml_load_string($str);
//echo $sxml->body[0]->p->asXML();//Чтоб вывести мой применим asXML()


//Зачитываем файл
//Конвертируем XML-файл в объект
//$sxml = simplexml_load_file("catalog1.xml");
//Вывод названия первой книги
//echo $sxml->book[0]->title."<br>";
//Получить длину массива
//echo count($sxml)."<br>";
//Изменение автора второй книги
//$sxml->book[1]->author = "Вася Пупкин";
//echo $sxml->book[1]->author;
//Конвертируем объект в XML и записываем в файл
//file_put_contents("catalog1.xml", $sxml->asXML());


//Получаем список всех атрибутов
//$attrs = $sxml->book[0]->title->attributes();
//var_dump($attrs);
//Выводим значение атрибута
//echo $sxml->book[0]->title["id"];


//Делаем выборку из XML
//Конвертируем XML-файл в объект
$sxml = simplexml_load_file("catalog1.xml");
//Выбираем все title
$titles = $sxml->xpath("/catalog/book/title[@id>3 and @id<6]");
echo "<pre>";
var_dump($titles);
echo "</pre>";
