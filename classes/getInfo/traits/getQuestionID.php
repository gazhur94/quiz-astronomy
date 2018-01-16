<?php
namespace quiz\classes\getInfo\traits;
trait getQuestionID
{
    protected $question_id;
    public function getQuestionID()
    {
        return $this->question_id;
    }
}