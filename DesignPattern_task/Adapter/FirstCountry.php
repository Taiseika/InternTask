<?php
require_once 'IWeatherService.php';

class FirstCountry implements IWeatherService
{
    private $city = null;

    /*
     * Возвращает температуру
     * @return температуру в градусах цельсия
     */
    public function getTemperature()
    {
        switch ($this->city)
        {
            case "Киев": return 25;
            case "Харьков": return 22;
            default :return 20;
        }
    }

    /*
     * Возвращает скорость ветра
     * @return скорость ветра в м\с
     */
    public function getWind()
    {
        switch ($this->city)
        {
            case "Киев": return 4;
            case "Харьков": return 7;
            default :return 5;
        }
    }

    /*
     * Возвращает ощущаемую температуру
     * @return ощущаемую температуру в градусах цельсия
     */
    public function getFellsLikeTemperature()
    {
        switch ($this->city)
        {
            case "Киев": return 30;
            case "Харьков": return 28;
            default :return 23;
        }
    }

    public function setPosition(string $city)
    {
        $this->city = $city;
    }
}