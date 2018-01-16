<?php
namespace quiz\classes;

class test
{
    public static function startTest()
    {
    if (headers_sent()) {
        echo "<script> window.location = '/test' </script>";
        return void;
        //die();
    
    } else 
        {
            header('Location: /test');
        }
    }


    public static function endTest()
    {
        if (headers_sent()) {
            echo "<script> window.location =  '/statistic' </script>";
            return void;
            die();
        } else {
            header('Location: /');
        }
    }
}