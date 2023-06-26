<?php

$host = "localhost";
$dbName = "patientdb";
$username = "root";
$password = "";
// Dr my computer will always show an error when i create privileges
// for the user. I have tried to create privileges for the user but
// I couldnt because of some configurations of my phpmyadmin, that's why i used root as user

try{
    $conn = new PDO("mysql:host=$host; dbname=patientdb", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}


?>