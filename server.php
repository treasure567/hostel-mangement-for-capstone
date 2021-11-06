<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'testi_user', '1234', 'testi');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $reg_num = mysqli_real_escape_string($db, $_POST['reg_num']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($reg_num)) { array_push($errors, "Registration Number is required"); }
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

$check_reg = mysqli_query($db, "SELECT reg_num FROM students WHERE student_email ='$email' LIMIT 1")
or exit (mysqli_error($db));
while ($row_reg = $check_reg->fetch_assoc()) {
	$user_reg = $row_reg['reg_num'];
}

  /* if ($user_reg) { // if user reg number exists
    if ($user_reg['reg_num'] != $reg_num) {
      array_push($errors, "Sorry This Student wasn't found in our database");
    }
  } */
  // Finally, register user if there are no errors in the form
  if ($user_reg != NULL) {
      if ($user_reg === $reg_num) {
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $room_num = rand(111, 999);

  	$query = "INSERT INTO users (reg_num, room_num, first_name, last_name, username, email, password)
  			  VALUES('$reg_num', '$room_num', '$first_name', '$last_name', '$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  } else {
      array_push($errors, "Sorry This Student wasn't found in our database");
  }
}
}
}
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $username = $_SESSION['username'];
$select_room_number = mysqli_query($db, "SELECT room_num FROM users WHERE username='$username' AND password='81dc9bdb52d04dc20036dbd8313ed055'")
or exit (mysqli_error($db));
while ($row_w = $select_room_number->fetch_assoc()) {
  $room_num2 = $row_w['room_num'];
}
          //$_SESSION['room_num'] = $room_num;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
