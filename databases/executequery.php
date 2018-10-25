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

//$query = "DELETE FROM Authors WHERE id = 4";
//$query = "UPDATE Authors SET pen_name = 'L.M. Montgomery' WHERE id = 2"; 
$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Authur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Cohan')";

//run query method against connection, pass the query variable
$connection->query($query);

//php will auto close the connection but good practice to explcitly close it
$connection->close();