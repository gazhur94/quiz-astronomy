<?php
namespace quiz\models;

use quiz\classes\getInfo\classes\answer;
use quiz\classes\getInfo\classes\is_true;
use quiz\classes\getInfo\classes\question;
use quiz\classes\sql;
use quiz\config\db;

class Answers
{
    public function getAnswers()
    {
        if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
        {
            $question_id = $_SESSION['question_id'];
            $sql = "SELECT answer, id FROM answers WHERE question_id = '$question_id'";
            $currentAnswer = sql::fetchSqlAll($sql,'answer');
            $_SESSION['answer'] = $currentAnswer;
        }
        // $currentIsTrue = sql::fetchSql($sql,'is_true');
        // $_SESSION['currentIsTrue'] = $currentIsTrue;
    }

    public function getIsTrue()
    {
        if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
        {
            $question_id = $_SESSION['question_id'];
            $sql = "SELECT is_true FROM answers WHERE question_id = '$question_id'";
            $currentIsTrue = sql::fetchSql($sql,'is_true');
            $_SESSION['currentIsTrue'] = $currentIsTrue;
            //var_dump($_SESSION['currentIsTrue']);
        }
    }

    public function getQuestionAnswersUserIdIsTrue()
    {
        (new Questions) ->getQuestions();
        
        $question = $_SESSION['question'];
        $question = $question[0];
        $_SESSION['question']= $question;
        
        $this->getAnswers();
        (new Users) ->getUserId();
        $this->getIsTrue();
        //var_dump($question);
    }
}