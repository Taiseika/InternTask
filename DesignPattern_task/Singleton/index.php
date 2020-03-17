<?php

use Singleton\SimpleSingleton;

require "SimpleSinglton.php";
/*
 * Одиночка (Singleton) - порождающий шаблон проэктирования,
 * гарантирующий, что в однопроцессном приложении будет единтсвенный экземпляр
 * некоторого класса, и предоставляющий глобальную точку
 * доступа к этому экземпляру.
 */
class SingletonIndex
{
    public function Singleton()
    {
       echo $name = "<h1>Одиночка(Singleton)</h1>"."<br>";
       echo  $description = SimpleSingleton::getDescription();

       $result['simpleSingleton1'] = SimpleSingleton::getInstance();
       $result['simpleSingleton1']->setTest('simpleSingleton1');
       $result['simpleSingleton2'] = SimpleSingleton::getInstance();

       $result[] = $result['simpleSingleton1'] === $result['simpleSingleton2'];


       echo '<pre>'.print_r($result, true).'</pre>';

    }
}

$singleobj = new SingletonIndex();
$singleobj->Singleton();
