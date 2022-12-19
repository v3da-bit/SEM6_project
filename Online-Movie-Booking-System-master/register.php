<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../new/style.css">
</head>
<body>
	<div id="particles-js">
		<div id="form-holder">
  		<div class="header">
  			<h2>Register</h2>
  		</div>
	
			<form method="post" action="register.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="reg_user" onclick="echoHello()">Register</button>
				</div>
				<p>
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>	
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script>
		particlesJS.load('particles-js', 'particles.json',
		function(){
			console.log('particles.json loaded...')
		})
	</script>
	<script>
        function echoHello(){
        alert("<?PHP hello(); ?>");
		return true;
        }
    </script>

    <?php
        FUNCTION hello(){
			//$name = $_POST['name'];
			$email = $_POST['email'];
			//$message = $_POST['message'];
			$from = 'kunal.gupta2016@vitstudent.ac.in'; 
			$to = 'kunal.gupta.kunalgupta98@mail.com'; 
			$subject = 'Customer Inquiry';
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";

			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html\r\n";
			$headers .= 'From: from@example.com' . "\r\n" .
			'Reply-To: reply@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			if ($_POST['submit']) {
				if (mail ($to, $subject, $body, $from)) { 
					alert('<p>Your message has been sent!</p>');
				} else { 
					alert('<p>Something went wrong, go back and try again!</p>'); 
				}
			}
				}

    ?>
</body>
</html>