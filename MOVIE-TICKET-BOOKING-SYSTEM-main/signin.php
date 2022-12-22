
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js">
        <link rel="stylesheet" type="text/html" href="particles.html">                                             
</head>
<style>
    body{
        background-image: url("background-photos/back.jpeg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        
    }
.form-control, .form-control:focus ,.input-group-addon{
border-color: aliceblue;
border-radius: 0;
}
.signup{
    width: 360px;
    margin: 0 auto;
    padding: 50px 0;
	padding-top: 8%;
}

.signup h2{
    color: #fd614d;
    text-align: center;
    margin: 0 0 20px;
	
}

.signup form{
   border-radius: 1px;
   
   background-color: rgba(0,0,0,0.7) !important;
   border: 1px solid none;
   box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
   padding: 30px;
  
}
.signup .form-group{
    margin-bottom: 30px;
}
.signup .form-control{
    min-height: 38px;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
}
.form-control{
    background-color: transparent;
    color: aliceblue;
}
.form-control:hover {
    background-color: transparent;
    color: aliceblue;
    overflow: hidden;
    text-decoration: none;
}
.signup .input-group-addon{
    max-width: 42px;
    text-align: center;
    background: none;
    border-bottom: 1px solid aliceblue;
    padding-left: 5px;
}
.input-group-addon{
    font-size: 30px;
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


 .fa-lock,.fa-user{
    color: aliceblue;
}

.signup .fa-envelope{
    font-size: 23px;
    color: aliceblue;
}
a{
	color: aliceblue;
	text-decoration: none;
}

a:hover{
	color:#664a71;
	text-decoration: none;
}


</style>
    <body>

        <?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: home.html");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
        
        <div class="signup">
            <form  name="f1" action = "" name="login"  method = "POST">
            <h2>LOG IN</h2>
         
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email"  class=" form-control"placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password"  name = "password" class=" form-control"placeholder="password" required>
                </div>
            </div>
          
            <div class="form-group">
                <button type="submit"  value="Login" name="submit" class="btn  btn-lg btn-block">log in</button>
			</div>
			<div class="form-group">
				<div class="d-flex justify-content-center" >
					<a href="forgot.php"  ">Forgot your password?</a>
				</div>
				<div class="d-flex justify-content-center ">
					<span style="color:  #fd614d" >Don't have an account?</span> &nbsp;<a href="signup.php">Sign Up</a>
				</div>
				
			</div>
        </form>
        </div>
        <?php
    }
?>
       
    </body>
</html>

