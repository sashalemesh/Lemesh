<?php
if($_GET['name']) {
    $file = file('base.txt');
    $length = trim(strip_tags($_GET['name']));
    $result = null;
    foreach ($file as $item) {
        if (strpos($item, $length)) {
            $result = $item;
            break;
        }
    }if ($result == null){
        $item = 'Ууууууупс! Совпадений не найдено...';
    }else{
        $item = $result;
    }
    //header("Location: index.php");//чтобы по F5 не накидали все
    //exit;//чтобы по F5 не накидали все
}
?>
