<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="ftco-section">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/mat.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
                    </div>
	 
  <form method="post" action="login.php" class="signin-form">
  	<?php include('errors.php'); ?>
  	<div class="form-group mt-3">
  		
  		<input placeholder="Username" class="form-control" type="text" name="username" >
  	</div>
  	<div class="form-group mt-3">
  		
  		<input placeholder="Password" class="form-control" type="password" name="password">
  	</div>
  	<div class="form-group mt-3">
  		<button type="submit" class="form-control btn btn-primary rounded px-3" name="login_user">Login</button>
  	</div>

      <p class="text-center">Not a member? <a href="register.php" style="color: rgb(68, 68, 214) !important;">Sign Up</a></p>

  </form>
  </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>