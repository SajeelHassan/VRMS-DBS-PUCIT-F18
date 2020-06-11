<?php

session_start();

?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="vrms.css">
		<title>
			VRMS-Home
		</title>
		</head>
		<body>

		<div class="menu-bar-bkg">
			<div class="menu-bar">

				<p class="logo"><a href="myaccount.php">VRMS<sub>.com</sub></a></p>

				<div class=menu-buttons>


          <a href="myaccount.php">My Profile</a>
          <a href="includes/logout.inc.php">Logout</a>

				</div>

			</div>
		</div>
		<div class="clear"></div>
		<!--  HOme Page  -->
		<div id="page-size">
				<div class="home-img">

					<img src="images/home.jpg" width=1000px;>
				</div>
		</div>
		<div class="clear"></div>
		<?php require 'footer.php'; ?>
		</body>
</html>
