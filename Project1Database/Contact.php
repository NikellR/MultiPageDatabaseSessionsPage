<!--
    Author : Nikell Reed
    Class : ITN264
    Class Section : 2C1
    Date : 5/6/2022
    Assignment : Project 1 - Sessions
-->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Contact Page</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Remix Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="Main.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="#">Contact</a>
                <a class="nav-item nav-link" href="Info.php">Products</a>
                <?php
                if(isset($_SESSION['email'])) {
                ?>
                <a class="nav-item nav-link" href="settings.php">Settings</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
                <?php
                } else {
                ?>
                <a class="nav-item nav-link" href="signup.php">Sign-Up</a>
                <a class="nav-item nav-link" href="login.php">Login</a>
                <?php
                }
                ?>
            </div>
        </div>
      </nav>

    <header>
        <h1 class="display-3 text-center my-4">Contact Page</h1>
        <hr>
    </header>

    <div class="container">
        
        <div class="jumbotorn text-center">
            <h1 class="display-4">Contact Us!</h1>
            <p class="lead">Enter Your Information Below To Get In Contact With Us</p>
        </div>

        <br>

        <form>
            <div class="form-group">
                <label>First Name</label>
                <input type="text" id="firstName" class="form-control" placeholder="Add First Name">
            </div>
        </form>
        <form>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" id="lastName" class="form-control" placeholder="Add Last Name">
            </div>
        </form>
        <form>
            <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control" placeholder="Add Email">
            </div>
        </form>
        <form>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" id="phoneNumber" class="form-control" placeholder="Enter Phone Number">
            </div>
        </form>
        <form>
            <div class="form-group">
                <label>Gender</label>
                <select class="form control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </form>

        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <button id="btn">Submit</button>
                </div>
            </div>
        </div>

        <script src="script.js"></script>

    </div>
    

<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--Bootstrap-->

</body>
</html>