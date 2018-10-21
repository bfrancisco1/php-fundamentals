<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    //public $firstName = "Samuel Longhorne";
    //public $lastName = "Clemens";
    //public $yearBorn = 1899;


    function __construct($tempFirstName = "", $tempLastName = "", $tempBorn = "")
    {
        //echo "I'm a constructor";
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $yearBorn;
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

$myobject = new Person("Samuel Langhorne", "Clemens", 1899);

echo $myobject->getFirstName();