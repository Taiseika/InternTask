<?php

/*
 * D - Dependency Inversion Principle
 * Принцип инверсии зависимостей
 *
 * Стоиться на основе абстракций,
 * модули верхних уровней не должни зависить от модулей нижних уровней.
 * Оба типа модулей должни зависить от обстракций.
 * Абстракции не должны зависить от деталей.
 * Детали должны зависить от обстракций.
 * Зависимости должны строить от обстракций а не не деталей(классов).
 */
class lowRankingMale
{
    //Зависимтость от класса Wife -> нарущение
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
        //... eat
    }
}
class averageRankingMale
{
    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat ()
    {
        $food = $this->wife->getFood();
        //... eat
    }
}
class highRankingMale
{
    private $foodProvider;

    public function __construct(IFoodProvider $foodProvider)
    {
       $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
    }
}