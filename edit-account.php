<?php 
  include("layouts.php"); // include template
?>
<div class="login-wrap">
    <div class="img" style="background-image: url(images/mat2.jpg);"></div>
    <h3 class="text-center mb-4">Edit Profile</h3>
    <?php include('success.php'); ?>
        <?php include('errors.php'); ?>
            <br>
                <div class="form-group mb-3">
                    <label>Registration Number</label>
                    <input type="readonly" disabled class="form-control"
                    value="<?php echo $list_reg_num ?>"
                    placeholder="Your Reg No:"
                    required> </div>
                </div><br>
                <form class="signup-form" action="edit-account.php"
            method="post">
<div class="form-group mb-3">
    <label>Username</label>
    <input type="text" class="form-control" name="username"
    value="<?php echo $username ?>" placeholder="Your Username:"
    required> </div>
    <div class="form-group">
    <button type="submit" name="edit_profile_username"
    class="form-control btn btn-primary submit px-3">Update Username</button>
</div> </form>
<br>
<form class="signup-form" action="edit-account.php"
            method="post">
<div class="form-group mb-3">
    <label>Email Address</label>
    <input type="email" class="form-control"
    name="email" value="<?php echo $list_email ?>"
    placeholder="Your Email:" required> </div>
<br>
<div class="form-group">
    <button type="submit" name="edit_profile"
    class="form-control btn btn-primary submit px-3">Update Email Address</button>
</div>
</form>
</div>
<?php 
  include("layouts_footer.php");
?>
    </body>

    </html>

