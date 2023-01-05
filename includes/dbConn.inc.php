<?php 

$serverName = "localhost";
$dbName = "store";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn)
{
    die("connection failed");
}

?>