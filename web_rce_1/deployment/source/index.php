<h1>welcome to distance-check website</h1>

<form method="post" action="/index.php">
ip address:<br>
<input type="text" name="ip" value="">
<br>
<input type="submit" value="Submit">
</form> 

<?php
if(isset($_REQUEST['ip'])){

    $cmd = 'ping -c 1 -w 2 ' . $_REQUEST['ip'];
    $result = shell_exec($cmd);
    $match = [];
    preg_match('/time=[0-9\.]* ms/',$result,$time);
    if($time){
	$time = substr($time[0],5,-2);
	echo 'result: '.$time.'ms between u and '.$_REQUEST['ip'] . "\n";	
    }else{
	echo 'get out! hacker!';
    } 

}

?>
