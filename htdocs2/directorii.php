<?php
/*
//$files = scandir(".");//если вторым параметром написать единицу развернет массив
//print_r($files);exit;
$d = opendir(".");
while($name = readdir($d)){
if($name == "." or $name == "..")
  continue;
    if(is_dir($name))
        echo"<b>[$name]</b><br>";
    else
        echo"$name<br>";
}
closedir($d);
*/
function dirs($dir)
{
    $d = opendir($dir);
    while ($name = readdir($d)) {
        if ($name == "." or $name == "..")
            continue;
        if (is_dir($name)) {
            echo "<b>[$name]</b><br>";
            dirs($dir . "/$name");
        }
        else
            echo "$name<br>";
    }
    closedir($d);
}
dirs(".");
?>