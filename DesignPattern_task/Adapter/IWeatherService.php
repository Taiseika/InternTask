<?php
interface IWeatherService
{
    function getTemperature();
    function getWind();
    function getFellsLikeTemperature();
    function setPosition(string $city);
}