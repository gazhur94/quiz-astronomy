<?php

namespace quiz\controllers;

use quiz\models\Users;
use quiz\view\helpers;

class RegistrationController
{
    public function actionIndex()
    {
        // var_dump(class_exists('quiz\\models\\Users'));
        (new Users) -> insertUsername();

        helpers::render("headers", ["title" => "Реєстрація",
                           "text"  => "Введіть своє ім'я",
                           "forma" => "1"]);

        helpers::render("footer", ["page" => "Перейти до питання №1"]);
        return true;
    }
}


