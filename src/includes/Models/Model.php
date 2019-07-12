<?php
// This will be a super class which will have common instance methods within it
namespace App\Includes\Models;

class Model
{
    public $firstname;
    public function setFirstname($firstName)
    {
        $this->firstname = $firstName;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
}