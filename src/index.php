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
          <a class="nav-link nav-link-custom" href="#fab">Fabrication</a>
        </div>
        
        
        
        </a>
      </div>
    </div>
  </nav>


<div class="topinfo text-center text-white mx-auto">
  <h1 class="mt-5 display-1 pb-5">WHAT WE DO</h1>
  <p class="h3 text-lr-space text-width-ipad text-width-phone">We Fix things, with the joint fuse of 2 passionate, skilled brothers, who both love their profession, and are proud to craft. We are here to help you with any type of IT or Fabrication issue.</p>
</div>






  <div class="container-sm text-center mx-auto mt-10">
    <div class="row mx-auto cards-phone">
      <div class="col-md-6 mx-auto">
        <div class="card img-sizer mx-auto wid-15 h-100">
          <img class="card-img-top img-height15" id="cardimgtop" src="itrepimg.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white">IT Services</h4>
            <p class="card-text text-white">One stop shop for everything IT</p>
            <a href="#it" class="btn btn-primary btn1">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto ">
        <div class="card img-sizer mx-auto wid-15 h-100 ">
          <img class="card-img-top img-height15" id="cardimgtop" src="fabricimg.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white fs-5">Fabrication Services</h4>
            <p class="card-text text-white">One stop shop for everything Fabrication</p>
            <a href="#fab" class="btn btn-primary btn1">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  


<h1 class="text-center text-white mt-10 display-1" id="services">SERVICES</h1>




  <div id="carouselExampleCaptions" class="carousel slide text-lr-space small-screen-margin mx-auto" style="max-width: 1300px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner mt-10 mb-7" style="border-radius: 5rem;">
      <div class="carousel-item active">
        <img src="fabpic1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Fabrication work</h5>
          <p>From a hanging exhaust pipe to van installations, we’ve got you covered </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="itpicrep.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Computer Builds and Repairs</h5>
          <p>Full PC builds make especially for your needs, along with repairs to any faulty machines </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="webdev1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bespoke Website Development</h5>
          <p>We offer fully responsive, bespoke websites built especially for you and your needs  </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  
<div class="container">
    <h1 class="text-center text-white mt-10 display-1" id="it">Information Technology</h1>
    <p class="h3 text-lr-space text-width-ipad text-width-phone text-center mt-10 text-white mx-auto mb-7" style="padding-left: 50px; padding-right: 50px;">Information Technology (IT) and Internet of Things (IoT) are more prevalent now, then ever before, and its crucial to make sure you, your business, or just your home setup is up to date with these to ensure that you can feel secure and safe about the technology you’re using.</p>

    <div class="container-sm text-center mx-auto mt-10 mb-7">
      <div class="row mx-auto g-5">
        <div class="col-md mx-auto">
          <div class="card2 img-sizer mx-auto wid-15 h-100">
            <img class="card-img-top img-height15" id="cardimgtop" src="pcbuild.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title text-white fs-5 mt-4">Custom PC Builds</h4>
              <p class="card-text text-white mt-3 text-small-space">We can Build Systems to match your exact needs</p>
              <a href="cuspcbuild.php" class="btn btn-primary btn1 mb-4">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md mx-auto">
          <div class="card2 img-sizer mx-auto wid-15 h-100 ">
            <img class="card-img-top img-height15" id="cardimgtop" src="repairs.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title text-white fs-5 mt-4">Repairs</h4>
              <p class="card-text text-white mt-3 text-small-space">Got an issue? Let us have a gander, we can probably fix it</p>
              <a href="repairs.php" class="btn btn-primary btn1 mb-4">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md mx-auto">
          <div class="card2 img-sizer mx-auto wid-15 h-100 ">
            <img class="card-img-top img-height15" id="cardimgtop" src="webdev1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title text-white fs-5 mt-4">Website Development</h4>
              <p class="card-text text-white mt-3 text-small-space">We will custom create a fully functional website for you.</p>
              <a href="websitebuild.php" class="btn btn-primary btn1 mb-4">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md mx-auto">
          <div class="card2 img-sizer mx-auto wid-15 h-100 ">
            <img class="card-img-top img-height15" id="cardimgtop" src="webuy.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title text-white fs-5 mt-4">We Buy</h4>
              <p class="card-text text-white mt-3 text-small-space">We will buy your old and unwanted systems</p>
              <a href="webuy.php" class="btn btn-primary btn1 mb-4">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>




