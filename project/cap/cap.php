<?php

$str=md5(microtime());;
$str=substr($str,0,6);
$img=imagecreate(100,50);
imagecolorallocate($img, 255, 255, 255);
$textcol=imagecolorallocate($img, 0, 0, 0);
imagestring($img, 20,5,5,$str,$textcol);
header('contan:image1/jpeg');
imagejpeg($img);
?>