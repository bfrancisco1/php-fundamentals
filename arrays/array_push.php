<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

//if done on associative array, the key will not be a string, it will be the next available integer
array_push($authors, "Louis May Alcott");

//this is the preferred method for adding items to array
//if you put a value in the squared brackets, the value will be used as a key
$authors['nice'] = "L. M. Montgomery";

print_r($authors);