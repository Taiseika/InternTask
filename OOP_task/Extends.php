<?php

Class User
{
    //Свойства юзера
   public $name;
   public $password;
   public $email;
   public $city;

    /**
     * User constructor.
     * @param $name
     * @param $password
     * @param $email
     * @param $city
     */
    public function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    // функция вывода информации обьекта User
    function getInfo ()
    {
        $information = "Имя: {$this->name} <br>"."Пароль: {$this->password} <br>"."Email: {$this->email} <br>"."Город проживания: {$this->city} <br>";
        return $information;
    }

}

$user1 = new User('Alex', '123', 'mail@mail.com', 'Kiev');
echo $user1->getInfo().'<br>';


class Moderator extends User
{
    // Расширенные свойства для Moderator-a
    protected $info;
    protected $rights;


    public function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }

    function getInfo ()
    {
        $information = parent::getInfo();
        $information .= "Информация о пользователе: {$this->info} <br>"."Права: {$this->rights} <br>";
        return $information;
    }
    function hello ()
    {
        echo 'Moderator is here';
    }
}

$moder = new Moderator('Konstantin', 'admin', 'admin@mail.com', 'Kharkov', 'Moderator', 'true');
echo $moder->hello()."<br>";
echo $moder->getInfo();