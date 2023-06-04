<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){

    $name = $_REQUEST["mName"];
    $email = $_REQUEST["mEmail"];
    $password = $_REQUEST["password"];
 
    $sql = "SELECT * FROM members WHERE email = '$email'";

    $result = $conn->query($sql);

    $registered = false;

    if($result->num_rows == 0){
        try {

            $conn->begin_transaction();
            $sql = "INSERT INTO members (name, email, password) VALUES ('$name', '$email', '$password')";
            $conn->query($sql);
            $registered = true;
            $conn->commit();

        }catch (Exception $e){
        
            echo "Error: " . $e->getMessage();
            $conn->rollback();
        }
$registered = true;
    }else{
        
    }

}
?>


<!DOCTYPE html>
<html>
<link href="bootstrap.css" rel="stylesheet">

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 fw-bold" href="index.html">
                    <img src="images/javajamlogo.jpg" alt="" width="50" height="50"
                        class="d-inline-block align-text-center">
                    JavaJam Coffee House</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="music.html">Music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jobs.html">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    <?php
        if($registered){
                echo ("<h2>Registered da eley</h2>");
        }else{
            echo ("<h2>Register aagale da eley, sign up again as email already exist</h2>");
            echo ("<a href='signup.php'>Sign up da dey</a>");
        }
        
?>
  <br><br>
<a href='login.php'>Login da dey</a>


    <script src="bootstrap.bundle.js"></script>
    <script src="aos.js"></script>
</body>

</html>