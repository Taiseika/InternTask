<?php

$localhost='localhost';
$database='registr';
$user='root';
$password='';

$connect=mysqli_connect($localhost,$user,$password,$database);
if (!$connect) {
    die('ERROR');
}