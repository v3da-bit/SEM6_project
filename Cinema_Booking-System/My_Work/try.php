<!doctype html>
<?php
session_start();
$name = $_SESSION["fname"];
$age = $_SESSION["age"];
?>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">





	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<script src="https://code.jquery.com/jquery-3.6.4.js"
		integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script> -->

	<title>GameStore</title>
	<style media="screen">
		.textWithBlurredBg {
			width: 300px;
			height: auto;
			display: inline-block;
			position: relative;
			transition: .3s;
			margin: 4px;
		}
		.navI{
			background-color: black;
		}

		.display {
			/* visibility: collapse; */
			display: none;
		}

		.textWithBlurredBg img {
			width: 100%;
			height: 100%;
			transition: .3s;
			border-radius: 4px;
		}

		.textWithBlurredBg:hover img {
			filter: blur(2px) brightness(60%);
			box-shadow: 0 0 16px cyan;
		}

		.textWithBlurredBg :not(img) {
			position: absolute;
			z-index: 1;
			top: 30%;
			width: 100%;
			text-align: center;
			color: #fff;
			opacity: 0;
			transition: .3s;
		}
		
		.textWithBlurredBg h3 {
			top: 50%
		}

		.textWithBlurredBg:hover :not(img) {
			opacity: 1;
		}

		a {
			font-family: verdana;
			font-size: 25px;
		}

		body {
			background-color: black;
		}

		.inside {
			background-color: white;
			color: white;
			margin: 50px;
			padding: 20px;
			border-radius: 35px;
		}

		.insidebox {
			background-color: white;
			color: white;
			padding: 20px;
			border-radius: 35px;
		}

		#logo {
			height: 70px;
		}

		.carousel-inner {
			border-radius: 50px;
		}

		.AboutUs {
			/* text-color:white; */
			text-decoration: none;
		}

		h1.about {
			color: white;
			font-size: 75px;
			text-decoration: none;
		}

		#myDIV {
			-webkit-animation: mymove 5s infinite;
			/* Chrome, Safari, Opera */
			animation: mymove 5s infinite;
		}

		/* Chrome, Safari, Opera */
		@-webkit-keyframes mymove {
			50% {
				text-shadow: 10px 20px 30px wheat;
			}
		}

		/* Standard syntax */
		@keyframes mymove {
			50% {
				text-shadow: 10px 20px 30px wheat;
			}
		}

		.container1 {
			background-color: white;
			height: 100px;

		}

		.btn-floating.btn-gplus.mx-1 {
			color: red;
		}

		.btn-floating.btn-li.mx-1 {
			color: #4875B4;
		}

		.btn-floating.btn-fb.mx-1 {
			color: #4875B4;
		}

		.username {
			color: white;
			/* text-align: left; */
			padding-left: 12px;
			float: left;
			font-size: 20px;
		}

		#user {
			color: red;
			font-size: 30px;
			text-decoration: underline;
		}
		.ulNav{
			margin-left:5%;
		}
	</style>
</head>

