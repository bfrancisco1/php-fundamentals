<?php

//$authors = ["Charles Dickens", "Jane Austin", "william shakespeare", "Mark Twain", "Louisa May Alcott"];
$authors = [];
$count = count($authors);

//if ($count == 1)
//{
//    echo "There is 1 author".PHP_EOL;
//}
//elseif($count > 1)
//{
//    echo "There is a total of ".$count." authors.".PHP_EOL;
//}
//else
//{
//    echo "There are no authors.".PHP_EOL;
//}

//switch($count)
//{
//    case 0:
//        echo "There are no authors.".PHP_EOL;
//        break;
//    case 1:
//        echo "There is 1 author".PHP_EOL;
//        break;
//    default:
//        echo "There is a total of ".$count." authors.".PHP_EOL;
//}

switch (5 <=> 7)
{
    case 1:
        echo "Greater than";
        break;
    case 0:
        echo "Equal";
        break;
    case -1:
        echo "Less than";
        break;
}