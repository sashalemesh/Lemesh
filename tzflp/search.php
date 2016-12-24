<?php
function search_file($file, $search) // 1 - файл, 2 - искомая строка || ФУНКЦИЯ поиска
{
    $file = file($file);
    $i = 0;
    $search_str = array();
    foreach($file as $str)
    {
        $array = explode("|", $str); // Режем строку
        if(ereg($search, $array[1])) $search_str[] = $i; // Поиск по описанию
        $i++;
    }
    return $search_str;
}

function print_search($file, $numbers) // Функция вывода
{
    $file = file($file);
    foreach($numbers as $number)
    {
        $array = explode("|", $file[$number]);
        echo "Ссылка: ". $array[0] ."<br>";
        echo "Описание: ". $array[1] ."<br>";
        echo "<br><br>";
    }
}
?>

<html>
<head>
    <title>Поиск по файлу</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) // Если нажата кнопка поиска
{
    $file = "base.txt"; // Имя файла
    $search_array = array();
    $search_array = search_file($file, $_POST['search']); // Поиск по файлу
    print_search($file, $search_array); // Вывод найденного
}
?>

Форма поиска
<br>
<form method="POST">
    Найти: <input type="text" name="search">
    <input type="submit" value="Поиск">
</body>
</html>

