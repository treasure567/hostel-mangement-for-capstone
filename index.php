<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Hostel - Login</title>
    <link rel="stylesheet" href="assets/css/style.css"/>

    <?php
    	// Initialize the session
		session_start();

		// Include config file
		require_once "database/config.php";

		// Define variables and initialize with empty values
		$username = $password = "";
		$username_err = $password_err = $login_err = "";


        // Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //Check if username is empty
            if(empty(trim($_POST["username"]))){
                $username_err = "Please enter username.";
            } else{
                $username = trim($_POST["username"]);
            }

            // Check if password is empty
            if(empty(trim($_POST["password"]))){
                $password_err = "Please enter your password.";
            } else {
                $password = trim($_POST["password"]);
            }

            // Validate credentials
            if(empty($username_err) && empty ($password_err)){
                // Prepare a select statement
                $sql = "SELECT id, reg_num, room_num, first_name, last_name, username, email, password, reg_date FROM users WHERE username = ?";

                if($stmt = mysqli_prepare($link, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set parameters
                    $param_username = $username;

                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Store result
                        mysqli_stmt_store_result($stmt);

                        // Check if username exists, if yes then verify Password
                        if(mysqli_stmt_num_rows($stmt) == 1){
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                            if(mysqli_stmt_fetch($stmt)){
                                if(password_verify($password, $hashed_password)){
                                    // Password is correct, so start a new session
                                    session_start();

                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $reg_num;
                                    $_SESSION["username"] = $username;

                                    // Redirect user to Dashboard
                                    header("location: dashboard.php");
                                } else {
                                    // Password is not valid, display a generic error message
                                    $login_err = "Invalid username or password.";
                                }
                            }
                        } else {
                            // Username does not exist, displays a generic error message
                            $login_err = "Invalid username or passowrd.";
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statment
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            mysqli_close($link);
        }
    ?>
</head>
<body>
    <div class="login_body">
        <div class="body_img"></div>
        <div class="input_cont">
            <div class="banner">
                <div class="sign_b"><h1>Sign in</h1></div>
                <div class="soc_b">
                    <div><img src="assets/images/facebook.svg" alt="Facebook" width="40px"/></div>
                    <div><img scr="assets/images/twitter.svg" alt="" width="40px" /></div>
                </div>
            </div>
            <div class="input_f">
                <?php 
		            if(!empty($login_err)){
		                echo '<div style="color:red;" class="alert">' . $login_err . '</div>';
		            }        
	            ?>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="text"><input type="text" placeholder="Enter Username" name="username" class="f-cont <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" />
                    <span class="invalid-feedback"><?php echo $username_err; ?></span></div>
                    <div class="text"><input type="password" placeholder="Enter Password" name="password" class="f-cont <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" />
                    <span class="invalid-feedback"><?php echo $password_err; ?></span></div>
                    <div class="submit"><input type="submit" value="Login" /></div>
                </form>
                <div class="help">
                    <div><input type="checkbox" name="rme"/><label for="rme"> Remember Me</label></div>
                    <div><a href="forgot_password.php">Forgot Password</a></div>
                </div>
                <div class="help1"><p>Dont have an Account yet? <a href="register.php">Signup</a></p></div>
            </div>
        </div>
    </div>





</body>
</html>