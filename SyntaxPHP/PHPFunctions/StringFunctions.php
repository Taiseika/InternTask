<?php

echo 'Пример strtr: <br>';

$trans = array("hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans) . '<br>';
echo '<hr>';

echo 'Пример str_repeat: <br>';
echo $tripleHello = str_repeat("Hello, how are you?<br>", 3) . ' <br>';
echo '<hr>';

echo 'Пример strlen: <br>';
echo strlen($tripleHello);
echo '<hr>';

echo 'Пример substr_count: <br>';
echo substr_count($tripleHello, 'Hello');
echo '<hr>';

echo 'Пример strtoupper: <br>';
echo strtoupper('do you best battle horn!');
echo '<hr>';

echo 'Пример strtolower: <br>';
echo strtolower('YOU SO NOISE!');
echo '<hr>';

echo 'Пример explode: <br>';
$names  = "Nick Serg Ivan Demid";
$name_mass = explode(" ", $names);
$countArr = count($name_mass);
for ($a = 0; $a < $countArr; $a++){
    echo $name_mass[$a].'<br>';
}
echo '<hr>';

echo 'Пример implode: <br>';
$nep = array('lastname', 'email', 'phone');
$separated = implode(",", $nep);
echo $separated;
echo '<hr>';

echo 'Пример trim: <br>';
echo $alotofspacestring = "a lor of space";
echo '<br>';
echo trim($alotofspacestring);
echo '<hr>';


echo 'Пример md5: <br>';
$password = 'apple';
$md5pass = md5($password);

if (md5($password) === '1f3870be274f6c49b3e31a0c6728957f'){
        echo "$password = $md5pass <br>Пароль верный!";
}
echo '<hr>';

echo 'Пример str_replace: <br>';
echo $phrase  = "You should eat fruits, vegetables, and fiber every day.";
echo '<br>';
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
echo $newphrase = str_replace($healthy, $yummy, $phrase);
echo '<br>';
echo '<hr>';

echo 'Пример ucfirst: <br>';
echo $firstLatter = "a lor of space";
echo '<br>';
echo ucfirst($alotofspacestring);
echo '<hr>';


