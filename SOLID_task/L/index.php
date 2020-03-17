<?php

require 'bird.php';
require 'birdRun.php';

/*
 * L - Liskov Substitution principle
 * Принцып подстановки Барбары Лисков
 *
 * Поведения наследуемых классов
 * не должно противоречить повидению задонным базовом классом.
 * Поведение наследуемых классов должно быть ожидаемым
 * для кода который использует базовый класс.
 */
$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();