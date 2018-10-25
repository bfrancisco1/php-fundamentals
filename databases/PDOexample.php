<?php
$dbpassword = "Songohan1";
$dbuserName = "PHPFundamentals";
$dbserver = "localhost";
$dbname = "PHPFundamentals";

//single string passed for db server and db name
$connection = new PDO('mysql:host='.$dbserver.';dbname='.$dbname, $dbuserName, $dbpassword);

//query syntax the same
$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObject = $connection->query($query);

//uses a method instead of a property, returns an associative array
if ($resultObject->rowCount() > 0)
{
    foreach($resultObject as $singleRowFromQuery)
    {
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
    }
}

//db connections and result set to null
$resultObject = null;
$connection = null;