<?php



function startTest()
{
    if (headers_sent()) {
        echo "<script> window.location = '/test' </script>";
        return void;
        die();
    } else {
        die(header('Location: /'));
    }
}


// class users
// {
//     public static 
    function insertUsername()
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
            startTest();
        }
    }
//}