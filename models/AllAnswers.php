<?php
namespace quiz\models;

use quiz\classes\getInfo\classes\user_id;
use quiz\config\db;
use PDO;
class AllAnswers
{
    public function insertResult()
    {
        if ($_SESSION['question_id'] > 1 && $_SESSION['question_id'] <= $_SESSION['numberOfQuestions']+1)
        {
            $question_id = $_SESSION['question_id'];
            if (isset($_POST['answer']))
            {
                $currentAnswer = $_POST['answer'];
            }
            else
            {
                $currentAnswer = 0;
            }
            $questionIdforData = $question_id-1;

            $currentUsername = $_SESSION['username'];
            $_SESSION['user_id'] = new user_id;
            $currentId = $_SESSION['user_id']->getId();
            $pdo = db::getConnection();
            // if(isset($_POST['next']))
            //     {
                    $sql = "INSERT INTO all_answers (`user_id`, `question_id`, `chosenAnswer`)
                            VALUES('$currentId', '$questionIdforData', '$currentAnswer')";
                    $pdo->exec($sql);
            //    }
        }

       
}