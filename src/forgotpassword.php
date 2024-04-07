













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
	<script src="validation.js" defer></script>
    <title>Password Reset</title>
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
			  <a class="nav-link nav-link-custom" href="index.php#services">Services</a>
			  <a class="nav-link nav-link-custom" href="index.php#it">IT</a>
			  <a class="nav-link nav-link-custom" href="index.php#fab">Fabrication</a>
			</div>
			<a href="signup.html">
			<img src="account-svgrepo-com.svg" alt="" width="40" height="50">
			</a>
		  </div>
		</div>
	  </nav>






<form action="send-password-reset.php" method="post" novalidate>										 
	<label for="reg-log"></label>
			<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 text-white" style="margin-top: 1.5rem; text-shadow: white 0.5px 0px 3px;">Reset Password</h4>
												
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
												<img src="email-svgrepo-com.svg" height="30" width="30" style="margin-right: 85%; margin-top: -4.7rem;">
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


</body>

</html>