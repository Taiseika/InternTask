<?php

interface FirstInterface
{
    public function getName ();

}

interface SecondInterface
{
    public function getStatus();
}




class test implements FirstInterface, SecondInterface
{
    public $name = "Alex";
    public $status = "admin";

    public function getName()
    {
     echo $this->name; // TODO: Implement getName() method.
    }

    public function getStatus()
    {
     echo $this->status;  // TODO: Implement getStatus() method.
    }
}

$user = new test;

$user->getStatus();
echo ' - ';
$user->getName();