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

class Author extends Person
{
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        //getfullName can access the private properties of the Person class since it is called from the Person class
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }
    //private function getFullName()
    //{
        //echo used to show we are in the author getFullName
    //    echo "Author->getFullName()".PHP_EOL;
    //    return $this->firstName." ".$this->lastName.PHP_EOL;
    //}
}

$newauthor = new Author("Samuel Langhorne", "Clemens", 1899);
//echo $author->getFullName();
echo $newauthor->getCompleteName(); 
//$myobject = new Person("Samuel Langhorne", "Clemens", 1899);

//echo $myobject->getFirstName();