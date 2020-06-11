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
        <div id="adminlogo"><a href="adminpanel.php">VRMS<sub>.com</sub></a></div>
			</div>
		</div>
		<div class="clear"></div>
		 <div id="page-size">
			<div id="admin_page">
        <div id="admin_accountOptions">
          <p>Account Options</p><br><br>
          <a href="vehicleSearch.php">Vehicle Search</a><br><br>
          <a href="adminpendingReg.php">Pending Registrations</a>
          <form action="includes/adminlogout.inc.php" method="post">
            <button type="submit" name="logout">Logout</button>
          </form>
        </div>
        <div class="clear"></div>
        <div id="account_main">
          <h2>Search</h2>
          <div id='signupform'>
          <form method="post" action="search.php">
              <p><label for="fname">By Name:</label></p>
						<input type="text" placeholder="Name" name="fname">
							<br><br>
                <p><label for="make">OR by Make:</label></p>
						<input type="text" placeholder="i.e: Toyota.." name="make">
							<br><br>
              <p><label for="model">OR by Model:</label></p>
						<input type="text" placeholder="i.e: Corolla ..." name="model">
							<br><br>
            <p><label for="city">OR by City:</label></p>
        <input type="text" placeholder="City of Registration..." name="city"><br><br>

          <p><label for="status">OR by Status</label></p>
      <input type="text" placeholder="Pending/Approved ..." name="status">
        <br><br>
						<button type="submit" name="search_submit">Search</button>
					</form>
</div>
          
        </div>
			</div>
		 </div>
		</div>
		<div class="clear"></div>

	</body>

</html>
