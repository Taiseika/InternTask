<?php
class Bird
{
    public function fly()
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}

class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        return "i can'n fly";
    }

    public function swim()
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}