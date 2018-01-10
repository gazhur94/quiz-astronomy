<?php
require_once ROOT.'/models/statistic.php';

class StatisticController
{
    public function actionIndex()
    {
        getNumberOfRight();
        insertResult();
        getTableOfRecords();


        $numberOfRight = $_SESSION['numberOfRight'];
        $numberOfQuestions = $_SESSION['numberOfQuestions'];
        render("statview",
        ["title" => "Результати/таблиця рекордів",
        "text" => "Ви відповіли правильно на $numberOfRight питань з $numberOfQuestions"]);
        //var_dump($numberOfRight);
        return true;

    }
}
