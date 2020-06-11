<?php



?>
<html>
		<head>
			<link rel="stylesheet" type="text/css" href="vrms.css">
		<title>
			Contact Us
		</title>
		</head>
<body>
	<div class="menu-bar-bkg">
			<div class="menu-bar">

				<p class="logo"><a href="default.html">VRMS<sub>.com</sub></a></p>

				<div class=menu-buttons>

					  <a href="index.php">Home</a>
					  <a href="register.php">Register Your Vehicle</a>
					  <a href="contact.php">Contact Us</a>
					  <a href="about.php">About</a>

				</div>

			</div>
	</div>
		<div class="clear"></div>
	<div id="page-size">
		<div id="Contact-us">

			<h1>Get in touch!</h1>

		<div id="contact-form">
			<p>Email Address</p>
			<input type="text" name="email" placeholder="Your Email" class="txtb">
			<p>Subject</p>
			<input type="text" name="subject"  class="txtb">
			<p>What would you like to ask us?</p>
			<input type="text" name="message"  id="message">
			<br><br>
			<input type="submit" value="SEND" id="submit">
		</div>
		</div>

	</div>
	<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
