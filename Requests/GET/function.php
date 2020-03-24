<?php
require_once "oop.php";

function RealizeCalculator () {

    if (isset($_GET['go'])) {

        if($_GET['FirstBox']!=="" && $_GET['SecondBox']!=="" && $_GET['znak']){

            $calculator = new Calculator($_GET['FirstBox'], $_GET['SecondBox'], $_GET['znak']);

            $calculator->Calculate();

            echo "Результат: ".$resultCalcul = $calculator->getResult();

        } else echo $resultCalcul="Заполните значения";


    } else echo $resultCalcul="Подтвердите действие";

    return $resultCalcul;

}


?>