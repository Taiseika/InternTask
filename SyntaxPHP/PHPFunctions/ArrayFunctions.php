<?php
function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

echo '<hr>';

$AccosArr = [
    'apple' => 'red',
    'pineaple' => 'yellow',
    'watermelon' => 'dark-green'
];

echo 'array_change_key_case: <br>';
$newArr2 = array(print_r(array_change_key_case($AccosArr, CASE_UPPER)));
echo '<br>';

echo '<hr>';

echo 'array_chunk: <br>';
debug(array_chunk($AccosArr, 1));
echo '<hr>';

echo 'array_column: <br>';

$names1 = array(
    array(
        'id' => 1,
        'name' => 'Victor'
    ),
    array(
        'id' => 2,
        'name' => 'Den'
    ),
    array(
        'id' => 2,
        'name' => 'Slava'
    ), array(
        'id' => 2,
        'name' => 'Mike'
    ));

debug(array_column($names1, 'name'));

echo '<hr>';
echo 'array_combine: <br>';


$color = array('Red', 'Green', 'Black', 'Yellow');
$fruits = array('apple1', 'apple2', 'watermelon', 'pineaple');

debug(array_combine($fruits, $color));

echo '<hr>';

$mass = array();
echo 'Create a random number in array: <br>';

for ($x = 0; $x < 20; $x++) {
    $mass[] = (int)floor(mt_rand(0, 100) / 10);

}

foreach ($mass as $numb => $rez) {
    echo $numb . ' = ' . $rez . '<br>';
}

echo '<hr>';
echo 'Array sort: <br>';

sort($mass);

foreach ($mass as $numb => $rez) {
    echo $numb . ' = ' . $rez . '<br>';
}

echo '<hr>';
sort($mass);

$null = 0;
echo 'Array shift: <br>';

foreach ($mass as $numb) {
    if ($numb == 0) {
        $null++;
        array_shift($mass);
    }

}

foreach ($mass as $numb => $rez) {
    echo $numb . '=' . $rez . '<br>';
}


echo "Ноль был в массиве = " . $null . " раза и был удален.<br>";

echo '<hr>';

$sumOfAll = 0;
foreach ($mass as $numb => $rez) {
    $sumOfAll += $rez;
}
echo 'Array sum: <br>';

echo "Cумма всех элемнтов = " . $sumOfAll . "." . '<br>';

echo '<hr>';

echo 'Array shuffle: <br>';

shuffle($mass);

foreach ($mass as $numb => $rez) {
    echo $numb . '=' . $rez . '<br>';
}

echo '<hr>';

echo 'Array flip: <br>';


debug(array_flip($mass));


echo '<hr>';
echo 'Array ksort: <br>';

ksort($mass);
debug($mass);

echo '<hr>';

echo 'Array min: <br>';

echo min($mass) . '<br>';

echo 'Array max: <br>';

echo max($mass) . '<br>';

echo '<hr>';

echo 'Array push: <br>';

for ($x = 0; $x < 5; $x++) {
    array_push($mass, mt_rand(0, 100));
}

debug($mass);

echo '<hr>';

$mass3 = array();

echo 'Array merge: <br>';

foreach ($mass as $numb2 => $rez2) {
    $mass3[] = ceil((($rez2) ** 2) / 10);
}

$MergSum = array_merge($mass, $mass3);

foreach ($MergSum as $mergenumb => $mergrez) {
    echo $mergenumb . '=' . $mergrez . '<br>';
}









