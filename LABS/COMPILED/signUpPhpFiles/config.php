<?php

$host = 'localhost';
$dbName = 'lab9';
$username = 'root';
$password = '';


try{
    $conn = new PDO("mysql:host=$host; dbname=lab9", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// try {
//     $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
//     $options = [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES => false,
//     ];
//     $conn = new PDO($dsn, $username, $password, $options);
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }

// You can now use the $pdo object to perform database operations

?>

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
