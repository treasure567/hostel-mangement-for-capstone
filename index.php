<?php 
  include("server.php");

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

      <?php
$username = $_SESSION['username'];
$select_room_number = mysqli_query($db, "SELECT room_num FROM users WHERE username='$username' AND password='81dc9bdb52d04dc20036dbd8313ed055'")
or exit (mysqli_error($db));
while ($row_w = $select_room_number->fetch_assoc()) {
  $room_num2 = $row_w['room_num'];
}

?>
    

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br><br><hr><br>
        <p> Your Room Number is : <b><?php echo $room_num2 ?></b><br><br><hr><br>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

</div>
		
</body>
</html>