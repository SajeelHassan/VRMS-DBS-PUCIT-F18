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
			Sign Up/ Login
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
		 <div id="page-size">
			<div id="signup-page">
				<h1>
					Sign Up or Login!
				</h1>
				<div id='signupform'>
					<h2>Sign Up</h2>
					<?php
					if(isset($_SESSION['userid']))
					{
								header("Location: myaccount.php");
								exit();
					}
						if(isset($_GET['error']))
						{
							if ($_GET['error']=="emptyfields")
							{
							 echo '<p class="signuperror" >Fill in the fields!</p>';
							}
							else if($_GET['error']=="invalidusernameandmail")
								{
									echo '<p class="signuperror" >Invalid Username and Email!</p>';
								}
								else if($_GET['error']=="invalidusername")
									{
										echo '<p class="signuperror" >Invalid Username!</p>';
									}
								else if($_GET['error']=="invalidemail")
									{
										echo '<p class="signuperror" >Invalid Email!</p>';
									}
									else if($_GET['error']=="passwordCheck")
										{
											echo '<p class="signuperror" >Password do not match!</p>';
										}
										else if($_GET['error']=="sqlerror")
											{
												echo '<p class="signuperror" >Server Error! tryagain Later!</p>';
											}
										else if($_GET['error']=="usernameORemailAlreadytaken")
											{
												echo '<p class="signuperror" >Username/Email Already Taken!</p>';
											}
						}
					else if(isset($_GET['signup']))
						{
							if($_GET['signup']=="success")
								echo '<p class="success" >Successfully Signed Up!</p>';
					}
					?>
					<form method="post" action="includes/signup.inc.php">
						<?php
							if (isset($_GET['email'])) {
								$emaill=$_GET['email'];
								echo '<input type="email" placeholder="Email" name="email" value="'.$emaill.'"><br><br>';
							}
							else
							{
								echo '<input type="email" placeholder="Email" name="email"><br><br>';
							}
							if (isset($_GET['username'])) {
								$userr=$_GET['username'];
								echo '<input type="text" placeholder="Username" name="username" value="'.$userr.'">
									<br><br>';
							}
							else
							{
								echo '<input type="text" placeholder="Username" name="username">
									<br><br>';
							}
						 ?>
						<input type="password" placeholder="Password" name="pwd">
							<br><br>
						<input type="password" placeholder="Confirm Password" name="pwd-confirm">
							<br><br>
						<button type="submit" name="signup-submit">Sign Up</button>
					</form>
				</div>
				<div class="signupLogin">
					<h2>Already have an account!</h2>
					<a href="login.php">Login</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<?php require 'footer.php'; ?>
	</body>
</html>
