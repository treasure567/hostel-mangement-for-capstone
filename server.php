<?php
session_start();

// Stop Irrelevant Warning Signs From Showing
error_reporting(E_ERROR | E_PARSE);

// initializing variables
$username = "";
$email    = "";
$errors   = array();
$success  = array();

// connect to the database
require ('database/config.php');

// Get The Lists of Available Hostel Rooms Number not taken by any user
$null_user      = NULL;
$select_room_no = mysqli_query($db, "SELECT * FROM rooms WHERE user = '$null_user' ORDER BY Rand() LIMIT 1") or exit(mysqli_error($db));
while ($row_room_no    = mysqli_fetch_assoc($select_room_no))
{
    $list_room_no   = $row_room_no['room_no'];
}

// Handling The Registration Form
if (isset($_POST['submit']))
{
    $email          = mysqli_real_escape_string($db, $_POST['email']);
}

// Get First Name From Students database
$get_f_name     = mysqli_query($db, "SELECT first_name FROM students WHERE student_email ='$email' LIMIT 1") or exit(mysqli_error($db));
while ($row_f_name     = $get_f_name->fetch_assoc())
{
    $f_name         = $row_f_name['first_name'];
}

// Get Last Name From Students database
$get_l_name     = mysqli_query($db, "SELECT last_name FROM students WHERE student_email ='$email' LIMIT 1") or exit(mysqli_error($db));
while ($row_l_name     = $get_l_name->fetch_assoc())
{
    $l_name         = $row_l_name['last_name'];
}

