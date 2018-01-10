<?

function resetQuestionId()
{
    if(!isset($_SESSION['question_id']))
    {
        $_SESSION['question_id'] = 1;

    }
}

function setNumberOfQuestions()
{
        $_SESSION['numberOfQuestions'] = 16;
}

function getQuestions()
{
    if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
    {
        $question_id= $_SESSION['question_id'];
        $sql = "SELECT * FROM questions WHERE id='$question_id'";
        $currentQuestion = sql::fetchSql($sql,'question');
        $_SESSION['question'] = $currentQuestion;
        //var_dump($_SESSION['question']);
    }
}


function getAnswers()
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

function getIsTrue()
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

function getUserId()
{
    if ($_SESSION['question_id'] <= $_SESSION['numberOfQuestions'])
    {
        $currentUsername = $_SESSION['username'];
        $sql = "SELECT id FROM users WHERE username='$currentUsername'";
        $currentId = sql::fetchSql($sql,'user_id');
        $_SESSION['user_id'] = $currentId;

    // $currentId = $_SESSION['user_id']->getId();
    // var_dump($currentId);
    }
}



function insertResult()
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
        $currentId = $_SESSION['user_id']->getId();
        $pdo = db::getConnection();
         // if(isset($_POST['next']))
         //     {
                $sql = "INSERT INTO all_answers (user_id, question_id, chosenAnswer)
                        VALUES('$currentId', '$questionIdforData', $currentAnswer)";
                $pdo->exec($sql);
        //    }
    }


    $_SESSION['question_id']++;
}


function endTest()
{
    if (headers_sent()) {
        echo "<script> window.location =  '/statistic' </script>";
        return void;
        die();
    } else {
        die(header('Location: /'));
    }
}
