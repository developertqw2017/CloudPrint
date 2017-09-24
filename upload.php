<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>上传你的File吧</title>
</head>
<body/>
<form enctype="multipart/form-data" method="post" action="uploadpri.php">
<table>
<tr><td align="center" colspan="2"><font style="font-size:40px;font-family: 华文彩云;">文件上传</font></td></tr>
<tr><td>请选择你要上传文件：</td><td><input type="file" name="myfile"/></td></tr>
<tr><td><input type="submit" value="上传文件"/></td></tr>
</table>
</form>

<form enctype="multipart/form-data" method="get" action="getpri.php">
<table>
<tr><td align="center" colspan="2"><font style="font-size:40px;font-family: 华文彩云;">文件上传</font></td></tr>
<tr><td>请输入密码：</td><td><input type="text" name="pass"/></td></tr>
<tr><td><input type="submit" value="下载"/></td></tr>
</table>
</form>

</body>
</html>
