<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// ����� ���������� ����������
	$name = strip_tags($_POST["name"]);
	$age = $_POST["age"] * 1;
	
	// ���������� � cookie �� �����
	setcookie("userName", $name, time() + 24*60*60);
	setcookie("userAge", $age, time() + 24*60*60);
}
else {
	// ������ ����
	$name = strip_tags($_COOKIE["userName"]);
	$age = $_COOKIE["userAge"] * 1;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>���������� ��������� �����</title>
</head>

<body>
<h1>���������� ��������� �����</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>" 
		method="post">
	���� ���:
	<input type="text" name="name" value="<?=$name?>"><br>
	��� �������:
	<input type="text" name="age" value="<?=$age?>"><br>
	<input type="submit" value="��������">
</form>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	if ($name and $age) {
		echo "<h1>������, $name</h1>";
		echo "<h3>���� $age ���</h3>";
	}
	else {
		print "<h3>��������� ��� ����!</h3>";
	}
}
?>
</body>
</html>
