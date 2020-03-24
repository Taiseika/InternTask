<?php
require_once ('oop.php');
require_once ('function.php');

?>

<form action="" method="GET">
    <input type="text" name="FirstBox">

    <input type="radio" name="znak" value="+"><label>+</label>
    <input type="radio" name="znak" value="-"><label>-</label>
    <input type="radio" name="znak" value="*"><label>*</label>
    <input type="radio" name="znak" value="/"><label>/</label>
    <input type="radio" name="znak" value="%"><label>%</label>


    <input type="text" name="SecondBox">

    <input type="submit" value="ok" name="go">

    <h1><?php include_once 'function.php'; RealizeCalculator()?></h1>

</form>

