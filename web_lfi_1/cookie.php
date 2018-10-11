<?php
include "flag.php";

if(isset($_COOKIE['user'])){
    if($_COOKIE['user']=="admin"){
	echo $flag;
    }else{
	echo "who are u ?";
    }
}else{
    setcookie("user","guest");
}
?>
hack with cookie



