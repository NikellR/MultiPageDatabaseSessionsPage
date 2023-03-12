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

    <title>Main Page</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Remix Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="Contact.php">Contact</a>
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
        <h1 class="display-3 text-center my-4">Remix Software</h1>
        <hr>
    </header>

    <div class="container">
        
        <div class="jumbotorn text-center">
            <h1 class="display-4">Welcome To The Remix Software Website!</h1>
            <p class="lead">Remix Software's Number One Focus Is Providing Our Customers With The Best Educational Apps Out There!</p>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Information</h5>
                  <p class="card-text">Look At The Content We Provide at Remix Software</p>
                  <a href="Info.php" class="btn btn-primary">Go To The Information Page</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Contact</h5>
                  <p class="card-text">Contact Us At Our Contact Page.</p>
                  <a href="Contact.php" class="btn btn-primary">Go To The Contact Page</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="text-center">
                <img src="download.png" class="rounded" alt="...">
              </div>
            </div>
          </div>

    </div>
    
    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Bootstrap-->

</body>
</html>