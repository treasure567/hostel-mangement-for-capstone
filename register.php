<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<div class="img" style="background-image: url(images/mat2.jpg);"></div>
				  <h3 class="text-center mb-4">Register</h3>
				  <?php include('errors.php'); ?>
	<form method="post" action="register.php" class="signup-form">
	  <div class="form-group mb-3">
  	  <label>Registration Number</label>
  	  <input type="number" class="form-control" name="reg_num">
  	</div>
	  <div class="form-group mb-3">
  	  <label>First Name</label>
  	  <input type="text" class="form-control" name="first_name">
  	</div>
	  <div class="form-group mb-3">
  	  <label>Last Name</label>
  	  <input type="text" class="form-control" name="last_name">
  	</div>
  	<div class="form-group mb-3">
  	  <label>Email</label>
  	  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="form-group mb-3">
  	  <label>Username</label>
  	  <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group mb-3">
  	  <label>Password</label>
  	  <input type="password" class="form-control" name="password_1">
  	</div>
  	<div class="form-group mb-3">
  	  <label>Confirm password</label>
  	  <input type="password" class="form-control" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
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