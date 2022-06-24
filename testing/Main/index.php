<!DOCTYPE html>
<html>
<head>
	<title>Arknight DSS</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Ar<span>knight</span></h2>
			<ul>
			</ul>
			<?php
			
				include 'config.php';

				session_start();
				if (isset($_SESSION['username'])) {
					?> 
					<a href="../login/logout.php" class="btn">Logout</a>
					<?php
				} else{
				?>
					<a href="../login/" class="btn">Login</a>
					<?php
				}
			?>
			
		</nav>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Recommendation System</h5>
				<div class="pra">
					<p>We calculate the best operator to suits your needs</p>

				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Choose the Operator</h5>
				<div class="pra">
					<p></p>

					<p style="text-align: center;">
						<a class="button" href="selection.php">Start</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!------Contact Me------>
	<div class="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<a class="button-two" href="#">Hire Me</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Tahmid Ahmed</p>
		<p>For more HTML, CSS, and coding tutorial - please click on the link below to subscribe to my channel:</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Tahmid Ahmed</p>
	</footer>
</body>
</html>