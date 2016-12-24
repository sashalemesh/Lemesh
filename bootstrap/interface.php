<?php
if($_SERVER['REQUEST_METHOD']=="POST") {
    $file = file('base.txt');
    $length = trim(strip_tags($_POST['name']));
    foreach ($file as $item) {
        if (strpos($item, $length)) {
            $item;
            break;
        }
    }if (!strpos($item, $length)){
        $item = 'Ууууууупс! Совпадений не найдено...';
    }
    //header("Location: wer.php");//чтобы по F5 не накидали все
    //exit;//чтобы по F5 не накидали все
}
?>
