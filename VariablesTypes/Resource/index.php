<?php

$conn = mysqli_connect('localhost',"root","","somedb");

$fp = fopen("index.php",'r');


fclose($fp);