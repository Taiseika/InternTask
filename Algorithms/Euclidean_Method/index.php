<?php

function EucMethod ($a, $b)
{
    while ($a != 0 && $b != 0)
    {
        if ($a > $b)
        {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    echo ($a + $b);
}

EucMethod(30 , 18);
