<?php

function getArray($setQuantity, $setMinNum, $setMaxNum)
{
    $arr = array();
    for ($s = 0; $s < $setQuantity; $s++){
        $arr[$s] =  mt_rand($setMinNum, $setMaxNum);
    }
    return $arr;
}

function bubble_sort(&$array)
{
    for ($i = 0; $i < count($array); $i++)
    {
        for ($o = ($i+1); $o < count($array); $o++)
        {
            if ($array[$i] > $array[$o])
            {
                $c = $array[$i];
                $array[$i] = $array[$o];
                $array[$o] = $c;
            }
        }
    }
}

$newArr = getArray(10, 0, 100);
bubble_sort($newArr);

echo "It's a bubble_sort: <pre>";
print_r($newArr);
echo '</pre>';

$newArr2 = getArray(10, 0, 1000);
sort($newArr2);

echo "It's a array_sort: <pre>";
print_r($newArr2);
echo '</pre>';