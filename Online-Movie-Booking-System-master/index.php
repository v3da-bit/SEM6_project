<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        background: #EEE;
        font: 10px/13px 'Lucida Sans',sans-serif;
      }
      .header {
        width: 99%;
        margin: 0px auto 0px;
        color: white;
        background: #41444C;
        text-align: center;
        border: 4px solid #212121;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 25px;
      }
      form, .content {
        width: 99%;
        margin: 0px auto;
        padding: 25px;
        border: 2px solid #212121;
        background: white;
        border-radius: 0px 0px 10px 10px;
      }
      .wrap {
        overflow: hidden;
        margin: 10px;
        background-color: #CABDCB;
      }
      .box {
        float: left;
        position: relative;
        width: 20%;
        padding-bottom: 20%;
      }
      .boxInner {
        position: absolute;
        left: 10px;
        right: 10px;
        top: 10px;
        bottom: 10px;
        overflow: hidden;
      }
      .boxInner img {
        width: 100%;
      }
      .boxInner .titleBox {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin-bottom: -50px;
        background: #000;
        background: rgba(0, 0, 0, 0.5);
        color: #FFF;
        padding: 10px;
        text-align: center;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
      }
      body.touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
        margin-bottom: 0;
      }
      @media only screen and (max-width : 480px) {
        /* Smartphone view: 1 tile */
        .box {
        width: 200%;
        padding-bottom: 100%;
        }
      }
      @media only screen and (max-width : 650px) and (min-width : 481px) {
        /* Tablet view: 2 tiles */
        .box {
        width: 50%;
        padding-bottom: 50%;
        }
      }
      @media only screen and (max-width : 1050px) and (min-width : 651px) {
        /* Small desktop / ipad view: 3 tiles */
        .box {
        width: 33.3%;
        padding-bottom: 33.3%;
        }
      }
      @media only screen and (max-width : 1290px) and (min-width : 1051px) {
        /* Medium desktop: 4 tiles */
        .box {
        width: 25%;
        padding-bottom: 25%;
        }
      }
    </style>
</head>
<body>

<div class="header">
	<h2 style="font-size:2.5em">Booking Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="font-size: 1.5em">Welcome <strong><?php echo $_SESSION['username']; ?></strong> to the online movie booking portal</p>
    	<p style="font-size: 1.5em;margin-top: 7px;"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
    <div>
      <form action = "savemovie.php" method = "POST">
    <div class="wrap">
      
  <h1 style="margin-bottom: 50px">
  <?php 
  
  echo "User : " . $_SESSION["username"] . "<br>"; 
  ?></h1>
    <!-- Define all of the tiles: -->
    <div class="box">
      <div class="boxInner">
      <center>
        <input type="image" src="images/airlift.jpg" alt="Airlift" name="name" value="AIRLIFT">
      </center>
      <div class="titleBox">Airlift</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/apocalypse.jpg" alt="X-Men : Apocalypse" name="name" value="X-MEN : APOCALYPSE">
      </center>
      <div class="titleBox">X-Men : Apocalypse</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/avatar.jpg" alt="Avatar" name="name" value="AVATAR">
      </center>
      <div class="titleBox">Avatar</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/avengers.jpg" alt="Avengers" name="name" value="AVENGERS">
      </center>
      <div class="titleBox">Avengers</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/captain.jpg" alt="Captain America : The Winter Soldier" name="name" value="CAPTAIN AMERICA : THE WINTER SOLDIER">
      </center>
      <div class="titleBox">Captain America : The Winter Soldier</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/deadpool.jpg" alt="Deadpool" name="name" value="DEADPOOL">
      </center>
      <div class="titleBox">Deadpool</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/hobbit.jpg" alt="Hobbit" name="name" value="HOBBIT">
      </center>
      <div class="titleBox">Hobbit</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/logan.jpg" alt="Logan" name="name" value="LOGAN">
      </center>
      <div class="titleBox">Logan</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/man.jpg" alt="The Man" name="name" value="THE MAN WHO KNEW INFINITY">
      </center>
      <div class="titleBox">the man who knew infinity</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
      <center>
      <input type="image" src="images/interstellar.jpg" alt="Interstellar" name="name" value="INTERSTELLAR">
      </center>
      <div class="titleBox">Interstellar</div>
      </div>
    </div>
    
    
    </form>
      <!--
      <a href="default.asp">
        <img src="images/sachin.jpg" style="margin-left:150px;margin-top:50px;width:242px;height:242px;border:0;">
      </a>

      <a href="default.asp">
        <img src="images/dhoni.jpg" style="margin-left:250px;margin-top:50px;width:242px;height:242px;border:0;">
      </a>

      <a href="default.asp">
        <img src="images/milkha.jpg" style="margin-left:300px;margin-top:50px;width:242px;height:242px;border:0;">
      </a>
    </div>
  -->
</body>
</html>