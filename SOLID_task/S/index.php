<?php

require "logger.php";
require 'product.php';
/*
 * SOLID_task
 * S - Single responsibility principle
 * Принцып единой ответственности
 * Каждый класс должен иметь только одну причину для изменений.
 */
$logger = new Logger();
$product = new Product($logger);
$product->serPrice(10);