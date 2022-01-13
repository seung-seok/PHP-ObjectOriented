<?php

class A {

    public $values;
    public $str;

    public function __construct(String $dd){
        $this->values = $dd;
        echo $dd;
    }
}
// $d = new A('Lee Seung Seok');
// var_dump($d);

class B extends A{
    public $start;
    public $num = 0;
    public $arr = ['안녕하세용'];
    public function __construct(){
        parent::__construct("123");
        $this->start = "스타트";
        $this->str = "dddddddd";
        
    }
    public static function random(String $a){
        // echo "$a 의 값";
        // $arr[] += $a;
        array_push($arr,$a);
        echo $arr;
    }
}
// $str = "이승석";
// echo "this is a $str";

$b = new B();
// var_dump($b->str);
$d = [];
$d = B::random('zdzdzdzd');
echo $d;
// var_dump($d);

$arr1 = ['arr1', 'arr2'];
$arr2 = ['arr3'];
// array_push($arr1, "dddd");



