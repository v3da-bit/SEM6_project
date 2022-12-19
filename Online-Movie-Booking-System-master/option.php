<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book De Ticket</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style type="text/css">
		.btn {
			border: none;
    		background-color: inherit;
    		padding: 14px 28px;
    		font-size: 16px;
    		cursor: pointer;
    		display: inline-block;
    	}
    	
    	.button {
    		color: #2B4C7C;
    		font-size: 150%;
    	}

    	.button:hover {
    		background: #fff;
    		color: white;
    	}
    	</style>
	</head>
	<body >
	<img src = "media/ok.png" style="width:1500px;height:220px;border:0">
	<style type="text/css">
		body {
			background: lightgray;
		}
	</style>
	<h2>
	<?php 
	session_start();
	echo "User : " . $_SESSION["username"] . "<br>"; 
	?></h2>
	<center>
	<font size=10>
		<form method="POST" action="saveticket.php" name="form1">
		<fieldset style="width:500px;background-color: #99A5B6">
		<legend>
		<div style="color:#2A312B">
		<h3>Ticket Selection</h3>
		</div>
		</legend>
		<table>
			<tr>
			<td><b>Select Date: -</b></td>
			<td><input type="date" name="tdate"></td>
			</tr><tr>
			<tr>
			<td><b>Select Theatre: -</b></td>
			<td>
			<select name="theatre">
            <option value="INOX">INOX</option>
            <option value="LUXE">LUXE</option>
            <option value="IMAX">IMAX</option>
            <option value="PVR">PVR</option>
            </select>
            </td></tr>
			<tr>
			<td><b>Time : -</b></td>
			<td><select name="time">
            <option value="8:45 AM">8:45 AM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            </select></td>
			</tr>
			<tr>
			<td><b>Number of Seats: -</b></td>
			<td><select name="seats">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
			<option value="4">4</option>
            <option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select></td>
			</tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr>
			<td></td>
			<td><button class="btn button"><b>Submit</b></button></td>
			</tr>
		</table>
		</fieldset>
		</form>
		
	</center>
	</font>
	<footer>
		<nav background="blue">
  		<marquee style="color: #2A312B" behavior="slide" direction="left" direction= "right"><h2><b>Created by: - us</b></h2>
  		</nav>
	</footer>
	</body>

</html>