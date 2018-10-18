<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

$associativeArray = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

//function to find if the key exists in an array, will return a 1 if it exists
echo array_key_exists('quarky', $associativeArray);
echo $associativeArray['quarky'];
echo $authors[1];