<?php

class Person
{

    const AVG_LIFE_SPAN = 79;

    protected $firstName;
    protected $lastName;
    protected $yearBorn;


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

class Author extends Person
{
    //protected variables cannot be accessed directly
    protected $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->firstName." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;
    }
    protected function getFullName()
    {
        //echo used to show we are in the author getFullName
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

$newauthor = new Author("Samuel Langhorne", "Clemens", 1899);
//echo $author->getFullName();
echo $newauthor->getCompleteName(); 
//$myobject = new Person("Samuel Langhorne", "Clemens", 1899);

//echo $myobject->getFirstName();