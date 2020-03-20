<?php

include 'Db.php';

function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

class User
{
    public static function showUsers ()
    {
        $db = Db::connection();

        $query = 'Select * from user';

        $result = $db->query($query);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result;
    }
}

$users = User::showUsers();
while ($row = $users->fetch()) {
    echo 'Имя - '.$row['name'].' Id пользователя = '.$row['id']. '.<br>';
    echo 'Ваш email - '.$row['email'].'<br>'.'Ваш пароль - '.$row['pass'].'<br><br>';
}


