<?php
//had to update the database to allow connections from host machine
//connect to database from server
//mysql -u root -pSongohan1
// GRANT ALL PRIVILEGES ON *.* TO 'PHPFundamentals'@'%' IDENTIFIED BY 'Songohan1' WITH GRANT OPTION;

$dbpassword = "Songohan1";
$dbusername = "PHPFundamentals";
$dbserver = "localhost";
$dbname = "PHPFundamentals";

//connection object variable
$connection = new mysqli($dbserver, $dbusername, $dbpassword, $dbname, 3306);

print_r($connection);

if($connection->connect_errno)
{
    exit("Database Connection has failed. Reason ".$connection->connect_error);
}
