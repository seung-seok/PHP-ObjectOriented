<?php

class A
{
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    public function __construct()
    {
        
    }
}

// $a= new A();
// var_dump($a->private);

class B extends A
{
    private $message = 'Hello, world';

    private static $instace;
    
    private function __construct()
    {
        // parent::__construct();
        var_dump($this->message);
    }

    public static function getInstance()
    {
        // return new self();
        return self::$instance ?: self::$instance = new self();
    }
}

$b = B::getInstance();
// $b = new B();