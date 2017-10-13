<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2017/3/9
 * Time: 20:53
 */
$url = 'http://www.iyi8.com/uploadfile/2014/0521/20140521105216901.jpg';
$content = file_get_contents($url);
$url = 'http://wiki.ubuntu.org.cn/images/3/3b/Qref_Edubuntu_Logo.png';
$content1 = file_get_contents($url);
file_put_contents('src.jpg',$content);
file_put_contents('logo.png',$content1);
$image1 = imagecreatefromjpeg('src.jpg');
$image2 = imagecreatefrompng('logo.png');
$size = getimagesize('logo.png');
imagecopy($image1,$image2,10,10,0,0,$size[0],$size[1]);
header("Content-type:image/jpeg");
imagejpeg($image1);
