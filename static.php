<?php 
error_reporting(E_ALL);

class A
{
    public static function foo()
    // public function foo()
    {
        static::who();
    }

    public static function who()
    // public function who()
    {
        var_dump(__CLASS__);
    }
}

class B extends A
{
    public static function test()
    // public function test()
    {
        A::foo(); // -> A
        parent::foo(); // -> B
        self::foo(); // -> B
    }

    public static function who()
    // public function who()
    {
            var_dump(__CLASS__);
    }
}

// $b = new B();
// $b->test();
B::test();
