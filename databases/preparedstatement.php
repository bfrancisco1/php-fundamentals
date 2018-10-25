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

$tempFirstName = 'Lucy Maud';

//using ? as a placeholder, the value will be sent later
$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";

//tells php we will be sending the values later
$statementObj = $connection->prepare($query);

//parameter for bind_param are the type string (ex "sdi" would mean a string, decimal, int types will be passed) followed by the variable representing the value, must be a variable
$statementObj->bind_param("s",$tempFirstName);

//execute the query with the values
$statementObj->execute();  

//bind the resuls to variables
$statementObj->bind_result($firstName, $lastName, $penName);

//save the results to variable
$statementObj->store_result();


if($statementObj->num_rows > 0)
{
    //simplier fetch, doesn't have to be assigned to a variable
    while ($statementObj->fetch())
    {
        echo $firstName." ".$lastName." (".$penName.")".PHP_EOL;
    }
}

//must be closed with the close() method
$statementObj->close();
$connection->close();