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

$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('John Ronald Reuel', 'Tolkien', 'J.R.R. Tolkien')";

$connection->query($query);

echo "Newly created Author Id: ".$connection->insert_id;

$connection->close();