<?php
require_once ROOT.'/models/test.php';

class TestController
{
    public function actionIndex()
    {
            resetQuestionId();
            setNumberOfQuestions();
            if ($_SESSION['question_id'] <= ($_SESSION['numberOfQuestions']+1))
            {
            getQuestions();
            getAnswers();
            getIsTrue();
            getUserId();
            insertResult();


            $question_id = $_SESSION['question_id'];
            $question = $_SESSION['question']->getQuestion();
            $questionIdReal = $question_id - 1;

            render("headers", ["title" => "Питання $questionIdReal",
            "text" => "Питання №$questionIdReal. $question",
            "forma" => "2"]);

            // if($_SESSION['question_id'] < 4)
            // {
                render("footer", ["page" => "Перейти до питання №$question_id"]);
            // }
        }
        if(isset($_POST['end']))
        {
            endTest();
        }

    }
}
        // return render('page', compact('title', 'page'));


        // return view('layouts.test.index', [
        //     "title" => "Питання $question_id",
        //     "text"  => "$question",
        //     "forma" => "2",
        //     "page" => "1"
        // ]);



    // public function answer($testId)
    // {
    //     // 1. GET ALL DATA FROM REQUEST
    //
    //     // ALL POINTS BELOW SHOULD BE IN THE CONTROLLER BODY
    //     // 2. PROCESSING AND VALIDATION DATA
    //     // 2.1 IF DATA IS INVALID - RETURN ERROR
    //     // 2.2 IF DATA VALID - MOVE ON
    //     // 3. DO ALL STUFF WITH MODEL AND DATABASE
    //     // 4. CREATE RESPONSE WITH ALL DATA AND COOKIE
    //     // 5. SEND RESPONSE WITH HTML OR JSON.
    //
    //     // Validator::make($data, ['username' => ['required', ['min' => 5]]])
    //     // $testId = Cookie::getLastQuestion;
    //     // Test::find($testId);
    //
    //
    //
    //     $test = Test::findOrFail($testId);
    //     // SELECT * FROM TETS WHERE ID = $REQUEST->TEST_ID
    //     return render('test', ['test_id' => $test->id]);
    // }