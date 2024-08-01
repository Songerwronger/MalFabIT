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
        <a class="nav-link nav-link-custom" href="#services">Services</a>
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
  <h1 class="mt-5 display-1 pb-5">PRIVACY POLICY</h1>
  <p class="h3 text-lr-space text-width-ipad text-width-phone"><section>
        <h2>1. Information We Collect</h2>
        <p>We will collect personal information such as your name, email address, and password which is encrypted for security. This is collected when you sign up for an account or submit an email query to us directly from the site.</p>
    </section>
    <hr>
    <section>
        <h2>2. How We Use Your Information</h2>
        <p>We will use personal information like your Name and Email address to directly communicate with you. This includes situations like a reply to a query you sent via the site, or an email from us letting you know when you can come and pick up your fixed item.</p>
    </section>
    <hr>
    <section>
        <h2>3. Cookies and Tracking Technologies</h2>
        <p>We use cookies and similar technologies to enhance user experience and gather data for analytics. You can manage or disable cookies in your browser settings.</p>
    </section>
    <hr>
    <section>
        <h2>4. Third-Party Links</h2>
        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites.</p>
    </section>
    <hr>
    <section>
        <h2>5. Data Security</h2>
        <p>The database that stores all user data is secure and GDPR compliant. We have ensured to hash all sensitive information like passwords; this protects us and you from any possible data breaches that could arise.</p>
    </section>
    <hr>
    <section>
        <h2>6. Data Sharing</h2>
        <p>We do not sell or share personal information with third parties unless required by law.</p>
    </section>
    <hr>
    <section>
        <h2>7. Consent</h2>
        <p>By using our website, you consent to our privacy policy.</p>
    </section>
    <hr>
    <section>
        <h2>8. Changes to Privacy Policy</h2>
        <p>We reserve the right to update our privacy policy. Any changes will be posted on this page.</p>
    </section>
    <hr>
    <section>
        <h2>9. Contact Us</h2>
        <p>If you have questions or concerns about our privacy policy, please contact us at malixn04@gmail.com</p>
    </section></p>
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