<div class="container">
  <h1 class="text-center text-white mt-20 display-1" id="fab">Fabrication</h1>
  <p class="h3 text-lr-space text-width-ipad text-width-phone text-center mt-10 text-white mx-auto mb-7" style="padding-left: 50px; padding-right: 50px;">We can assist with any Fabrication job that you or your company may need doing, please get in touch with us to discuss the specific issue and what you’re looking to have us do for you  </p>

  <div class="container-sm text-center mx-auto mt-10 mb-7">
    <div class="row mx-auto g-5">
      <div class="col-md mx-auto">
        <div class="card2 img-sizer mx-auto wid-15 h-100">
          <img class="card-img-top img-height15" id="cardimgtop" src="Welding.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white fs-5 mt-4">Welding</h4>
            <p class="card-text text-white mt-3 text-small-space">Need some reliable, strong welds?</p>
            <a href="welding.php" class="btn btn-primary btn1 mb-4">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md mx-auto">
        <div class="card2 img-sizer mx-auto wid-15 h-100 ">
          <img class="card-img-top img-height15" id="cardimgtop" src="modpic.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white fs-5 mt-4">Modifications</h4>
            <p class="card-text text-white mt-3 text-small-space">Any modifications you need, as small as a bolt to a new window fitting in a van</p>
            <a href="mods.php" class="btn btn-primary btn1 mb-4">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md mx-auto">
        <div class="card2 img-sizer mx-auto wid-15 h-100 ">
          <img class="card-img-top img-height15" id="cardimgtop" src="fabpicnew.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white fs-5 mt-4">Fabrication</h4>
            <p class="card-text text-white mt-3 text-small-space">Need some metal joining? Repairing? Let us have a look</p>
            <a href="fabrication.php" class="btn btn-primary btn1 mb-4">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md mx-auto">
        <div class="card2 img-sizer mx-auto wid-15 h-100 ">
          <img class="card-img-top img-height15" id="cardimgtop" src="Bending.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-white fs-5 mt-4">Precise Bending</h4>
            <p class="card-text text-white mt-3 text-small-space">We will ensure all bends and malleable movements are done to perfection</p>
            <a href="bending.php" class="btn btn-primary btn1 mb-4">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php if (isset($user)): ?>




  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: absolute; width: 100%; top: 0;">
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
          <a class="nav-link nav-link-custom" href="#fab">Fabrication</a>
        </div>
        
        <img src="account-svgrepo-com.svg" alt="" width="40" height="50">
        
        </a>
      </div>
    </div>
  </nav>






    <p class="position-absolute top-0 end-0" style="margin-top: -0.5rem; margin-right: 4rem">
        <a class="loginsignupbtn logoutsmall" style="display: block; margin: 0 auto; text-align: center; margin-top: 1.4rem; z-index: 10; width: 100px; margin-right: 1rem;" href="logout.php">Log out</a>
    </p>


    <?php else: ?> 

      <p class="position-absolute top-0 end-0 loginsignupIPAD loginsignupIPADplus loginsignupmobile mx-auto mr-1" style="margin-top: 1.5rem; margin-right: 2rem; margin-top: 15px; right: 10%">
        <a href="login.php" class="me-2 loginsignupbtn loginsignupbtnmob loginleftshiftmob">Log in</a>
        <a href="signup.html" class="loginsignupbtn loginsignupbtnmob">Sign up</a>
      </p>


    <?php endif; ?>




</body>

</html>


