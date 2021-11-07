<?php
    $password= $_POST['passw'];
    $conf_password= $_POST['conf_passw']; 
    $message=" ";
    if(isset($password) && isset($conf_password)){
        if($password == $conf_password)
            $message="Password has been successfully changed";
        else
            $message="Passwords do not match";
    }
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="change-password.css" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php">Home</a> <a href="index.php">Edit Profile</a><a href=" ">Log Out</a>
            </nav>
        </header>
        <main class="content">
            <h1>Change Password</h1>
            <p>
                <?php echo $message;?>
            
            </p>
            <form method="post" action="change-password.php">
                <input type="password" placeholder="enter new password" name="passw"> <br>
                <input type="password" placeholder="confirm new password" name="conf_passw"> <br>
                <input type="submit" value="Change password" /> <input type="reset"/>
                
            </form>
        </main>
    </body>
</html>
