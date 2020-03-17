<?php

class Logger
{
    public function log($message)
    {
        //save to file
        $this->saveToFile($message);
    }
}
