<?php
//$f = fopen("data.txt","a+") or die("Error");
//fputs($f,"\nLine six");

//echo fread ($f, filesize("data.txt"));//���������� ���� ����
//echo fgetss($f, 311);//��������� ������
//echo fgetss($f, 311,"<br><a>");//��������� ������ �������� ����
/*echo fgetc($f);
echo fgetc($f);
echo fgetc($f);
echo fgetc($f);*/

//fclose($f);

/*$arr = file("data.txt");
print_r($arr);*/

file_put_contents("data.txt","\nLine seven",FILE_APPEND);

?>