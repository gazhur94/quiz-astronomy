<?php

trait getId
{
    protected $id;
    public function getId()
    {
        return $this->id;
    }
}

trait getUsername
{
    protected $username;
    public function getUsername()
    {
        return $this->username;
    }
}

trait getQuestionID
{
    protected $question_id;
    public function getQuestionID()
    {
        return $this->question_id;
    }
}

trait getQuestion
{
    protected $question;
    public function getQuestion()
    {
        return $this->question;
    }
}

trait getAnswer
{
    protected $answer;
    public function getAnswer()
    {
        return $this->answer;
    }
}

trait getIsTrue
{
    protected $is_true;
    public function getIsTrue()
    {
        return $this->is_true;
    }
}

trait getAnswerId
{
    protected $id;
    public function getAnswerId()
    {
        return $this->id;
    }
}

trait getChosenAnswer
{
    protected $chosenAnswer;
    public function getChosenAnswer()
    {
        return $this->chosenAnswer;
    }
}

trait getNumberOfRight
{
    protected $number_of_right;
    public function getNumberOfRight()
    {
        return $this->number_of_right;
    }
}






class user
{
    use getId, getUsername;
}

class question
{
    use getQuestion;

}
class answer
{
    use getAnswer ,getIsTrue, getAnswerId;
}

class all_answers
{
    use getChosenAnswer, getIsTrue;
}

class user_id
{
    use getId;
}

class is_true
{
    use getIsTrue;
}

class records
{
    use getUsername, getNumberOfRight;
}
