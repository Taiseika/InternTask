<?php

require 'logger.php';
require 'product.php';

/*
 * SOLID_task
 * O- Open-close principle
 * Принцып открытости закрытости
 *
 * Класса должны быть открыты для расщирений
 * и закрыты для изминений.
 */
$logger = new DbLogger();
$product = new Product($logger);
$product->serPrice(10);