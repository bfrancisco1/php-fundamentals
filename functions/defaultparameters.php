<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1900)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

$year = 1920;
$authorName = "William Shakespeare";

booksByAuthorYear($authorName);
