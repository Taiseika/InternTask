<?php

class Product
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function serPrice($prices)
    {
        try{
            // save price in db
            echo 'Данные добавлены';
        } catch (DbException $e) {
            $this->logger->log($e->getMessage());
        }
    }

}