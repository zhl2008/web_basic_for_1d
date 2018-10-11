<?php

session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
	echo '<h1>hello, admin!</h1>';
}else{
	$_SESSION['admin'] = 1;
}
?>
