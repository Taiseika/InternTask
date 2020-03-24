<?php

$UpdatePageCount = (isset($_COOKIE['updatePage'])) ? $_COOKIE['updatePage'] : 0;
$UpdatePageCount++;

$string = 'Страница была обновленна ';
setcookie('sting', "$string");
setcookie('updatePage', $UpdatePageCount, time() + 4);

echo $_COOKIE['sting'].$UpdatePageCount.' раз.';