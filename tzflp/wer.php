<?php
//
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<hr>";
//$lenght = 'internal';
//$new_lenght = '/^[a-z0-9\.\(\)\,\- ]*control[a-z0-9\.\(\)\,\- ]*$/i';
//$hendel = fopen('base.txt', 'r+');
//
//
//for($i=0; !feof($hendel); $i++){
//    $sLine = fgets($hendel);
//    $sLinee[]=$sLine;
//    //preg_match($new_lenght,$sLine,$qqq);
//}
//echo'<pre>';
//print_r($sLinee);
//echo'</pre>';
//
//foreach ($sLinee as $value ){
//    //echo $value;
//    echo "<br>";
//    if (strpos($value, 'Oriented')){
//        echo $value.'<br>';
//die;
//    }
//
////    if($value == preg_match($new_lenght, $value, $pruv)){
////        echo $value;
////        echo $pruv[0];
////        echo "<br>";
////        exit;
////    }else{
////        echo 'такого слова нет';
////    }   echo 'ничего не найдено.';
//}








//if(isset($_POST['search'])) {
//    $file = file('base.txt');
//    $length = $_POST['search'];
//    foreach ($file as $item) {
//        if (strpos($item, $length)) {
//            echo $item;
//            break;
//        }
//    }
//}


if($_SERVER['REQUEST_METHOD']=="POST") {
    $file = file('base.txt');
    $length = trim(strip_tags($_POST['search']));
    foreach ($file as $item) {
      if (strpos($item, $length)) {
          echo $item;
            break;
        }
    }if (!strpos($item, $length)){
        echo'Ууууууупс! Совпадений не найдено...';
    }
    //header("Location: wer.php");//чтобы по F5 не накидали все
    //exit;//чтобы по F5 не накидали все
}
?>
<html>
<head>
    <title>Поиск по файлу</title>
</head>
<body>


<br>
<form method="POST">
    Найти: <input type="text" name="search">
    <input type="submit" value="Поиск">
</body>
</html>