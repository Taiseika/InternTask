<?php

require_once 'IWeatherService.php';
require_once 'SecondCountry.php';

class WeatherAdapter implements IWeatherService
{
    private $latitude;
    private $longitude;
    private $service;

    public function __construct(SecondCountry $service)
    {
        $this->service = $service;
    }

    public function getTemperature()
    {
        $tf = $this->service->getTemperature($this->latitude, $this->longitude);
        return($tf-32)*5/9; //F -> C
    }

    public function getWind()
    {
        $WindSpeed = $this->service->getTemperature($this->latitude, $this->longitude);
        return ceil($WindSpeed / 196.85); // ft/min -> m/s
    }

    public function getFellsLikeTemperature()
    {
       return ceil(1.1*$this->getTemperature() - $this->getWind()*1.78); // Формула ощещения температуры при высоко влажности

    }

    public function setPosition(string $city)
    {
        switch ($city)
        {
            case "Washington":
                $this->latitude = 38.53;
                $this->longitude =  77.02;
                break;
            case "New York":
                $this->latitude = 40.43;
                $this->longitude =  73.59;
                break;

        }
    }
}