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
    <h1>Sign Up as JavaJam Member or Get Lost</h1>
    <p>Please fill in this form to create an account. Required
        information is marked with an asterisk (*).</p>

    <form method="POST" action="processSignup.php">
        <div class="form-group">
            <label for="mName">*Name: </label> <br>
            <input type="text" class="form-control col-sm-4" id="mName" name="mName" required="required"> <br>
        
        
            <label for="myEmail">*E-mail: </label> <br>
            <input type="email" class="form-control col-sm-4" id="mEmail" name="mEmail" required="required"> <br>
            
                <label for="password">*Password:</label> <br>
                <input class="form-control col-sm-4" id="password" name="password" type="password" required><br>
            
            
                <label for="rpassword">*Repeat Password:</label><br>
                <input class="form-control col-sm-4" id="rpassword" name="rpassword" type="password" required>
            <br>
                <input type="submit" class="btn btn-primary">
        </div>
    </form>



    <script src="bootstrap.bundle.js"></script>
    <script src="aos.js"></script>
</body>

</html>