<?php
	
	$cols = 10;//кол-во $td
	$rows = 10;//кол-во $tr
	$color = "yellow";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>“аблица умножени¤</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<style>
		th{background:<?=$color?> ;}
		table{border:3px solid black;
			margin:0 auto;}
	</style>
</head>
<body>
	<h1>Tаблица умножени¤</h1>
	<?php
	
		echo "<table> \n";
			for ($tr=1; $tr<=$rows; $tr++){
				echo "\t\t <tr> \n" ;
					for($td=1; $td<=$cols; $td++){
						if($td==1 or $tr==1)
							echo "\t\t\t <th background='$color'>" . $tr * $td . "</th> \n";
						else
							echo "\t\t\t <td>" . $tr * $td . "</td> \n";
					}
				echo "\t\t </tr> \n";
			}
		echo "\t </table>";
	
	?>
	
</body>
</html>
