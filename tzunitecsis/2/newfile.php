<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {


    echo "REQUEST".'<br>';
    header("Location: ". $_SERVER["PHP_SELF"]);
    exit;
}
// Переменные с формы
if($_POST['name']== '') {
    echo "POST" .'<br>';
    //header("Location: ". $_SERVER["PHP_SELF"]);
    //exit;
}
    if($_GET['name'] == '') {
        echo "Get".'<br>';
    }else{
        echo 'else';
    }
if (isset($_POST['name'])) {
    echo 'isset' .'$_POST';
}
?>