<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1900)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

function getAuthor()
{
    return "Charles Dickens";
}

$year = 1920;
$authorName = getAuthor();

booksByAuthorYear($authorName);
