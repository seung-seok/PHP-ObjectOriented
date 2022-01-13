<?php

class A{
    public function __construct()
    {
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        var_dump(__METHOD__);
    }
}

// $a = new A();
// var_dump('hello, world');
// var_dump($a);

class B
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}

$b = new B('hello, world');
// var_dump($b);
class C extends A
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {        
        parent::__destruct();
    }

}
$c = new C();
var_dump($c);