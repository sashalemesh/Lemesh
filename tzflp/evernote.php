<?php

function str_search($path, $extension, $str)
{
$file_arr = array();
foreach (glob(rtrim($path, '/')."/*.".$extension) as $filename)
{
if(strstr(file_get_contents($filename), $str) != false)
$file_arr[] = $filename;
}
return $file_arr;
}

echo (str_search('tzflp', 'файл.txt', 'Выборка'))."<br>";
print_r(str_search('tzflp', 'файл.txt', 'Выборка'));
echo "<br>";
var_dump(str_search('tzflp', 'файл.txt', 'Выборка'));

echo "<br>";
echo "<br>";
echo "<br>";

if (strpos(file_get_contents("base.txt"), "Работа"))
    echo "Искомая строка найдена";
else echo "Искомая строка отсутствует";

echo "<br>";
echo "<br>";
echo "<br>";

function getRandLineFromFile($fileName, $lenght){
    $hendel = fopen($fileName, 'r+');
    if(!$hendel)
        return '';

        $cLineCount = 0;
        $sLineOut = '';
        while (!feof($hendel)) {
            $cLineCount++;

                $sLine = fgets($hendel);
                echo $sLine;


                //if (rand(1, $cLineCount) == $cLineCount) {
            if($lenght)
            $sLineOut = $sLine;
                //}
        }
    return $sLineOut;
}

echo '***'.getRandLineFromFile('base.txt', 'Группа').'***';

echo "<br>";
echo "<br>";
echo "<br>";


//if (strpos(file_get_contents("base.txt"), "Работа"))
//    echo "Искомая строка найдена";
//else echo "Искомая строка отсутствует";
//
//echo "<br>";
//echo "<br>";
//echo "<br>";
//
//function getRandLineFromFile($fileName, $lenght){
//    $hendel = fopen($fileName, 'r+');
//    if(!$hendel)
//        return '';
//
//    $cLineCount = 0;
//    $sLineOut = '';
//    while (!feof($hendel)) {
//        $cLineCount++;
//
//        $sLine = fgets($hendel);
//        echo $sLine;
//
//        //if (strpos(file_get_contents($fileName), "$lenght")== $cLineCount) {
//        //if (rand(1, $cLineCount) == $cLineCount) {
//        if($lenght)
//            $sLineOut = $sLine;
//        //}
//        //}
//    }
//    return $sLineOut;
//}
//
//echo '***'.getRandLineFromFile('base.txt', 'Группа').'***';