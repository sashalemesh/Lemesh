<?php
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
	$sum = '';
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		$sum = "$num1 $operator $num2 = ";
			switch($operator){
				case '+': $sum .= $num1 + $num2;break;
				case '-': $sum .= $num1 - $num2;break;
				case '*': $sum .= $num1 * $num2;break;
				case '/': 
						if($num2==0)
							$sum = "На ноль делить нельзя";
						else
							$sum .= $num1 / $num2;
						break;
				default: $sum = "Неизвестный оператор '$operator'";
			}
	}

	/*$num1 = 2;
	$operator = '+';
	$num2 =3;
	
	if($operator = '-')
		$sum = $num1 - $num2;
	if($operator = '+')
		$sum = $num1 + $num2;
	if($operator = '*')
		$sum = $num1 * $num2;
	if($operator = '/')
		$sum = $num1 / $num2;
		else
			echo dont;
	*/
?>


<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
if($sum){
	echo "<p>Результат: $sum</p>";
}
?>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

Число 1:<br />
<input type="text" name="num1" /><br /><br />

Оператор:<br />
<input type="text" name="operator" /><br /><br />

Число 2:<br />
<input type="text" name="num2" /><br /><br />

<input type="submit" value="Считать!" />

</form>

