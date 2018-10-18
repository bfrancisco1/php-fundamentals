<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
    13
);

//checks if value is in array, will return a one if it's in there
//third parameter used to check if the type is the same as well
echo in_array( "13", $authors, true);