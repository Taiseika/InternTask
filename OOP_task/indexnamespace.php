<?php

use namespace0 as name1;
use namespace2\M2;
use File3\foo3;
use MyProject\My2 as name;

include_once "namespace0.php";
include_once "namespace2.php";
include_once "namespace3.php";

echo name1\foo().'<br>';
echo M2::foo().'<br>';
echo foo3\foo().'<br>';

function __autoload($class)
{
    $class = str_replace('\\', '/', $class);
    include_once $class .".php";
}
$nameMy2 = new name();
echo $nameMy2->newClass();