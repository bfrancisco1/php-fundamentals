<?php

$dbpassword = "Songohan1";
$dbusername = "PHPFundamentals";
$dbserver = "localhost";
$dbname = "PHPFundamentals";

//connection object variable
$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname, 3306);

if($connection->connect_errno)
{
    exit("Database Connection has failed. Reason ".$connection->connect_error);
}

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";

$resultObject = $connection->query($query);
if($resultObject->num_rows > 0)
{
    //fetch_assoc will return a single row as an associative array, each key is a column name
    while($singleRowFromQuery = $resultObject->fetch_assoc())
    {
        //print_r($singleRowFromQuery);
        //print the first_name column of each row
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
    }
}

$resultObject->close();
$connection->close();