<?php

$host = 'localhost';
$dbName = 'javajam';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbName);

if($conn->connect_error) {
    die ("Error: " . $conn->connect_error);
}

?>
