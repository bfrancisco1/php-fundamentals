<?php

$authors = ["Charles Dickens", "Jane Austin", "william shakespeare", "Mark Twain", "Louisa May Alcott"];
//$authors = [];
$count = count($authors);

//if ($count > 0)
//{
//    echo "There is a total of ".$count." author(s).";
//}
//else
//{
//    echo "There are no authors.";
//}

// shorthand for if then statement
$outcome = ($count > 6) ? "Author Total: ".$count : "No Authors";
echo $outcome;