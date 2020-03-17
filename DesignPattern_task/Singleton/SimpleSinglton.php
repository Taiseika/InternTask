<?php


namespace Singleton;


class SimpleSingleton
{
    private static $instance;

    private $test;

    static public function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }

    public function setTest($val)
    {
        $this->test = $val;
    }

    static function getDescription()
    {
      $singleDesc = "<p> Одиночка (Singleton) - порождающий шаблон проэктирования,
  гарантирующий, что в однопроцессном приложении будет единтсвенный экземпляр
  некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.</p>";

      return $singleDesc;
    }
}