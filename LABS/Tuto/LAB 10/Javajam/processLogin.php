<?php
include_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){

    session_start();

    $email = $_REQUEST["mEmail"];
    $password = $_REQUEST["password"];
    
 // AND password = '$password'
    $sql = "SELECT * FROM members WHERE email = '$email'";

    $result = $conn->query($sql);
    


    $registered = false;

    if($result->num_rows != 0){
        try {
            $row = $result->fetch_assoc();
            $storedHash = $row['Password'];

            // Verify if the password matches the stored hash
            if (password_verify($password, $storedHash)) {
                echo "Password is valid!";
                $_SESSION['logged_in'] = true;
                // $_SESSION['user_id'] = $userid;
                $_SESSION['user_email'] = $row['Email'];
               
                header("Location: profile.php?action=login_success");
                // Proceed with other operations or redirect the user
            } else {
                echo "Invalid password!";
                header("Location: login.php?action=login_failed");
            }
           

        }catch (Exception $e){
        
            echo "Error: " . $e->getMessage();
            
        }

    }else{
        header("Location: login.php?action=login_failed");

    }

}
?>