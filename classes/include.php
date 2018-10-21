<?php

include 'Person.php';
//must say include_once if the class extends another class that is included already
include_once 'Author.php';

//include will continue the script if file not found, but require will terminate the script if file is not there
require 'RandomClass.php';

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getCompleteName();