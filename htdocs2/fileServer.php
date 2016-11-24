<?php
echo"<h1>Загрузка файлов на сервер </h1> <br>";
    //print_r($_FILES);
    if($_FILES['uf']['error'] == 0){
        $t = $F_FILES['uf']['tmp_name'];
        $n = $F_FILES['uf']['name'];
        move_uploaded_file($t,"upload/".$n);
    }
?>
<form action="fileServer.php" method="POST"
      enctype="multipart/form-data">
    <input type="file" name="uf">
    <input type="submit">
</form>

<?php
echo "<h1>Функции работы с почтой</h1> <br>";

if(mail("vasya@narod.ru", "Привет","Посмотри фптки!"))
    echo "Yes";
else
    echo "Nou";
?>