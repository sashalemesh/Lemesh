Так не делать
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type='text' name='name'><br>
		<input type='text' name='age'><br>
		<input type='submit' value='Отправить'>
</form>
<?php
	echo '<p>Ваше имя: '.$_GET['name'];
	echo '<p>Ваш возраст: '.$_GET['age'];
?>