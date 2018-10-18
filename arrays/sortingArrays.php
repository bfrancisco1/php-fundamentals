<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
);

$associativeArray = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

//sorts alphabetical by default, and pass additional parameter to sort differently
//sort($authors);

//asort preserves the keys
asort($authors);
//asort($associativeArray);

//sorts by key value 
ksort($associativeArray);
print_r($authors);
print_r($associativeArray);

