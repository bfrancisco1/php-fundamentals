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

//php will auto close the connection but good practice to explcitly close it
$connection->close();