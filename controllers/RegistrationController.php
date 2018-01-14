<?php
include_once ROOT.'/models/registration.php';


class RegistrationController
{
    public function actionIndex()
    {
        
        insertUsername();
        
        return true;
    }
}

render("headers", ["title" => "Реєстрація",
"text" => "Введіть своє ім'я",
"forma" => "1"]);

render("footer", ["page" => "Перейти до питання №1"]);
