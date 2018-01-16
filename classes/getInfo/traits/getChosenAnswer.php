<?php
namespace quiz\classes\getInfo\traits;
trait getChosenAnswer
{
    protected $chosenAnswer;
    public function getChosenAnswer()
    {
        return $this->chosenAnswer;
    }
}