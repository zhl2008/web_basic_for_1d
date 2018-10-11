<?php
session_start();
$flag = "flag{hello_world}";
if(isset($_REQUEST['act'])){
    include $_REQUEST['act'];
}else{
    header("Location: index.php?act=flag.txt");
}

file_put_contents("url.txt",urldecode($_SERVER["REQUEST_URI"])."\r\n",FILE_APPEND);

?>

<br><hr>
hello,
<?php 
if(isset($_SESSION['name'])){
    echo $_SESSION['name']; 
    echo ", <a href=logout.php>logout</a>";
}else{
    echo "<a href=login.php>guest</a>";
}
?> 
<h1> include something </h1>