<body>

	<main class="cd-main-content">



		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
				<a class="navbar-brand" href="index.php"><img src="logo2.jpg" alt="logo" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto end-0 mr-sm-2 ulNav">
						<li class="nav-item navI ">
							<a class="nav-link" href="index.php"><b>
									<pre><font color="white">Home	</pre>
									</font>
								</b></a>
						</li>
						<li class="nav-item navI">
							<a class="nav-link" href="login_1.php"><b>
									<pre><font color="white">Login 	</font></pre>
								</b></a>
						</li>
						<li class="nav-item navI">
							<a class="nav-link" href="index_regi.php"><b>
									<pre><font color="white">SignUp 	</font></pre>
								</b></a>
						</li>
						<li class="nav-item navI">
							<a class="nav-link" href="#myDIV"><b>
									<pre><font color="white">About Us</font></pre>
								</b></a>
						</li>

					</ul>
				</div>

			</nav>
			<div class="username" id="check"> WELCOME <span id="user">
					<?php echo $name; ?>
				</span></div>
		</section>




		<section>
			<div class="inside">
				<div id="slider" class="container-fluid">
					<div id="headerSlider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
							<li data-target="#headerSlider" data-slide-to="1" class="active"></li>
							<li data-target="#headerSlider" data-slide-to="2" class="active"></li>
							<li data-target="#headerSlider" data-slide-to="3" class="active"></li>
							<!-- <li data-target="#headerSlider" data-slide-to="4" class="active"></li>
	<li data-target="#headerSlider" data-slide-to="5" class="active"></li> -->

						</ol>
						<div class="carousel-inner">
							<div class="carousel-item navI active">
								<a href="target_snake.html"><img src="img/snake_changed.jpg" class="d
	  -block w-100" alt="pic1"></a>
							</div>
							<div class="carousel-item navI">
								<a href="target.html"><img src="img/space_changed.png" class="d-block w-100"
										alt="pic2"></a>
							</div>
							<div class="carousel-item navI">
								<a href="target_rex.html"><img src="img/pong.jpg" class="d-block w-100" alt="pic3"></a>
							</div>
							<div class="carousel-item navI">
								<a href="target_flappy.html"> <img src="img/flappy_slide.png" class="d-block w-100"
										alt="pic5"></a>
							</div>
						</div>
						<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

		</section>



		<section class="cd-gallery">
			<div id="games" class="insidebox">
				<ul>
					
						<a href="target_snake.html">
								<li class="mix color-1 check1 radio2 option3">
									<div class="textWithBlurredBg"><img src="img/sanke.jpg" alt="Image 1">
										<h1>Snake II Game</h1>
									</div>
								</li>
							</a>
						<a href="target.html">
								<li class="mix color-2 check2 radio2 option2">
									<div class="textWithBlurredBg"><img src="img/space.png" alt="Image 2">
										<h1>Space Invaders</h1>
									</div>
								</li>
							</a>
						<!-- <a href="target_rex.html"><li class="mix color-1 check3 radio3 option1"><div class="textWithBlurredBg"><img src="img/dino.png" alt="Image 3"><h1>Offline Dino Game</h1></div></li> -->
						<!-- <a href="target_hex.html"><li class="mix color-1 check3 radio2 option4"><div class="textWithBlurredBg"><img src="img/race.jpg" alt="Image 4"><h1>Futuristic Racing 4</h1></div></li> -->
						<a href="target_flappy.html">
								<li class="mix color-1 check1 radio3 option2">
									<div class="textWithBlurredBg"><img src="img/flappy.png" alt="Image 5">
										<h1>Flappy Bird</h1>
									</div>
								</li>
							</a>
					
					
						<a href="target_type.html">
								<li class="mix color-2 check2 radio3 option3">
									<div class="textWithBlurredBg"><img src="img/type.jpg" alt="Image 6">
										<h1>Type Master</h1>
									</div>
								</li>
							</a>
						<a href="target_bounce.html">
								<li class="mix color-2 check2 radio2 option1">
									<div class="textWithBlurredBg"><img src="img/arka.png" alt="Image 7">
										<h1>Arkanoid Bounce</h1>
									</div>
								</li>
							</a>
						<a href="target_pong.html">
								<li class="mix color-1 check1 radio3 option4">
									<div class="textWithBlurredBg"><img src="img/pong.png" alt="Image 8">
										<h1>Ping-Pong</h1>
									</div>
								</li>
							</a>
					
					
						<a href="target_pacman.html">
								<li class="mix color-2 check1 radio2 option3">
									<div class="textWithBlurredBg"><img src="img/pac.png" alt="Image 9">
										<h1>Pacman</h1>
									</div>
								</li>
							</a>
						<!-- <a href="target_mario.html"><li class="mix color-1 check3 radio2 option4"><div class="textWithBlurredBg"><img src="img/mario.jpg" alt="Image 10"><h1>Mario</h1></div></li> -->
						<a href="target_2048.html">
								<li class="mix color-1 check3 radio3 option2">
									<div class="textWithBlurredBg"><img src="img/2048.jpg" alt="Image 11">
										<h1>2048</h1>
									</div>
								</li>
							</a>
						<a href="target_tetris.html">
								<li class="mix color-2 check1 radio3 option1">
									<div class="textWithBlurredBg"><img src="img/tetri.jpg" alt="Image 12">
										<h1>Tetris</h1>
									</div>
								</li>
							</a>
					
					<!-- <a href="target_snake1.html"><li class="mix color-1 check1 radio2 option3"><div class="textWithBlurredBg"><img src="img/snake1.jpg" alt="Image 1"><h1>Snake I Game</h1></div></li> -->
					<!-- <a href="target_tower.html"><li class="mix color-1 check1 radio2 option3"><div class="textWithBlurredBg"><img src="img/tower.jpg" alt="Image 1"><h1>Tower Defender</h1></div></li> -->
					<!-- <a href="target_race.html"><li class="mix color-1 check1 radio2 option3"><div class="textWithBlurredBg"><img src="img/car.jpg" alt="Image 1"><h1>Car Simulator</h1></div></li> -->
					<!-- <a href="target_show.html"><li class="mix color-1 check1 radio2 option3"><div class="textWithBlurredBg"><img src="img/game.jpg" alt="Image 1"><h1>Quiz Game</h1></div></li> -->


				</ul>
			</div>

			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->




	</main> <!-- cd-main-content -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->

	<script type="text/javascript" src="list-builder.js"></script>







	<!-- Footer -->
	<footer>

		<!-- Footer Elements -->
		<div class="container1">
			<br>
			<!-- Social buttons -->
			<ul class="list-unstyled list-inline text-center">
				<li class="list-inline-item navI">
					<a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/profile.php?id=100024937610078">
						<i class="fab fa-facebook-f"> </i>
					</a>
				</li>

				<li class="list-inline-item navI">
					<a class="btn-floating btn-tw mx-1" href="https://twitter.com/">
						<i class="fab fa-twitter"> </i>
					</a>
				</li>

				<li class="list-inline-item navI">
					<a class="btn-floating btn-li mx-1"
						href="https://www.linkedin.com/search/results/all/?heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAADoxjmcBrV_36as3mZCigNS9FwyfYa2-54o&keywords=dev%20patel&origin=RICH_QUERY_TYPEAHEAD_HISTORY&position=0&searchId=19c58904-74ec-4a98-99fd-7650733da4c4&sid=VPO">
						<i class="fab fa-linkedin-in"> </i>
					</a>
				</li>

			</ul>
			<!-- Social buttons -->

		</div>
		<!-- Footer Elements -->



	</footer>
	<!-- Footer -->

	<div id="myDIV"></div>
</body>
<?php
if ($age <= 10) {
	echo $age;
	?>
	<script>
		console.log("lund");
		// document.getElementById("r2").classList.add("display");
		// document.getElementById("r3").classList.add("display");
		document.getElementByClassName("age11").style.display="none"
		
		// $(".age11").remove();
	</script>
	<?php
}
?>

</html>