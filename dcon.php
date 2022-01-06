<?php

class A {

    private $values;

    public function __construct(String $dd){
        $this->values = $dd;
        echo $dd;
    }
}
$d = new A('Lee Seung Seok');
var_dump($d);

// $str = "이승석";
// echo "this is a $str";