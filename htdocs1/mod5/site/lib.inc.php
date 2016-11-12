<?php
	/*
	ЗАДАНИЕ 1
	- Откройте файл mod4\menu.php
	- Скопируйте код функции getMenu()
	- Вставьте скопированный код в данный файл
	*/
	function getMenu($menu, $vertical=true){
			if(!is_array($menu))
				return false;
			$style = '';
			if(!$vertical){
				$style = ' style="display:inline; margin-right:15px"';
			}
			echo '<ul style="list-style-type:none">';
			foreach($menu as $key => $value){		
				echo "<li$style><a href ='$value' >$key</a></li>";
			}
			echo "</ul>";
			return true;
		}
	/*
	ЗАДАНИЕ 2
	- Откройте файл mod4\table.php
	- Скопируйте код функции getTable()
	- Вставьте скопированный код в данный файл
	*/
	function getTable($cols=10, $rows=10, $color=yellow){
		static $cnt =0;
		$cnt++
		 ;
		echo "Таблица рисуется $cnt раз";
		echo "<table border='1' align='center'> \n";
			for ($tr=1; $tr<=$rows; $tr++){
				echo "\t\t <tr> \n" ;
					for($td=1; $td<=$cols; $td++){
						if($td==1 or $tr==1)
							echo "\t\t\t <th style='background:$color'>" . $tr * $td . "</th> \n";
						else
							echo "\t\t\t <td>" . $tr * $td . "</td> \n";
					}
				echo "\t\t </tr> \n";
			}
		echo "\t </table>";
	}
?>