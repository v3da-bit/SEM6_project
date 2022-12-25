<?php
$conn=mysqli_connect('localhost','root','','miniproject');
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $query="select*from users where email='$email'";
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){
        $row=mysqli_fetch_array($run);
        $db_email=$row['email'];
        $db_id=$row['id'];
        $token = uniqid(md5(time()));
        $query="INSERT INTO  password_reset(id,email,token)VALUES(NULL,'$email','$token')";
        if(mysqli_query($conn,$query)){
            $to=$db_email;
            $subject="password reset link";
            $message="click<a href='https://website token=$token'>here</a>to reset password";
            $headers="MIME-Version: 1.0"."\r\n";
            $headers="content-type:text;charset=UTF-8"."\r\n";
            $headers='From:<nallathimbi@gmail.com>'."\r\n";
            //mail($to,$subject,$message,$headers);
            $msg="<div class='alert alert-email'>password link successfull</div>";

        }else{
            $msg="<div class='alert alert-danger'>not fount</div>";
        }
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
.a{
	color: #fd614d;;
	text-decoration: none;
}


.a:hover{
	color:#664a71;
	text-decoration: none;
}
        </style>
    </head>
    <body>
        <div class="fog">
            <form action="" method="post">
            <h2>FORGOT PASSWORD</h2>
           <center> <p><span><b>6-digit</b></span> code has send to your email</p></center>
           
           
        <input type="email"  name='email' class="form-control"placeholder="------" required>
        <?php if(isset($msg)){echo$msg;}?>
           <div class="form-group">
                <button type="submit"  name="submit"id="reset" value="Reset Password"  class="btn  btn-lg btn-block">log in</button>
			</div> <br>
           <center> <p>Doesn't have email ? &nbsp;<span  "><a class="a" href="phone.html">click here</a></span> </p></center>
        
        </form>
        </div>
      
    </body>
</html>