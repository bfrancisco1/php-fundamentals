<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

//remove an item from an array at a specific index, can remove multiple
unset($authors[1], $authors[0]);

$associativeArray = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);
unset($associativeArray['quarky']);
unset($authors)
print_r($authors);
print_r($associativeArray);