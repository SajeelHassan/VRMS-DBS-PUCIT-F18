<?php

  require 'includes/db.inc.php';
  session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="vrms.css">
		<title>
			Admin Panel
		</title>
		</head>
		<body>
		<div id="adminbarbkg">
			<div id="adminlogobar">
        <div id="adminlogo"><a href="index.php">VRMS<sub>.com</sub></a></div>
			</div>
		</div>
		<div class="clear"></div>
		 <div id="page-size">
			<div id="admin_page">
        <div id="admin_accountOptions">
          <p>Account Options</p><br><br>
          <a href="vehicleSearch.php">Vehicle Search</a><br><br>
          <a href="adminpendingReg.php">Pending Registrations</a><br><br>
          <a href="adminaccountSettings.php">Account Settings</a>
          <form action="includes/adminlogout.inc.php" method="post">
            <button type="submit" name="logout">Logout</button>
          </form>
        </div>
        <div class="clear"></div>
        <div id="account_main">
          <h2>Update Status</h2>

          <form class="userdetail" action="adminpanel.php" method='post'>
            <p> <label for="userStatus">Registration Status:</label>
              <select name="userStatus">
                <option value="approved"selected>Approved</option>
                <option value="Rejected">Rejected</option>
                <option value="pending">Pending</option>

              </select></p>
              <button type='submit' name='updating'>Update Status</button>

          </form>
        </div>
			</div>
		 </div>
		</div>
		<div class="clear"></div>

	</body>

</html>
