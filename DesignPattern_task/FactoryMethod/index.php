<?php

include 'FacebookConnector.php';
include 'FacebookPoster.php';
include 'LinkedInConnector.php';
include 'LinkedInPoster.php';
/*
 * Фабричный метод - это способ делегирования логики создания
 * обьектов дочерник классов
 */

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello World!");
    $creator->post("I made a large text for this note.");
}

echo "Test ConcreteCreator1:<br>";
clientCode(new FacebookPoster("mikePike","123123"));
echo '<br>';
echo "Test ConcreteCreator2:<br>";
clientCode(new LinkedInPoster("Dadmail@mail.com","dadpass"));
echo '<br>';