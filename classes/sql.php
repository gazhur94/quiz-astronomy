<?php
namespace quiz\classes;

use quiz\config\db;
use PDO;

class sql
{
    public static function fetchSqlAll($sql, $collumnName)
    {
        $pdo = db::getConnection();
        $result = $pdo->prepare($sql);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, $collumnName);
        $current = $result->fetchAll();

        return $current;
    }


    public static function fetchSql($sql, $collumnName)
    {
        $pdo = db::getConnection();
        $result = $pdo->prepare($sql);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, $collumnName);
        $current = $result->fetch();

        return $current;
    }
}
