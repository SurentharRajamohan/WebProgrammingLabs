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
                            <a class="nav-link " href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="profile.php">Profile</a>
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
        session_start();
        include_once 'config.php';
//
        if (isset($_SESSION['logged_in'])  && $_SESSION['user_email'] && $_SESSION['logged_in']==true ){
            // $id = $_SESSION['user_id'];
            $email = $_SESSION['user_email'];

            
    $sql = "SELECT * FROM members WHERE email = '$email'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $name = $row['Name'];
    $email = $row['Email'];
    
    echo '<h1>Welcome to JavaJam Coffee House, ' .$name . '!</h1>';
    
    echo '<h2>Your Profile Information:</h2>';
    echo '<table>';

   
    echo '<tr>
        <th>Name</th>
        <th>Email</th>
    </tr>';



    echo '<tr>';
    echo '<td>' . $name . '</td>';
    echo '<td>' . $email . '</td>';
    echo '</tr>';  

    echo '</table>';
      
        }else{
            echo '<h2>You bloody hacker. Sign up and login first</h2>';
        }

        
        ?>

   


    <script src="bootstrap.bundle.js"></script>
    <script src="aos.js"></script>
</body>

</html>