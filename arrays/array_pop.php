<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin",
    "William Shakespeare",
);

//removes the last value from the array
$lastValue = array_pop($authors);

echo $lastValue;
print_r($authors);