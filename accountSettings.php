<?php
  session_start();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="vrms.css">
  <title>My Account</title>
</head>
<body>

<div class="menu-bar-bkg">
  <div class="menu-bar">

    <p class="logo"><a href="home.php">VRMS<sub>.com</sub></a></p>

    <div class=menu-buttons>
        <a href="myaccount.php">My Profile</a>

    </div>

  </div>
</div>
<div class="clear"></div>
  <div id="page-size">
  <?php require 'accountOptions.php'; ?>
  <div class="clear"></div>
  <div id="account_main">
          <h1>Update Your Profile</h1>
          <div id='signupform'>
            <form method="post" action="includes/update.inc.php">
              <label for="email">&rarr; New Email Address:</label><br><br>
  						<input type="email" placeholder="Email" name="email">
  						<br><br>
              <label for="username">&rarr; New Username:</label><br><br>
  						<input type="text" placeholder="Username" name="username">
  							<br><br>
              <label for="email">&rarr; New Password:</label><br><br>
  						<input type="password" placeholder="Password" name="pwd">
  							<br><br>
  						<input type="password" placeholder="Confirm Password" name="pwd_confirm">
  							<br><br>
  						<button type="submit" name="updateprofile">Update</button>
  					</form>
  				</div>
          </form>
  </div>
</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
