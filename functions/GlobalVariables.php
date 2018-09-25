<?php

//setting the global outside the function makes it global outside only, it already is global though
$authorName = "William Shakespeare";

function setAuthorName()
{
    //makes gloabl inside and outside the function
    global $authorName;
    $authorName = "Charles Dickens";
}

setAuthorName();
echo $authorName;
?>