<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user 
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["logemail"]));

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user && password_verify($_POST["logpass"], $user["password_hash"])) {

		session_start();

		session_regenerate_id();

		$_SESSION["user_id"] = $user["id"];

		header("Location: index.php");
		exit;


       
    } else {
        $is_invalid = true;
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
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
			  <a class="nav-link nav-link-custom" href="index.php">Services</a>
			  <a class="nav-link nav-link-custom" href="index.php">IT</a>
			  <a class="nav-link nav-link-custom" href="index.php">Fabrication</a>
			</div>
			<a href="login.php">
			<img src="account-svgrepo-com.svg" alt="" width="40" height="50">
			</a>
		  </div>
		</div>
	  </nav>









<form action="login.php" method="post" novalidate>										 
	<label for="reg-log"></label>
			<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 text-white" style="margin-top: 1.5rem; text-shadow: white 0.5px 0px 3px;">Log in</h4>
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" value="
												<?= htmlspecialchars($_POST["logemail"] ?? "") ?>">
												<img src="email-svgrepo-com.svg" height="30" width="30" style="margin-right: 85%; margin-top: -4.7rem;">
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<img src="password-svgrepo-com.svg" height="30" width="30" style="margin-right: 85%; margin-top: -4.7rem;" alt="">
											</div>
											<button type="submit" class="btn mt-4">Submit</button>

				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</form>


<a href="forgotpassword.php">Forgot Password?</a>


<?php if ($is_invalid): ?>
	<div class="container-fluid">
	<em  class="text-white fs-2" style="display: block; margin: 0 auto; text-align: center; margin-top: 2rem; z-index: 10;">Invalid login</em>

	</div>
<?php endif; ?>



</body>

</html>

