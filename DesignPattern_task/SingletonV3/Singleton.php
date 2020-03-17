<?php

class Singleton
{
    public $data;

    public function __construct()
    {
        $this->data = mt_rand();
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    private static $instance = null;

    public static function getInstance ()
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}