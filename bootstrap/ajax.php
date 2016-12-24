<?php
//var_dump($_GET['name']);
if($_GET['name']) {
    $file = file('resume.html');
    $length = trim(strip_tags($_GET['name']));
    $result = null;
    foreach ($file as $item) {
        if (strpos($item, $length)) {
            $result = $item;
            break;
        }
    }if ($result == null){
        echo 'Ууууууупс! Совпадений не найдено...';
    }else{
        echo $result;
    }
    //header("Location: index.php");//чтобы по F5 не накидали все
    //exit;//чтобы по F5 не накидали все
}
?>