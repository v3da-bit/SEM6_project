<!DOCTYPE html>
<?php 
		$conn = mysqli_connect('localhost', 'root', '','registration');
		$sql1="SELECT mname FROM ticket";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		$sql2="SELECT tdate FROM ticket";
		$result2=mysqli_query($conn,$sql2);		
		$row2=mysqli_fetch_row($result2);
		$sql3="SELECT theatre FROM ticket";
		$result3=mysqli_query($conn,$sql3);		
		$row3=mysqli_fetch_row($result3);
		$sql4="SELECT time FROM ticket";
		$result4=mysqli_query($conn,$sql4);		
		$row4=mysqli_fetch_row($result4);
		$sql5="SELECT s1 FROM seats";
		$result5=mysqli_query($conn,$sql5);		
		$row5=mysqli_fetch_row($result5);
		$sql6="SELECT mfare FROM ticket";
		$result6=mysqli_query($conn,$sql6);		
		$row6=mysqli_fetch_row($result6);
	?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book De Ticket</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style>
			table, th, td {
			border: 1px solid black;
			}
		</style>
		<style type="text/css">
		.btn{
			border: none;
    		background-color: inherit;
    		padding: 14px 28px;
    		font-size: 20px;
    		cursor: pointer;
    		display: inline-block;
    	}

			/* Green */
		.success {
    		color: navy;
    		
		}

		.success:hover {
   			background-color: #1E90FF;
    		color: white;
    	}
    	body{
    		background-position: center; /* Center the image */
  			background-repeat: no-repeat; /* Do not repeat the image */
  			background-size: cover; 
    	}
		</style>
	</head>
	<body background="media/body.jpg">
		<img src = "media/bg.png" style="width:1498px;height:220px;border:5px solid black;">
		<h2>
		<?php 
		session_start();
		echo "User : " . $_SESSION["username"] . "<br>"; 
		?></h2>
		<form action="index.html" method="get">
			<button class="btn success"><b>Log Out</b></button>
		<center>
			<caption><h2>Ticket Summary</h2></caption>
				<p><th><b><font color="navy">Movie Name :</font></b></th>
				<td><?php echo $row1[0] ?></td></tr>
				<th><b><font color="navy">Movie Date :</font></b></th>
				<td><?php echo $row2[0] ?></td>
				<th><b><font color="navy">Movie Time :</font></b></th>
				<td><?php echo $row4[0] ?></td><br>
				<th><b><font color="navy">Theatre Name :</font></b></th>
				<td><?php echo $row3[0] ?></td>
				<th><b><font color="navy">Seats :</font></b></h3></th>
				<td><?php echo $row5[0] ?></td>
				<th><b><font color="navy">Total Fare :</font></b></th>
				<td><?php echo $row6[0] ?></td></p>
			<center><img src="media\qr.png"></center>
			<center><p style="color: black; font-size: 25px; "><b>QR-code</b></p></center>
		</form>
		
		<footer>
		<nav background="blue">
  		<marquee style="color: black" behavior="slide" direction="left" ><center><h2><b>Created by: - KKK, Any queries write us @  E-mail: - kunal.gupta2016@vitstudent.ac.in,   Moblie No. - 9467770006 ! </b></h2></center>
  		</nav>
	</footer>
		</center>
	</body>
</html>