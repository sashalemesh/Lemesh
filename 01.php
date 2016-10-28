<?php
/*$array = [-3,-2,-1,1,2,3];
	$array = [];
	foreach($array as $value) {
	if ($array[$i] < 0) {
	$array2[$i] = $value;
	$i++;
	$array[$i] = 0;
	}
	$array[$i] = $value;
	}

	echo "<pre>";
	var_dump($array);
	echo"</pre>";*/

							/*$array[$i] = range(-3,3);

							foreach($array as $key => $value) {
								if ($array[$i] < 0) {
									$array2[$key] = $value;
									$key++;
									$array2[$key] = 0;
								}
									$array2[$key] = $value;
							}

							echo "<pre>";
							var_dump($array2);
							echo"</pre>";*/
							
							
						/*$array[$i] = range(-3,3);
						$array2 = [];
						for($i=0; $i<count($array); $i++) {
							if ($array[$i] < 0) {
							$array2[$i];
							$array2[$i++];
							$array2[$i] = 0;
							}else
							$array2[$i] = $value;
							}

						echo "<pre>";
						var_dump($array2);
						echo"</pre>";*/
						
						
						$arr = Array (1, -2, 1, 2, -3);
						$arr_new = Array();
						for ($i = 0; isset($arr[$i]); $i++)
						{
							array_push($arr_new, $arr[$i]);
							if($arr[$i] < 0) 
							{
								array_push($arr_new, 0);
							}
						}
						echo "<pre>";
						var_dump($arr_new);
						echo"</pre>";
						
						
						$arr = [-3, -2, -1, 1, 2, 3];
						foreach ($arr as $v)
						{
							if ($v < 0)
							{
								$newarr[] = $v;
								$newarr[] = 0;
							} else
							{
								$newarr[] = $v;
							}
						}
						echo "<pre>";
						var_dump($newarr);
						echo"</pre>";

?>