<?php

class Person
{
    public $firstName = "Samuel Longhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;
}

$myobject = new Person();

//access a property in the class
echo $myobject->firstName."\n";

//assign a new value to property
$myobject->firstName = "S. L.";

echo $myobject->firstName;