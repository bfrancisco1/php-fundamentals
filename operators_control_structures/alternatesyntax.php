<?php
//using alternative syntax is beneficial for dealing with html code
$readingisFun = true;
$authors = ["Charles Dickens", "Jane Austin", "william shakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

//remove the beginning curly brace with a colon, then the last curly brace with endif
if ($count > 0) :
    echo "There is a total of ".$count." author(s).";

else :
    echo "There are no authors.";
endif;

//can remove the curly braces here
while($i < 5) :
    echo "reading is fun!".PHP_EOL;

    $i++;
endwhile;

//you can remove the curly braces
for($i = 0; $i < 5; $i++) : 
    echo "reading is fun!".PHP_EOL;
endfor;