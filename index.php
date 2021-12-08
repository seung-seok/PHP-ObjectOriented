<?php

// 상태 : Property
// 행동 : Methods
// ->  : 접근 연산자
class A
{
    public $message = 'hello, world';

    public function foo()
    {
        return $this->message;
    }
}

// class를 기반으로 객체 생성
$a = new A(); 
var_dump($a->foo());