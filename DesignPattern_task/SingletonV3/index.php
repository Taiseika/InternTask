<?php

require 'Singleton.php';

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo $s1->data;
echo '<br>';
echo $s2->data;
