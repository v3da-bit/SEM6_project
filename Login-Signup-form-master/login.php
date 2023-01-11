<!DOCTYPE HTML>
<?php
if (isset($_POST['submit'])) {
  echo "hello";

  //echo "<script>alert('hello');</script>";
  
  $email =  $_POST['email'];
  $pass =   $_POST['password'];
  //$encryptPass= password_hash($pass, PASSWO);
  
$conn=mysqli_connect("localhost","root","","cinema_booking");
// if ($conn -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }
// else{
//   echo "connected";
// }
$emailquery="SELECT * FROM login WHERE email='$email'";
//$passquery="SELECT * FROM login WHERE ";
$sql=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($sql);  
if ($emailcount) {
  echo "email present";

  $email_pass=mysqli_fetch_assoc($sql);
  $db_pass_check=$email_pass['password'];
  $pass_decode=password_verify($pass,$db_pass_check);
  if ($pass_decode) {
    echo "succeed";
    header("Location: My_Work\index.html");
  }
  else{
    echo "password didn't match";
  }

  # code...
}
else{
  echo "email not found";
}
/*$uname=$_POST['uname'];
$pass=$_POST['password'];
$query=`INSERT INTO login (UserName,password) VALUES('$uname','$pass')`;
*/
}
?>

<html lang="en">
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
	
	
<div class="login-page">
  <div class="form">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1>LogIn</h1>
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="email" placeholder="&#xf007;  Email" name="email"/>
      <input type="password" id="password" placeholder="&#xf023;  password" name="password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button id="login" name="submit">LOGIN</button>
      <p class="message"></p>
      <form class="login-form">
      <h5>Didn't have Any Account: <a href="signup.php">SignUp</a></h5>
    </form>
    </form>

    
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>

