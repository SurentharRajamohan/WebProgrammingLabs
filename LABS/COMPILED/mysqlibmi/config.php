<?php

$host = 'localhost';
$dbname = 'bmi';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if($conn -> connect_error){
    die("Error: " . $conn->connect_error);
}

?>