<?php

// Методы создания массива
// Index array
$arr = [];
$arr1 = array('First Element', 'Second');
$arr1[] = 'Third';
$arr1count = count($arr1);

//display info for index array
for ($a = 0; $a < $arr1count; $a++ )
    echo $arr1[$a].'<br>';
echo '<br>';

//Assoc array
$arr2 = [
    'name'=>'Mike',
    'age' => 34,
    'gender'=>'man'
    ];

//display info for Assoc array
foreach ($arr2 as $item2 => $value2)
{
    echo $item2.' - '.$value2.'<br>';
}

//Two-dimensional array
$arr3 = array(
    'Иван'=> array('рост'=>175,'вес'=>80),
    'Вова'=> array('рост'=>190,'вес'=>78),
    'Саня'=> array('рост'=>200,'вес'=>86),
);

//display info for Two-dimensional array
foreach ($arr3 as $item3 => $value3)
{
    echo '<br>'.$item3.': <br>';
    foreach ($value3 as $param3 => $pval3){
        echo "$param3 = $pval3<br>";
    }
}