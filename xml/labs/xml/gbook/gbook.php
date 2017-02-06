<?php
//Добавление элементов в XML файл методом DOM
header("Content-Type:text/html;charset=utf-8");
//ЗАДАНИЕ 1
define("USERS_LOG","users.log");
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = stripslashes(trim(strip_tags($_POST["name"])));
	$email = stripslashes(trim(strip_tags($_POST["email"])));
	$msg = stripslashes(trim(strip_tags($_POST["msg"])));
	$ip = $_SERVER["REMOTE_ADDR"];
	$dt = time();
//ЗАДАНИЕ 2
	//Создайте объект DOMDocument
	$dom = new DOMDocument("1.0","utf-8");
	//Наводим красоту в xml
	$dom->formatOutput = true;
	$dom->preserveWhiteSpace = false;
	//Проверяем есть ли файл
	if(!file_exists(USERS_LOG)){
		//Создаем корневой эллемент users
		$root = $dom->createElement("users");
		//Привязываем корневой эллемент к документу
		$dom->appendChild($root);
	}else{
		//Загружаем в dom при помощи лога наш файл
		$dom->load(USERS_LOG);
		//Получаем корень
		$root = $dom->documentElement;
	}
	//Создаем элементы
	$n = $dom->createElement("name",$name);
	$e = $dom->createElement("email",$email);
	$m = $dom->createElement("msg",$msg);
	$i = $dom->createElement("ip",$ip);
	$d = $dom->createElement("dt",$dt);
	//Создаем юзера
	$user = $dom->createElement("user");
	//Последовательно привязываем элементы к юзеру
	$user->appendChild($n);
	$user->appendChild($e);
	$user->appendChild($m);
	$user->appendChild($i);
	$user->appendChild($d);
	//$user привязываем к $root
	$root->appendChild($user);
	//Сохраняем все это дерево
	$dom->save(USERS_LOG);
	//Перезапрашиваем страницу для избавления от посланных данных
	header("Location: gbook.php");
	exit;
}
/* 
ЗАДАНИЕ 1
- Создайте константу для хранения имени XML-файла
- Проверьте, была ли отправлена HTML-форма?
	Если она была отправлена: отфильтруйте полученные данные
- Получите данные об IP-адресе пользователя	
- Получите данные о текущих дате и времени
*/

/*
ЗАДАНИЕ 2
- Создайте объект DOMDocument
- Проверьте, существует ли xml-документ с данными
	Если существует, загрузите его в созданный объект
	и получите корневой элемент
	Если не существует, создайте корневой элемент "users"
	и привяжите его к объекту
*/

/*
ЗАДАНИЕ 3
- Cоздайте новый XML-элемент "user" для очередной записи
- Cоздайте XML-элементы для всех данных Гостевой книги:
	name, email, msg, IP, datetime
- Cоздайте текстовые узлы для всех указанных элементов
- Привяжите текстовые узлы к соответствующим XML-элементам
- Привяжите XML-элементы с данными заказа к XML-элементу "user"
- Привяжите XML-элемент "user" к корневому элементу "users"
- Сохраните файл
- Перезапросите страницу для избавления от посланных данных
*/	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

<!--</form>-->
<!---->
<!--<h2>Ваше сообщение</h2>-->
<!--<table border="1" width="100%">-->
<!--	<tr>-->
<!--		<th>name</th>-->
<!--		<th>email</th>-->
<!--		<th>msg</th>-->
<!--		<th>ip</th>-->
<!--		<th>dt</th>-->
<!--	</tr>-->
<!---->
<?php
///*
//ЗАДАНИЕ 4
//- Создайте объект SimpleXML и загрузите в него XML-документ
//- Выведите в браузер все сообщения, а также информацию
//  об авторе каждого сообщения в произвольной форме
//  в обратном порядке
//*/
////Выводим данные методом SimpleXML
////Создаем объект SimpleXML и загрузите в него XML-документ
if(file_exists(USERS_LOG)) {
	$sxml = simplexml_load_file(USERS_LOG);
	foreach ($sxml->user as $user){
//		//Зачитываем файл
//		echo "<tr>";
//		echo "<td>".$user->name."</td>";
//		echo "<td>".$user->email."</td>";
//		echo "<td>".$user->msg."</td>";
//		echo "<td>".$user->ip."</td>";
//		echo "<td>".$user->dt."</td>";
//		echo "</tr>";
//
//	//Зачитываем строку
	$time = $user->datetime*1;
	$dt = date("d-m-Y H:i:s",$time);
	$msg = strip_tags($user->msg);
	echo <<<LABEL
<hr>
<p>
	<a href="mailto:{$user->email}">{$user->name}</a> from [{$user->ip}] @{$dt}<br>
		{$msg}
</p>
LABEL;
	}
}
////Выводим в браузер все сообщения
//
//?>
<!--</table>-->
</body>
</html>