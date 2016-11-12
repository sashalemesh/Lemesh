<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name=trim(strip_tags($_POST['name']));
		$age=abs((int)$_POST['age']);
	}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<input type='text' name='name'><br>
		<input type='text' name='age'><br>
		<input type='submit' value='Отправить'>
</form>
<?php
if($name and $age){
	echo '<p>Ваше имя: '.$name;
	echo '<p>Ваш возраст: '.$age;
}
	?>