// REGISTER USER
if (isset($_POST['submit']))
{
    // receive all input values from the form
    $reg_num        = mysqli_real_escape_string($db, $_POST['reg_num']);
    $first_name     = $f_name; // Gets the first name from the students database
    $last_name      = $l_name; // Gets the last name from the students database
    $email          = mysqli_real_escape_string($db, $_POST['email']);
    $username       = mysqli_real_escape_string($db, $_POST['username']);
    $password_1     = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2     = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($reg_num))
    {
        array_push($errors, "Registration Number is required");
    }
    if (empty($first_name))
    {
        array_push($errors, "Sorry Your First Name wasn't Found. Kindly Contact Your School Support");
    }
    if (empty($last_name))
    {
        array_push($errors, "Sorry Your Last Name wasn't Found. Kindly Contact Your School Support");
    }
    if (empty($email))
    {
        array_push($errors, "Email is required");
    }
    if (empty($username))
    {
        array_push($errors, "Username is required");
    }
    if (empty($password_1))
    {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2)
    {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result           = mysqli_query($db, $user_check_query);
    $user             = mysqli_fetch_assoc($result);

    if ($user)
    { // if user exists
        if ($user['username'] === $username)
        {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email)
        {
            array_push($errors, "Email already exists");
        }
    }

    // If No More Room Available
    if ($list_room_no == NULL)
    {
        array_push($errors, "Sorry no more rooms Available");
    }

    // Verify if Registration Number Exists
    $check_reg = mysqli_query($db, "SELECT reg_num FROM students WHERE student_email ='$email' LIMIT 1") or exit(mysqli_error($db));
    while ($row_reg   = $check_reg->fetch_assoc())
    {
        $user_reg  = $row_reg['reg_num'];
    }

    // Finally, register user if there are no errors in the form
    if ($user_reg != NULL)
    {
        if ($user_reg === $reg_num)
        {
            if (count($errors) == 0)
            {
                $password  = md5($password_1); //encrypt the password before saving in the database
                $room_num  = $list_room_no;

                $query     = "INSERT INTO users (reg_num, room_num, first_name, last_name, username, email, password)
  			  VALUES('$reg_num', '$room_num', '$first_name', '$last_name', '$username', '$email', '$password')";
                mysqli_query($db, $query);
                mysqli_query($db, "UPDATE rooms SET user = '$username' WHERE room_no='$room_num'");
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            else
            {

            }
        }
        else
        {
            array_push($errors, "Sorry Your Registration Number is Invalid!");
        }
    }
    else
    {
        array_push($errors, "Sorry Your Registration Number is Invalid!");
    }
}

// Handling Login Form
// Get Form fields from the Login Form
if (isset($_POST['login_user']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username))
    {
        array_push($errors, "Username is required");
    }
    if (empty($password))
    {
        array_push($errors, "Password is required");
    }
    // Finally Log in the user is no Error
    if (count($errors) == 0)
    {
        $password = md5($password); // decrypt password
        $query    = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results  = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1)
        {
            $_SESSION['username']          = $username;
            $username = $_SESSION['username'];
            $_SESSION['success']          = "You are now logged in";
            header('location: index.php');
        }
        else
        {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// Handling Editing of Profile
if (isset($_POST['edit_profile']))
{

    $username       = $_SESSION['username'];
    $select_reg_num = mysqli_query($db, "SELECT reg_num FROM users WHERE username='$username'") or exit(mysqli_error($db));
    while ($row_reg_num    = $select_reg_num->fetch_assoc())
    {
        $list_reg_num   = $row_reg_num['reg_num'];
    }

    $email          = mysqli_real_escape_string($db, $_POST['email']);

    if (empty($email))
    {
        array_push($errors, "Email is required");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result           = mysqli_query($db, $user_check_query);
    $user             = mysqli_fetch_assoc($result);

    if ($user)
    { // if user exists
        if ($user['email'] === $email)
        {
            array_push($errors, "Email already exists");
        }
    }

    // Finally Update New details
    if (count($errors) == 0)
    {
        mysqli_query($db, "UPDATE users SET email = '$email' WHERE username='$username'");
        mysqli_query($db, "UPDATE students SET student_email = '$email' WHERE reg_num='$list_reg_num'");
        array_push($success, "Email Successfully Updated");

    }
}

// Handling Changing Password Form
if (isset($_POST['change_password']))
{
    $username   = $_SESSION['username'];
    $password_p = mysqli_real_escape_string($db, $_POST['old_password']); // Get Old password from form
    $password_1 = mysqli_real_escape_string($db, $_POST['new_password']); // Get New password from form
    $password_2 = mysqli_real_escape_string($db, $_POST['new_password_c']); // Get confirmed new password from form
    // Validate confirmations
    if (empty($password_1))
    {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2)
    {
        array_push($errors, "The two passwords do not match");
    }

    // Get Old Password From database
    $old_password   = mysqli_query($db, "SELECT password FROM users WHERE username='$username'") or exit(mysqli_error($db));
    while ($row_password   = $old_password->fetch_assoc())
    {
        $old_password_r = $row_password['password'];
    }

    $password_v     = md5($password_p); // Decrypt Old password
    if ($password_v != $old_password_r)
    {
        array_push($errors, "Your Old Password is Incorrect");
    }

    // Finally Update Password in database if no Error
    if (count($errors) == 0)
    {
        $password_c_save = md5($password_2);
        mysqli_query($db, "UPDATE users SET password = '$password_c_save' WHERE username='$username'");
        array_push($success, "Password Successfully Changed");

    }

}
?>

<?php
$username           = $_SESSION['username'];
$select_first_name  = mysqli_query($db, "SELECT first_name FROM users WHERE username='$username'") or exit(mysqli_error($db));
while ($row_f_name         = $select_first_name->fetch_assoc())
{
    $list_f_name        = $row_f_name['first_name'];
}
?>


<?php
$username           = $_SESSION['username'];
$select_last_name   = mysqli_query($db, "SELECT last_name FROM users WHERE username='$username'") or exit(mysqli_error($db));
while ($row_l_name         = $select_last_name->fetch_assoc())
{
    $list_l_name        = $row_l_name['last_name'];
}
?>

<?php
$username           = $_SESSION['username'];
$select_email       = mysqli_query($db, "SELECT email FROM users WHERE username='$username'") or exit(mysqli_error($db));
while ($row_email          = $select_email->fetch_assoc())
{
    $list_email         = $row_email['email'];
}
?>

<?php
$username           = $_SESSION['username'];
$select_dept        = mysqli_query($db, "SELECT dept FROM students WHERE student_email='$list_email'") or exit(mysqli_error($db));
while ($row_dept           = $select_dept->fetch_assoc())
{
    $list_dept          = $row_dept['dept'];
}
?>

<?php
$username           = $_SESSION['username'];
$select_course      = mysqli_query($db, "SELECT course FROM students WHERE student_email='$list_email'") or exit(mysqli_error($db));
while ($row_course         = $select_course->fetch_assoc())
{
    $list_course        = $row_course['course'];
}
?>

<?php
$username           = $_SESSION['username'];
$select_room_number = mysqli_query($db, "SELECT room_num FROM users WHERE username='$username'") or exit(mysqli_error($db));
while ($row_r_num          = $select_room_number->fetch_assoc())
{
    $room_num2          = $row_r_num['room_num'];
}
?>

<?php
$username           = $_SESSION['username'];
$select_reg_num     = mysqli_query($db, "SELECT reg_num FROM users WHERE username='$username'") or exit(mysqli_error($db));
while ($row_reg_num        = $select_reg_num->fetch_assoc())
{
    $list_reg_num       = $row_reg_num['reg_num'];
}
?>
