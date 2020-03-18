<?php

echo $floatVar = 212.121212.'<br>';
$wantOtBeFloat = '12.213asdv';

if (!is_float($wantOtBeFloat)){
   echo floatval($wantOtBeFloat);
}