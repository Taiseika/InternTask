<?php

Class user
{
    protected static $name = 'Alex';

    public static function printName ()
    {
        echo self::$name.'<br>';
    }
}
class infouser extends user
{
    public static function getInfo ()
    {
        echo user::$name;
    }
}

user::printName();
echo infouser::getInfo();

