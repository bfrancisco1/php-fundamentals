<?php

$authors = ["Charles Dickens", "Jane Austin", "william shakespeare", "Mark Twain", "Louisa May Alcott"];
//$count = count($authors);

//checks if variable has been set (not null), if has been set, then assigns the value
$outcome = $count ?? "Count unavailable.";

//can check for multiple variables
$outcome = $count ?? $anothervariable ?? "Count unavailable.";

echo $outcome;