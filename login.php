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
			Login/SignUp
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
			<div id="login-page">
        <h1>Login to your account</h1>
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
								 echo '<p class="loginerror" >Fill in the fields!</p>';
								}
								else if ($_GET['error']=="sqlerror")
								{
								 echo '<p class="loginerror" >Server Error! tryagain Later!</p>';
							 }
								else if($_GET['error']=="wrongPwd")
									{
										echo '<p class="loginerror" >Incorrect Password!</p>';
									}
								else if($_GET['error']=="NoUserExists")
										{
											echo '<p class="loginerror" >No User Found!</p>';
										}
						}
            ?>

        <div id="login_form">
				<form method="post" action="includes/login.inc.php">
          <?php
            if (isset($_GET['nameormail'])) {
              $nameormaill=$_GET['nameormail'];
              echo '<input type="text" placeholder="Username or Email" name="nameormail" value="'.$nameormaill.'"><br><br>';
            }
            else
            {
              echo '<input type="text" placeholder="Username or Email" name="nameormail"><br><br>';
            }

           ?>

				<input type="password" Placeholder="Password" name="pwd"><br><br>
				<button type ="submit" name="login-submit" >Login</button>
			</form>
			</div>
      <div class="loginSignup">
			<h2>want new account?</h2>
			<a href="register.php"> Sign Up</a>
		  </div>
		 </div>
		</div>
		<div class="clear"></div>
		<?php require 'footer.php'; ?>
	</body>

</html>
