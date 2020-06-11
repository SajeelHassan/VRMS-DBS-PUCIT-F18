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
        <h1>Admin Panel</h1>
        <div id="adminlogin_box">
        <h2>Login</h2>
        <?php
          if(isset($_SESSION['adminid'])){
            header("location: adminpanel.php");
            exit();
          }

          if(isset($_GET['error']))
            {
                if ($_GET['error']=="emptyfields")
                {
                 echo '<p class="formerror" >Fill in the fields!</p>';
               }
               else if($_GET['error']=="NoAdminExists"){
                 echo '<p class="formerror" >No Admin Found!</p>';
               }
               else if($_GET['error']=="wrongPin"){
                 echo '<p class="formerror" >Wrong Pin!</p>';
               }
            }
            ?>
        <div id="adminlogin_form">
				<form method="post" action="includes/adminlogin.inc.php">
        <label for="username">Username:</label>
        <p><input type="text" Placeholder="username" name="username"></p>
        <label for="pin">Pin:</label>
				<p><input type="password" Placeholder="Pin" name="pin"></p>
				<button type ="submit" name="adminlogin" >Continue >>></button>
			</form>
      </div>
			</div>

		 </div>
		</div>
		<div class="clear"></div>

	</body>

</html>
