<?php
namespace quiz\controllers;

use quiz\models\Records;
class StatisticController
{
    public function actionIndex()
    {
        (new Records) -> getNumberOfRight();
        (new Records)-> insertResult();
        (new Records)-> getTableOfRecords();


        $numberOfRight = $_SESSION['numberOfRight'];
        $numberOfQuestions = $_SESSION['numberOfQuestions'];
        render("statview",
        ["title" => "Результати/таблиця рекордів",
        "text" => "Ви відповіли правильно на $numberOfRight питань з $numberOfQuestions"]);
        //var_dump($numberOfRight);
        return true;

    }
}
