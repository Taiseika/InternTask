<?php

/*
 * Адаптер -  структурный шаблон проектирования,
 * предназначенный для организации использования функций объекта,
 * недоступного для модификации, через специально созданный интерфейс.
 */
require_once 'IWeatherService.php';
require_once 'FirstCountry.php';
require_once 'WeatherAdapter.php';
require_once 'SecondCountry.php';

$service = new FirstCountry();
$service->setPosition("Киев");

echo '<h2>Город - Киев</h2>';
echo "Температура (С): ".$service->getTemperature()."<br>";
echo "Скорость ветра (м\с): ".$service->getWind()."<br>";
echo "Ощущаемая температура (С): ".$service->getFellsLikeTemperature()."<br>";

$service1 = new WeatherAdapter(new SecondCountry());
$service1->setPosition('Washington');

echo '<h2>Город - Washington</h2>';
echo "Температура (С): ".$service1->getTemperature()."<br>";
echo "Скорость ветра (м\с): ".$service1->getWind()."<br>";
echo "Ощущаемая температура (С): ".$service1->getFellsLikeTemperature()."<br>";
