<?php


class Db
{
    public static function connection () {

        $params = include ('dbParam.php');

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};";

        try{
            $db = new PDO($dsn, $params['user'], $params['password']);
        } catch (PDOException $exception) {
            echo 'Ошибка соединения: '.$exception->getMessage();
            exit;
        }

        return $db;
    }

}