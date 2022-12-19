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
</head>
<body>
	<div id="particles-js">
		<div id="form-holder">
			<div class="header">
				<h2>Login</h2>
			</div>
			
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" >
				</div>
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<div class="input-group">
					<button type="submit" class="btn" name="login_user">Login</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
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
</body>
</html>