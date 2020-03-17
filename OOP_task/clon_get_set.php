<?php

class User
{
    private $name;
    private  $city;
    private  $id;

    function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
     $this->id = 0;
    }
}

$user = new User('Victor', 'Kiev');
$user->setId(123);
$user2 = clone $user;
var_dump($user);
var_dump($user2);

class GetSet
{
    private $number = 1;

    public function __get($name)
    {
        echo "Вы получили {$name}";
    }
    public function __set($name, $value)
    {
     echo "You set {$name} to ";  // TODO: Implement __set() method.
    }
}

$obj = new GetSet();
echo $obj->number;
echo '<br>';
echo $obj->number = 213;