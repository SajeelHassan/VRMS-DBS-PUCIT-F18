<?php

session_start();

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="vrms.css">
		<!-- <link rel="stylesheet" type="text/css" href="vrms.css"> -->

		<title>
			VRMS-Home
		</title>
		</head>
		<body>

		<div class="menu-bar-bkg">
			<div class="menu-bar">

				<p class="logo"><a href="index.php">VRMS<sub>.com</sub></a></p>

				<div class=menu-buttons>

					  	<a href="index.php">Home</a>
			  			<a href="register.php">Register Your Vehicle</a>
					  	<a href="contact.php">Contact Us</a>
				  		<a href="about.php">About</a>

				</div>

			</div>
		</div>
		<div class="clear"></div>
		<!--  HOme Page  -->
		<div id="page-sie">
				<div class="home-img">
					<img src="images/home.jpg" width=1000px;>
				</div>
		</div>
		<div class="clear"></div>
	<?php require 'footer.php'; ?>
		</body>
</html>
