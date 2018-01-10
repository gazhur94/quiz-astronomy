<?php



class db
{
    public static function getConnection()
    {
        try
        {
            $pdo = new PDO('mysql:host=localhost; dbname=game;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }
        catch (PDOException $e)
        {
                echo $e->getMessage();
        }
    }
}
