<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    public $firstName = "Samuel Longhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;

    //by default all methods are pubic

    public function getFirstName()
    {

    }

    public function setFirstName($tempName)
    {

    }
}

$myobject = new Person();
