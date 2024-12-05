<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $userLoggedIn = true;
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
} else {
    $userLoggedIn = false;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>MalFabIT Home Page</title>
</head>

<body>
    
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="Logo.svg" alt="" width="" height="45">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto mr-10 fs-4 fw-bold navigationbar gap-lg-5">
        <a class="nav-link nav-link-custom" href="index.php">Home</a>
        <a class="nav-link nav-link-custom" href="#services">Reviews</a>
        <a class="nav-link nav-link-custom" href="#it">IT</a>
      </div>
      <?php if (isset($user)): ?>
        <p class="position-absolute top-0 end-0" style="margin-top: -0.5rem; margin-right: 4rem">
        <div class="navbar-nav">
          <a class="nav-link" href="logout.php">Log out</a>
          </div>
        </p>
      <?php else: ?>
        <div class="navbar-nav">
          <a href="login.php" class="nav-link">Log in</a>
          <a href="signup.html" class="nav-link">Sign up</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</nav>




<div class="topinfo text-center text-white mx-auto" style="margin-bottom: 130px;">
  <h1 class="mt-5 display-1 pb-5">ABOUT US</h1>
  <p class="h3 text-lr-space text-width-ipad text-width-phone">We are honest, we understand our market, Goole being a working town, we understand that tech may not be on the forefront on your mind, and when you run into issues with tech, you want it sorting and fixed with no fuss, and that’s where we pride ourself, I myself have been in and around technology and different systems since a kid, through school, then to College, and now University where im pursuing Computer Science, I always enjoyed fixing things, making things, and that’s where MalFabIT comes from, the love of both creating and fixing, whether it be a new a Website that you need doing, or your work computer sorting, we can help.</p>
</div>




<footer>
    <div class="footerContainer">
        <div class="logo2">
            <img src="Logo.svg" alt="" width="" height="45" href="index.php">
        </div>
        <div class="footerNav text-center">
            <ul class="footermobile footeripad" style="white-space: nowrap;">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="privpolicy.php">Privacy Policy</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024; Designed and created by Jake Mallinson<span class="designer">MalFabIT</span></p>
    </div>
</footer>



</body>

</html>


