<!DOCTYPE html>
<?php
    
    $conn = mysqli_connect("localhost", "root", "", "cinema_booking");
    if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    } else {
      echo "connected";
    }
    
    session_start();
    if (isset($_REQUEST['submit'])) {
      
      //header("Location: login.php");

  $fullname = $_POST['fullName'];
  $email =  $_POST['email'];
  $uname =  $_POST['uname'];
  $pass =   $_POST['password'];
  $confirm = $_POST['confirm'];
  $password = password_hash($pass, PASSWORD_BCRYPT);
  $cpassword = password_hash($confirm, PASSWORD_BCRYPT);


  //echo "<script>alert('hello');</script>";
  
  if ($pass !== $confirm) {
    echo "<script >
      document.getElementById('passWarning').style.visibility='visible';
    </script>";
    header("Location: signup.php");
  
   



  } else {
    echo "success";
      

    # code...
    $emailquery = "SELECT * FROM login WHERE email='$email'";
    $unameQuery = "SELECT * FROM login WHERE UserName='$uname'";
    $emailsql = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($emailsql);
    $unamesql = mysqli_query($conn, $unameQuery);
    $unamecount = mysqli_num_rows($unamesql);
    if ($emailcount > 0 && $unamecount > 0) {
      header("Location: signup.php");

      echo "<script type='text/javascript'>alert('email or username already exist');</script>";
    } else {
      # code...
      $query = "INSERT INTO login(fullName, email, UserName, password, confirm) VALUES('$fullname','$email','$uname','$password','$cpassword')";
      // echo "<script>alert('hello');</script>";
      $sql = mysqli_query($conn, $query);
      if ($sql) {
        echo "<script type='text/javascript'>alert('data interserted');</script>";
      } else {
        die("Error" . $conn->error);
      }
      
      header("Location: login.php");
    }
    $conn->close();
  }



  # code...
}


?>

<html lang="en">

<head>

  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="signup_style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script>
    function show() {
      var password = document.getElementById("password");
      var confirm = document.getElementById('confirm');
      var icon = document.querySelector(".fas");

      // ========== Checking type of password ===========
      if (password.type == "password") {
        password.type = "text";
      } else {
        password.type = "password";
      }
      if (confirm.type == "password") {
        confirm.type = "text"
      } else {
        confirm.type = "password"
      }

    }
  </script>

</head>

<body class="body">


  <div class="login-page">
    <div class="form">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>SignUp</h1>
        <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json" background="transparent" speed="1" style="justify-content: center" loop autoplay></lottie-player>
        <input type="text" placeholder="full name" name="fullName" required />
        <input type="email" placeholder="email address" name="email" required />
        <input type="text" placeholder="pick a username" name="uname" required />
        <input type="password" id="password" class="password" placeholder="set a password" name="password" required />
        <input type="password" id="confirm" class="password" placeholder="confirm password" name="confirm" required />
        <h6 id="passWarning" style="visibility: hidden; color:red;">Please Make Sure That Password & confirm Password Would be Same</h6>
        <i class="fas fa-eye" onclick="show()"></i>
        <br>
        <br>
        <button name="submit">Submit</button>
        <form class="login-form">
          <h5>Already have an Account: <a href="login.php">LogIn</a></h5>
        </form>
      </form>


    </div>
  </div>









</body>

</html>