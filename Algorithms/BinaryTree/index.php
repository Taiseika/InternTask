<?php

include 'Node.php';
include 'Tree.php';

$tree = new Tree();
$tree->insert(1);
$tree->insert(2);
$tree->insert(33);
$tree->insert(4);
$tree->insert(5);
$tree->insert(6);
$tree->insert(7);
$tree->insert(8);
$tree->insert(9);
$tree->insert(0);
$tree->insert(10);
$tree->insert(11);

$tree->traverse();
