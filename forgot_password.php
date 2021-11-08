<?php 


include('server.php');

if (isset($_SESSION['username'])) {
	header('location: index.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password | Capstone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(assets/images/mat.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
						<?php
				  if ($verified_success == NULL) {
					?>
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h4 class="mb-4">Reset Your Capstone Password</h4>
			      		</div>
			      	</div>
							<form action="forgot_password.php" method="post"class="signin-form">
							<?php include('errors.php'); ?> <?php include('success.php'); ?>
			      		<div class="form-group mt-3">
						  <label>Enter Reg Num:</label>
			      			<input type="text" name="reg_num" class="form-control" required>
			      		</div>
                          <div class="form-group mt-3">
						  <label>Enter Email Address:</label>
                            <input type="email" name="email" class="form-control" required style="text-transform: lowercase">
                        </div>  
		            <div class="form-group">
		            	<button type="submit" name="forgotten_password" class="form-control btn btn-primary rounded px-3" style="background-color: rgb(68, 68, 214) !important">Verify</button>
		            </div>
		           </form>
		          <p class="text-center">Oh i remember now <a href="index.php" style="color: rgb(68, 68, 214) !important;">Login</a></p>
				  <?php } ?>


				  <?php
				  if ($verified_success != NULL) {
					?>

					
					<div class="d-flex">
			      		<div class="w-100">
			      			<h4 class="mb-4" style="color: green !important">Welcome <b style="color: rgb(68, 68, 214) !important"><?php echo $list_f_name ?> <?php echo $list_l_name ?></b></h4>
			      		</div>
			      	</div>
						<form action="forgot_password.php" method="post"class="signin-form">
						<?php include('errors.php'); ?> <?php include('success.php'); ?>
						<div class="form-group mt-3">
						  <label>Enter New Password:</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>  
						<div class="form-group mt-3">
						  <label>Confirm New Password:</label>
                            <input type="password" name="new_password_c" class="form-control" required>
                        </div> 
						<div class="form-group">
		            	<button type="submit" name="forgotten_password_c" class="form-control btn btn-primary rounded px-3" style="background-color: rgb(68, 68, 214) !important">Change Password</button>
		            </div>
					<?php } ?> 
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

