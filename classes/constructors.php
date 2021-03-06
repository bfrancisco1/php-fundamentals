<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    //public $firstName = "Samuel Longhorne";
    //public $lastName = "Clemens";
    //public $yearBorn = 1899;


    function __construct()
    {
        //echo "I'm a constructor";
        $this->firstName = "Samuel Longhorne";
        $this->lastName = "Clemens";
        $this->yearBorn = 1899;
    }
    //by default all methods are pubic

    public function getFirstName()
    {
        // -> used to access object properties
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myobject = new Person();

echo $myobject->getFirstName();