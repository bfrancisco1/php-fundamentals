<?php

//set key value, quarky is key, charles dickens is value
$authors = array(
    "quarky" => "Charles Dickens",
    //if using integers for key, the next value can automatically be assigned if no key is set
    10 => "Jane Austin",
    "poetic" => "William Shakespeare",
    "Mark Twain"
    );

print_r($authors);