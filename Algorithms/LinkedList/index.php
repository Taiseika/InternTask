<?php

include 'Node.php';
include 'Stack.php';

$stack = new Stack();
$stack->put('Jhon');
$stack->put('Alex');
$stack->put('Mike');

echo $stack->get().'<br>';
echo $stack->get().'<br>';
echo $stack->get().'<br>';