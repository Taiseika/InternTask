<?php
require_once ('connectdb.php');

function clear ($a)
{
    $a = strip_tags($a);
    $a = htmlspecialchars($a);
    $a = trim($a);
    return $a;
}



function new_person () {

    global $connect;

    if (isset($_POST['go'])) {
        if (($_POST['FirstName']) && ($_POST['SecondName'])) {

            $FirstName = htmlentities(mysqli_real_escape_string($connect, clear($_POST['FirstName'])));

            $SecondName = htmlentities(mysqli_real_escape_string($connect, clear($_POST['SecondName'])));

            $query_name = mysqli_query($connect, "SELECT * FROM adbook where firstname='$FirstName' and secondname='$SecondName'");

            $rows = mysqli_num_rows($query_name);

            if ($rows == 0) {
                $query = mysqli_query($connect, "INSERT INTO adbook(firstname, secondname) 
                                                    VALUES ('{$FirstName}','{$SecondName}')");

                $result= "Данные добавлены";

            } else $result ="Такие данные уже существуют";



        } else $result='Заполните пустые поля';
    }

    echo $result;

    return $result;
}

function table () {

        global $connect;

        $query ="SELECT * FROM adbook";

        $result = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                for ($j = 1 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
        }
        echo "</table>";

        return TRUE;

}
