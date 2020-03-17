<?php
abstract class Human
{
    public $name;
    public $gender;
    public $age;

    public function getStatus($arr)
    {
        $this->name = $arr['name'];
        $this->gender = $arr['gender'];
        $this->age = $arr['age'];
    }

    public function print_data()
    {
        echo "<br>"; print_r($this);
    }

}

class Man extends Human
{
    public function __construct($arr)
    {
        $this->getStatus($arr);
    }
    public function whatMansLike ()
    {
        echo 'Mans like: car, money, hunt';
    }
}
class Woman extends Human
{
    public function __construct($arr)
    {
        $this->getStatus($arr);
    }
    public function whatWomanLike ()
    {
        echo 'Woman like: skirt, cook, stay at house';
    }

}

$he = new Man(array(
    "name"=>"Jhon",
    "gender"=>"male",
    "age"=>"25"
));

$he->print_data();
echo '<br>';
$he->whatMansLike();
echo '<br>';
$she = new Woman(array(
    "name"=>"Miranda",
    "gender"=>"female",
    "age"=>"22"
));
$she->print_data();
echo '<br>';
$she->whatWomanLike();