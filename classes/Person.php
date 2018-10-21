<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    //private properties can only be called from the class that they are declared in
    private $firstName;
    private $lastName;
    private $yearBorn;


    function __construct($tempFirstName = "", $tempLastName = "", $tempBorn = "")
    {
        //echo "I'm a constructor";
        //echo used to show we are in the person constructor
        echo "Person Contructor".PHP_EOL;
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

    protected function getFullName()
    {
        //echo used to show we are in the person getFullName
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}