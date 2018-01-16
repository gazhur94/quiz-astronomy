<?php
namespace quiz\models;

use quiz\classes\getInfo\classes\user_id;
use quiz\config\db;
use quiz\classes\test;
use quiz\classes\sql;


class Users
{
    
    public static function insertUsername()
    {
        if (isset ($_POST['username']))
        {
            $_SESSION['username'] = $_POST['username'];
        }
        $pdo = db::getConnection();
        if (isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
        }

        if(isset($_POST['next']))
        {
            $sql = "INSERT INTO users (username)
                    VALUES('$username')";
            $pdo->exec($sql);
            test::startTest();
        }
    }

    public static function getUserId()
    {
        if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
        {
            $currentUsername = $_SESSION['username'];
            $sql = "SELECT id FROM users WHERE username='$currentUsername'";
            $currentId = sql::fetchSql($sql,'user_id');
            $_SESSION['user_id'] = $currentId;

        // $currentId = $_SESSION['user_id']->getId();
        // var_dump($currentId);
        }
    }

    

}