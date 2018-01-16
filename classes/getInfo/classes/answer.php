<?php
namespace quiz\classes\getInfo\classes;

use quiz\classes\getInfo\traits\getAnswer;
use quiz\classes\getInfo\traits\getIsTrue;
use quiz\classes\getInfo\traits\getId;


class answer
{
    use getAnswer ,getIsTrue, getId;
}