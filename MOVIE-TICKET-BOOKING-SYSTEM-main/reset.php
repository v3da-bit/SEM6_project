<?php
$conn=mysqli_connect('localhost','root','','miniproject');
if(isset($_GET['token'])){
    $token=mysqli_real_escape_string($conn,$_GET['token']);
    $query="select*from password_reset where token='$token'";
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){
        $row=mysqli_fetch_array($run);
        $token=$row['token'];
        $email=$row['email'];
    }else{
        header("location:signin.php");
    }
}
if(isset($_POST['submit'])){
    $newpassword=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    $options=['cost'=>11];
    $hashed=password_hash($newpassword,PASSWORD_BCRYPT,$options);
    if($newpassword!=$confirmpassword){
        $msg="<div class='alert alert-danger'>password not match</div>";
    }elseif(strlen($newpassword)<6){
        $msg="<div class='alert alert-danger'>password must be 6 character</div>";
    }
    else{
        $query="update users set password='$hashed'where email='$email'";
        mysqli_query($conn,$query);
        $query="delete from password_reset where email='$email'";
        mysqli_query($conn,$query);
        $msg="<div class='alert alert-success'>password updated</div>";
    }
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js">
        <style>
  body{
        background-image: url('file:///C:/Users/HP/Documents/HTML/mini-project/background-photos/mini1-02.jpeg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }
    .fog{
    width: 370px;
    margin: 0 auto;
    padding: 7% 0;
}

.fog h2{
    color: #fd614d;
    text-align: center;
    margin: 0 0 20px;

}
.fog form{
   border-radius: 1px;
   margin-bottom: 15px;
   background-color: rgba(0,0,0,0.7) !important;
   border: 1px solid none;
   box-shadow: 0px 2px 2px rgba(0,0,0,0.7);
   padding: 30px;
   color: aliceblue;
  
}

.form-control{
    background-color: transparent;
    color: aliceblue;
    min-height: 20px;
    letter-spacing: 0.4em;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
    text-align: center;
    border-bottom: 2px solid aliceblue;
    
    font-weight: bold;
}

.form-control:hover {
    background-color: transparent;
    color: aliceblue;
    overflow: hidden;
    text-decoration: none;
    border-bottom: 2px solid aliceblue;
}
.btn{
    background: linear-gradient(259deg,#f64,#f64c72);
	border: none;
    text-align: center;
	padding: 3%s;
    font-size: 16px;
    font-weight: bold;
	color: aliceblue;
}
.btn:hover{
	background: aliceblue;
border: none;
color: aliceblue;
color: #fd614d;
}
a{
	color: #fd614d;;
	text-decoration: none;
}

a:hover{
	color:#664a71;
	text-decoration: none;
}
.fog .input-group-addon{
    max-width: 42px;
    text-align: center;
    background: none;
    border-bottom: 2px solid aliceblue;
    padding-left: 5px;
}
.input-group-addon{
    font-size: 30px;
}
.fog .fa-check{
    position: absolute;
    top:  16px;
    left: 10px;
    font-size: 7px;
    color: #fd614d;

}
        </style>
    </head>
    <body>
        <div class="fog">
            <form action="" method="post">
            <h2>NEW PASSWORD</h2>
            <div class="form-group">
                <div class="input-group">
                  
                    <input type="text" readonly name="" value="<?php echo $email; ?>"  class=" form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>   
                    <input type="password" name="password"  class=" form-control"placeholder="password" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i><i class="fa fa-check"></i></span>   
                    <input type="password" name="confirmpassword"  class=" form-control"placeholder="re-password" required>
                </div>
            </div>
            <?php if(isset($msg)){echo$msg;}?>
            <br> <button type="submit"  name="submit"class="btn  btn-lg btn-block">reset password</button>
        </form>
        </div>
    
    </body>
</html>