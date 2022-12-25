

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js">
                                             
</head>
<style>
    body{
        background-image:url("background-photos/back.jpeg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }
.form-control, .form-control:focus ,.input-group-addon{
border-color:  aliceblue;
border-radius: 0;
}
.signup{
    width: 360px;
    margin: 0 auto;
    padding: 50px 0;
}

.signup h2{
    color: #fd614d;
    text-align: center;
    margin: 0 0 20px;
}
.signup form{
   border-radius: 1px;
   margin-bottom: 15px;

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
    color: #fd614d;
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

.signup .fa-check{
    position: absolute;
    top:  16px;
    left: 10px;
    font-size: 7px;
    color: #fd614d;

}

 .fa-lock,.fa-user{
    color:  aliceblue;
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
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
           header('location:home.html');
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

        
        <div class="signup">
            <form method="POST">
            <h2>CREATE ACCOUNT</h2>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="username"  class=" form-control"placeholder="username" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email"  class=" form-control"placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password"  class=" form-control"placeholder="password" required>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit"  name="submit" value="Register" class="btn btn-primary btn-lg btn-block">Sign Up</button>
            </div>
            <div class="d-flex justify-content-center ">
                <span style="color:  #fd614d" >Already have an account?</span> &nbsp;<a href="signin.html">Sign In</a>
            </div>
        </form>
   
        </div>
        <?php
    }
?>
    </body>
</html>