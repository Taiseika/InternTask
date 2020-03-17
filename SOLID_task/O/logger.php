<?php

require 'LoggerInterface.php';

class FileLogger implements ILogger
{


    private function saveToFile($message)
    {
        //....
    }

    public function log($message)
    {
        //save to file
        $this->saveToFile($message);
    }
}
class DbLogger implements ILogger
{
    private function saveToDb($message)
    {
        //...
    }

    public function log($message)
    {
        //save to file
        $this->saveToDb($message);
    }
}
