<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    public $firstName = "Samuel Longhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;
}

$myobject = new Person();

//scope resolution operator ::
echo $myobject::AVG_LIFE_SPAN;

echo Person::AVG_LIFE_SPAN;