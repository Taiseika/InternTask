<?php

session_start();

$UpdatePageCount = (isset($_SESSION['updatePage'])) ? $_SESSION['updatePage'] : 0;
$UpdatePageCount++;
$string = 'Страница была обновленна ';

$_SESSION['updatePage'] = $UpdatePageCount;
$_SESSION['sting'] = $string;

echo $_SESSION['sting'].$UpdatePageCount.' раз.';

session_destroy();
