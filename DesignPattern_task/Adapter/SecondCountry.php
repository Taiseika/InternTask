<?php
class SecondCountry
{
    /*
     * Вовращает температуру
     * @param latitude - широта
     * @param longtitude - долгота
     * @param температура в градуса форенгейта
     */
    public function getTemperature (float $latitude, float $longitude)
    {
        if ($latitude == 38.53 && $longitude == 77.02) //Washington
            return 86;
        else
            if ($latitude == 40.43 && $longitude == 73.59) // New York
                return 95;
            else
                return 80;
    }

    /*
    * Вовращает скорость ветра
    * @param latitude - широта
    * @param longtitude - долгота
    * @param скорость ветра в фут\мин
    */
    public function getWind (float $latitude, float $longitude)
    {
        if ($latitude == 38.53 && $longitude == 77.02) //Washington
            return 1000;
        else
            if ($latitude == 40.43 && $longitude == 73.59) // New York
                return 1500;
            else
                return 2000;
    }
}