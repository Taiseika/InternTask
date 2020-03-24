<?php

require_once ('liblery.php');

?>



<style>
    #form {
        margin-left: 20px;
        margin-right: auto;
        background-color: #dbebff;
        width: 50%;
    }

    #table th {
        margin-left: auto;
        margin-right: auto;
        width: 20%;

    }


</style>

<div id="form">
    <h1>Регистрация</h1>
    <form action="newperson.php" method="get">

        <input type="submit" value="New person"><br>

    </form>

    <table cellpadding="5" cellspacing="0" border="1" id="table">

        <tr>
            <th>First Name</th>
            <th>Surname</th>
        </tr>

    <?php include_once 'liblery.php'; table()?>

    </table>

</div>












