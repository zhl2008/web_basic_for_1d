<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Web漏洞演练平台</title>
</head>
<body>
<div align="center">
<font color='green' size='4'>Upload Something</font><br><br>
<div style="border:green thin solid; width:500px; height:auto; text-indent:20px;text-align:left; padding:20px;margin-left:20px;">
<font size=3>
<?php
$ext_arr = array("php5","php");
if($_FILES['upload']){

$temp_arr = explode(".", $_FILES["upload"]["name"]);
$file_ext = array_pop($temp_arr);
$file_ext = trim($file_ext);
$file_ext = strtolower($file_ext);
$target_name = './upload/'.$_FILES['upload']['name'];
if (in_array($file_ext, $ext_arr) == true) {
        exit("不允许上传该后缀的文件！");
    }
if(!move_uploaded_file($_FILES['upload']['tmp_name'],$target_name)) {
$message = '图片未成功上传';

} else {

echo "<a href='".$target_name."'>".$_FILES['upload']['name']."</a>&nbsp;&nbsp;被成功上传";
}
}
else {
?>
<form action='' method='post' enctype='multipart/form-data' name='upload'>
<input type='file' name='upload'>
<input type='submit' value='上传'>
<input type='hidden' name='MAX_FILE_SIZE' value='1024'>
</form>
<?php
}
?>
</font><br>
</div>
</div>
</body>
</html>
