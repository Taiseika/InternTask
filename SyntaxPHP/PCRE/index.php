<?php
require_once ('backend.php');

?>
<style>
    #form {
        padding-left: 20px;
        margin-right: auto;
        background-color: bisque;
        width: 50%;

    }

    #btn {
        margin-top: 40px;
    }

    #btn2 {
        margin-top: 40px;
        margin-left: 40px;
    }

</style>

<div id="form">
    <h1>Check Email Preg_match</h1>
    <form action="index.php" method="post" name="check">

        <h4>Ведите ваш Email</h4>
        <input type="text" name="email" value="" placeholder="Ваш email" size="50px"><br>

        <input type="submit" name="go" value="Проверить" id="btn">

    </form>

    <?php include_once 'backend.php'; check_email(); ?><br>


</div>





