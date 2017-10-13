<?php
$img = imagecreatetruecolor(100, 100);
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);
//在这里使用imageline绘制线条
imageline($img, 0, 0, 100, 100, $red);
header("content-type: image/png");
imagepng($img);
imagedestroy($img);