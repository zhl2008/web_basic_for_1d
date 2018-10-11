<?php

class TestClass
{

    public $variable = 'hackme';
    public $my_function = 'echo';

    public function my_echo()
    {
	$my_function = $this -> my_function;
        $my_function($this -> variable) ;
    }

    public function __wakeup()
    {
        echo '__wakeup <br />';
    }


    public function __construct()
    {
        echo '__construct <br />';
    }


    public function __destruct()
    {
        $this -> my_echo();
    }

}

if(isset($_COOKIE['user'])){
    echo base64_decode($_COOKIE['user']);
    $user = unserialize(base64_decode($_COOKIE['user']));
}else{
    $user = 'guest';
    setcookie('user',base64_encode(serialize($user)));
}
?>
<h1>Hello world</h1>
you are <?php echo 'guest';?>, right?
<!-- <?php show_source(__FILE__);?>-->


