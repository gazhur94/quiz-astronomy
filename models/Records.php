<?php
namespace quiz\models;

use quiz\classes\getInfo\classes\answersDatabase;
use quiz\classes\sql;
use quiz\classes\getInfo\classes\getIsTrue;
use quiz\classes\getInfo\classes\getId;

class Records
{
    public function getNumberOfRight()
    {
        $user_id = $_SESSION['user_id']->getId();
        $sql = "SELECT all_answers.chosenAnswer, answers.is_true
                FROM all_answers
                INNER JOIN answers ON all_answers.chosenAnswer = answers.id
                WHERE user_id = $user_id";
        $userAnswers = sql::fetchSqlAll($sql,'answersDatabase');

        $counter = 0;
        foreach ($userAnswers as $row)
        {
            $rightOnNo = $row->getIsTrue();
            if ($rightOnNo == 1)
            {
                $counter++;
            }
        }
        $_SESSION['numberOfRight'] = $counter;
    }




    public function insertResult()
    {
        if ($_SESSION['question_id'] == $_SESSION['numberOfQuestions']+2)
        {
            $user_id = $_SESSION['user_id']->getId();
            $numberOfRight = $_SESSION['numberOfRight'];
            $pdo = db::getConnection();
            $sql = "INSERT INTO records (user_id, number_of_right)
                    VALUES('$user_id', '$numberOfRight')";
            $pdo->exec($sql);
            $_SESSION['question_id']++;
        }
    }





    public function getTableOfRecords()
    {
        
        $sql = "SELECT users.username, records.number_of_right
                FROM records
                INNER JOIN users ON users.id = records.user_id
                ORDER BY records.number_of_right DESC
                LIMIT 10";
        $bestUsers = sql::fetchSqlAll($sql,'recordsDatabase');
        $_SESSION['bestUsers'] = $bestUsers;
    }
}