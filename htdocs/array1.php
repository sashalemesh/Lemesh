<?php

$str = "Hello";
echo $str{0}."<br>";//H
echo $str[0]."<br>";//H


echo "array Массивы <br>";//array Массивы
	$user[11]="John";
	$user[]="root";
	$user[44]="1234";
	$user[]=25;
	$user[]=true;
	
//Тоже самое
	$user1=array(
		0=>"John",
		"root",
		17=>"1234",
		25,
		true
	);	
	
	echo '<pre>';
		print_r($user);//Печатает информацию об объекте
	echo '</pre>';
	
		echo '<pre>';
			var_dump($user1);//Печатает информацию об объекте (расширенную)
		echo '</pre>';
	//echo count($user);//Выводит длину масива - 5
	echo '<hr>';
	
	//array Ассоциативные Массивы
	$user2[name]="John";
	$user2[login]="root";
	$user2[pass]="1234";
	$user2[age]=25;
	$user2[]=true;
	
		//Тоже самое
	$user3=array(
		name=>"John",
		login=>"root",
		pass=>"1234",
		age=>25,
		true
	);	
	
	echo '<pre>';
		print_r($user2);//Печатает информацию об объекте
	echo '</pre>';
	
		echo '<pre>';
			var_dump($user3);//Печатает информацию об объекте (расширенную)
		echo '</pre>';
		echo "<hr>";
		
		echo "Многомерные массивы <br>";//Многомерные массивы
	$cars["bmw"] = array(
		"model"=> "X5",
		"speed"=> 120,
		"doors"=> 5,
		"year"=> "2006"
	);	
	$cars["toyota"] = array(
		"model"=> "Carina",
		"speed"=> 130,
		"doors"=> 4,
		"year"=> "2007"
	);
	$cars["opel"] = array(
		"model"=> "Corsa",
		"speed"=> 140,
		"doors"=> 5,
		"year"=> "2007"
	);
	echo $cars["opel"][speed].'<br>';
	echo '<hr>';
	echo "Konstant <br>";//Konstant
	define('AAA',100);
	if(!defined('AAA'))
		define('AAA',200);
	echo AAA;
	
	/*echo '<hr>';
	$user2[]="John";
	$user2[]="root";
	$user2[]="1234";
	$user2[]=25;
	$user2[]=true;
		for($i=0, $cnt=count($user2); i<$cnt; $i++){
			echo $user2[$i] . '<br>';
		}*/
		
		echo '<hr>';
		echo 'FOREACH - Циклы'.'<br>';
		$userr["name"]="John";
		$userr["login"]="root";
		$userr["pass"]="1234";
		$userr["age"]=25;
		$userr[]=true;
			
				foreach($userr as $key => $v){ // $key - ключ; $v - переменная покоторой будет бегать массив
					echo $key ." = " . $v .'<br>';
				}
				echo '<hr>';
				
$users = [
    [
        "name" => "Вася",
        "age" => 45,
        "gender" => "Мужской"
    ],
    [
        "name" => "Оксана",
        "age" => 21,
        "gender" => "Женский"
    ],
    [
        "name" => "Петя",
        "age" => 33,
        "gender" => "Мужской"
    ],
    [
        "name" => "Катя",
        "age" => 24,
        "gender" => "Женский"
    ]
];
echo $users[2][age], $users[3][age];
?>


<?php
$products = [
    [
        "name" => "Iphone 7",
        "price" => 600,
        "properties" => [
            [
                "name" => "Processor",
                "value" => "i10"
            ],
            [
                "name" => "Display",
                "value" => "5,5"
            ],
            [
                "name" => "Camera",
                "value" => "12Mpx"
            ]
        ]
    ],
    [
        "name" => "Iphone 6",
        "price" => 500,
        "properties" => [
            [
                "name" => "Processor",
                "value" => "i9"
            ],
            [
                "name" => "Display",
                "value" => "5,2"
            ],
            [
                "name" => "Memory",
                "value" => "128GB"
            ]
        ]
    ]
];
?>
<?php foreach($products as $product):?>
    <h4><?=$product["name"]?>: <span><?=$product["price"]?></span>$</h4>
    <div>Properties:</div>
    <?php if(count($product["properties"]) > 0):?>
        <ul>
            <?php foreach($product["properties"] as $property):?>
                <li>
                    <strong><?=$property["name"]?>:</strong>
                    <?=$property["value"]?>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
    <hr>
<?php endforeach;?>