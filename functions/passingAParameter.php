<?php

function bookByAuther($authorName, $year)
{
    echo $year;
    echo "\n";
    echo $authorName;
}

$authorName = "William Shakespeare";

bookByAuther($authorName, "1920");
