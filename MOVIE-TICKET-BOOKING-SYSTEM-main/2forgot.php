<!-- (A) PASSWORD RESET FORM -->
<form method="post" target="_self">
  Email:
  <input type="email" name="user_email" required value="john@doe.com"/>
  <input type="submit" value="Reset Password"/>
</form>
 
<!-- (B) PROCESS PASSWORD RESET REQUEST -->
<?php
if (isset($_POST['user_email'])) {
  // (B1) CONNECT TO DATABASE
  require "2a-common.php";
 
 /*if(isset($_POST['submit'])){
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    $options=['cost=>11'];
    $hashed=password_hash($password,PASSWORD_BCRYPT,$options);
    if($password!=$confirmpassword){
        $msg="<div class='alert alert-danger'>password not match</div>";
    }elseif(strlen($password)<6)
        $msg="<div class='alert alert-danger'>password must be 6 character</div>"; 
    else{
        $query="update users set password='$hashed'where email='$email'";
        mysqli_query($conn,$query);
        $query="delete from password_reset where email='$email'";
        mysqli_query($conn,$query);
        $msg="<div class='alert alert-success'>password updated</div>"
    }

    if(isset($_POST['submit'])){
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    $options=['cost=>11'];
    $hashed=password_hash($password,PASSWORD_BCRYPT,$options);
    if($password!=$confirmpassword){
        $msg="<div class='alert alert-danger'>password not match</div>";
    }elseif(strlen($password)<6)
        $msg="<div class='alert alert-danger'>password must be 6 character</div>"; 
    else{
        $query="update users set password='$hashed'where email='$email'";
        mysqli_query($conn,$query);
        $query="delete from password_reset where email='$email'";
        mysqli_query($conn,$query);
        $msg="<div class='alert alert-success'>password updated</div>"
    }


} 