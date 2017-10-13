<?php
function CheckURL(){
    $servername=$_SERVER['SERVER_NAME'];
    $sub_from=$_SERVER["HTTP_REFERER"];
    $sub_len=strlen($servername);
    $checkfrom=substr($sub_from,7,$sub_len);
    if($checkfrom!=$servername)die("警告！你正在从外部提交数据！请立即终止！");

}
CheckURL();
require_once './opt_base.php';
$uploaded1 = new curd();
$uploaded1->uploadServerFile($client);
