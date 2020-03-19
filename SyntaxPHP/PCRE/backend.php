<?php

function clear ($a) {
    $a = strip_tags($a);
    $a = htmlspecialchars($a);
    $a = trim($a);
    return $a;
}

function check_email ()
{
    if(isset($_POST['go'])) {
        if ($_POST['email']) {

            $email = htmlspecialchars(clear($_POST['email']));

            if (!preg_match("|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is", $email)) {
                $result ="$email - Не правильный формат";
            } else {
                $result = "Почта $email правильная и проходит по условиям preg_match";
            }
        }
    }
    echo $result;

    return $result;
}