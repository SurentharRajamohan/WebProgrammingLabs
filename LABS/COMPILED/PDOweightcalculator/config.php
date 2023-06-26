<?php

$host = "localhost";
$dbName = "weightcalculator";
$username = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$host; dbname=weightcalculator", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}


?>