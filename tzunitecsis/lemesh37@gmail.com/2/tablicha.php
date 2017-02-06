<?php
for($i = 0; $i < $num; $i++)
{
    $before = '';
    $after = '';
    if(
        isset($_GET['id']) && $_GET['id'] == $postrow[$i]['userid']
    ){
        $before = '<b>';
        $after = '</b>';
    }
    echo "<tr class='wer'>
         <td >".$before.$postrow[$i]['username']."</td>
         <td>".$before.$postrow[$i]['userid'].$after."</td></tr>";
}
?>