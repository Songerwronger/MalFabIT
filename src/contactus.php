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
  <h1 class="mt-5 display-1 pb-5">GET IN TOUCH</h1>
  <p class="h3 text-lr-space text-width-ipad text-width-phone">
Don’t hesitate to reach out and ask any questions you may have, no question is a bad one.
</p>
</div>





<section id="contact text-center" style="margin-top: 10rem;">
    <form action="https://api.web3forms.com/submit" method="POST" id="contactForm">
        <input type="hidden" name="access_key" value="f261b535-6cff-498e-a426-ee7d61e98404">
        <div class="container-lg">
            <div class="text-center text-white">
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-lg-6">
                    <label for="email" class="form-label"></label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                          </svg>
                        </span>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email here" required>
                    </div>
                    <label for="name" class="form-label"></label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-text" viewBox="0 0 16 16">
                            <path d="M5 2a.5.5 0 0 1 .5-.5c.862 0 1.573.287 2.06.566.174.099.321.198.44.286.119-.088.266-.187.44-.286A4.17 4.17 0 0 1 10.5 1.5a.5.5 0 0 1 0 1c-.638 0-1.177.213-1.564.434a3.5 3.5 0 0 0-.436.294V7.5H9a.5.5 0 0 1 0 1h-.5v4.272c.1.08.248.187.436.294.387.221.926.434 1.564.434a.5.5 0 0 1 0 1 4.17 4.17 0 0 1-2.06-.566A5 5 0 0 1 8 13.65a5 5 0 0 1-.44.285 4.17 4.17 0 0 1-2.06.566.5.5 0 0 1 0-1c.638 0 1.177-.213 1.564-.434.188-.107.335-.214.436-.294V8.5H7a.5.5 0 0 1 0-1h.5V3.228a3.5 3.5 0 0 0-.436-.294A3.17 3.17 0 0 0 5.5 2.5.5.5 0 0 1 5 2m2.648 10.645"/>
                          </svg>
                        </span>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name here">
                    </div>
                    <div class="input-group mb-4" style="height: 140px;">
                        <div class="form-floating mt-4">
                            <textarea name="query" id="query" class="form-control" style="max-height: 130px;" required></textarea>
                            <label for="query">Your query:</label>
                        </div>
                    </div>
                    <div class="container text-center">
                        <label for="subject" class="form-label text-center text-white" style="font-size: 1.5rem;">
                            What service is your query regarding?
                        </label>
                        <div class="container">

                        <select name="service" class="form-label mx-auto text-center drpdwn" id="service" required>
                          <option value="" disabled selected hidden>Select a service</option>
                          <option value="CustomPC">Custom PC</option>
                          <option value="Repairs">Repairs</option>
                          <option value="Website">Website Development</option>
                          <option value="selling tech">Selling Items</option>
                        </select>

                        </div>
                    </div>
                    <div class="mt-11 mb-4 text-center">
                        <button type="submit" class="subbtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<script>
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        const email = document.getElementById("email").value.trim();
        const query = document.getElementById("query").value.trim();
        const service = document.getElementById("service").value;

        if (!email || !query || !service) {
            e.preventDefault();
            alert("Please fill out all required fields: Email, Query, and Service.");
        }
    });
</script>









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
