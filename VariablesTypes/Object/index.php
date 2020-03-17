<?php

class foo
{
    function start()
    {
        echo "Код start.";
    }
}

$bar = new foo;
$bar->start();

echo '<br>';

$obj = (object) 'Привет я обьект.';
echo $obj->scalar;  // выведет Сообщение.