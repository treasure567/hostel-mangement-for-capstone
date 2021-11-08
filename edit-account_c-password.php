<?php 
  include("layouts.php");
?>
				<div class="login-wrap">
    <div class="img" style="background-image: url(images/mat2.jpg);"></div>
    <h3 class="text-center mb-4">Change Password</h3>
    <?php include('success.php'); ?>
        <?php include('errors.php'); ?>
            <br>
            <form class="signup-form" action="edit-account_c-password.php"
            method="post">
                <div class="form-group mb-3">

                    <label>Old Password</label>
                    <input type="password" name="old_password"
                    class="form-control"
                    placeholder="Enter Your Old Password"
                    required>
                </div>
</div>
<br>
<div class="form-group mb-3">
    <label>New Password</label>
    <input type="password" class="form-control"
    name="new_password" placeholder="Enter Your New Password"
    required>
</div>
<br>
<div class="form-group mb-3">
    <label>Confirm New Password</label>
    <input type="password" class="form-control"
    name="new_password_c" placeholder="Confirm Your New Password"
    required>
</div>
<br>
<div class="form-group">
    <button type="submit" name="change_password"
    class="form-control btn btn-primary submit px-3">Update Password</button>
</div>
</form>


</div>



<?php 
  include("layouts_footer.php");
?>

    </body>

    </html>

