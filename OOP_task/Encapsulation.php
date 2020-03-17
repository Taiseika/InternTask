<?php

class A
{
    private $id = 'Свойство класса А';
    function getID()
    {
        echo $this->id;
    }
}

$obj1 = new A;
$obj1->getID();