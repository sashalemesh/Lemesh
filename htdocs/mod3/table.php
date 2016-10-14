<?php
	
	$cols = 5;//кол-во $td
	$rows = 3;//кол-во $tr
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>“аблица умножени¤</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>“аблица умножени¤</h1>
	<?php
	$td = $cols;
	$tr = $rows;
		echo "<table border='1' align='center'>";
			for ($tr=1; $tr<=$rows; $tr++){
				echo "<tr>";
					
				echo "</tr>";
			}
		echo "</table>";
	/*for($i=1; $i<=$cols, $i<=$rows; $i++){       for ($i=1; $i<=$cols; $i++)
					echo "";
				}*/
	?>
	
</body>
</html>
