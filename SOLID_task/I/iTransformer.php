<?php

/*
 * I - interface Segregation Principle
 * Принцып разделения интерфейсов
 *
 * Клиенты не должны зависить от методов котороые они не используют.
 * Много мпециализированных интерфейсов чем один уневерсальный.
 */
interface iCarTransformer
{
    public function toCar();
}
interface iPlaneTransformer
{
    public function toPlane();
}
interface iShipTransformer
{
    public function toShip();
}