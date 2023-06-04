<!DOCTYPE html>
<html>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){

    $name = $_REQUEST["mName"];
    $email = $_REQUEST["mEmail"];
    $password = $_REQUEST["password"];
 
    // Create the content to be written
$content = "$name, $email, $password" . PHP_EOL;

// Open the file in append mode
$file = fopen("javamember.txt", "a");

// Write the content to the file
fwrite($file, $content);

// Close the file
fclose($file);


    header("Location: profile.php?action=login_success");
}
?>

</body>
</html>