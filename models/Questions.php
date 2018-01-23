<?php
namespace quiz\models;

use quiz\classes\sql;
class Questions
{
    public function resetQuestionId()
    {
        if(!isset($_SESSION['question_id']))
        {
            $_SESSION['question_id'] = 1;

        }
    }

    public function addQuestionId()
    {
        $_SESSION['question_id']++;
    }

    public function setNumberOfQuestions()
    {
            $_SESSION['numberOfQuestions'] = 6;
    }

    public function getQuestions()
    {
        if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
        {
            $question_id= $_SESSION['question_id'];
            $sql = "SELECT question FROM questions WHERE id='$question_id'";
            $currentQuestion = sql::fetchSql($sql,'question');
            $_SESSION['question'] = $currentQuestion;
            //var_dump( $_SESSION['question']);
        }
    }
}