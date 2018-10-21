<?php

class Author extends Person
{
    //static property must be self contained, can't depend on another class 
    public static $centuryPopular = "19th";
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

    public static function getCenturyAuthorWasPopular()
    {
        //use self instead of this for static; when getting static from a parent class, use keyword parent
        return self::$centuryPopular;
    }
    //private function getFullName()
    //{
        //echo used to show we are in the author getFullName
    //    echo "Author->getFullName()".PHP_EOL;
    //    return $this->firstName." ".$this->lastName.PHP_EOL;
    //}
}