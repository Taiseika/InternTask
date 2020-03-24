<?php

require_once ('liblery.php');

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
    <h1>New Person Creation</h1>
    <form action="newperson.php" method="post" name="reg">

        <h4>First name</h4>
        <input type="text" name="FirstName" value="" placeholder="Enter Name"
                                       size="50px"><br>
        <h4>Second name</h4>
        <input type="text" name="SecondName" value="" placeholder="Enter Second name" size="50px"><br>
        <input type="submit" name="go" value="Create" id="btn">
        <input type="submit" formaction="index.php"  value="Go back" id="btn2"><br>
        </form>

        <?php include_once 'liblery.php';new_person() ?>


</div>



