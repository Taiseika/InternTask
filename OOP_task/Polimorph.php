<?php
class A
{
    private $id = 'Свойство класса А';
    function printMessage($message)
    {
        echo $message.' '.'use class A'.' '.$this->id.'<br>';
    }
}
class B extends A
{
    private $id = 'Свойство класса B';
    function printMessage($message)
    {
        echo $message.' '.'use class B'.' '.$this->id.'<br>';
    }
}
class C extends A
{
    private $id = 'no methods';
}

$obj1 = new A;
$obj1->printMessage('Hello class A');

$obj2 = new B;
$obj2->printMessage('Hello class B');

$obj3 = new C;
$obj3->printMessage('Hello class C');