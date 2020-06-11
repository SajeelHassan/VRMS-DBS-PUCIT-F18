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
          <h2>Dashboard</h2>
          <table id="user_status" >
                <tr>
                  <th>Application id</th>
                  <th>Vehicle Details</th>
                  <th>Status</th>
                  <th>Dated</th>
                  <th>Review and Edit</th>
                </tr>
          <?php
            $query="SELECT  r.regid,v.make,v.model,r.status,r.dated
            FROM registration r,vehicledetails v WHERE r.regid=v.vehicleid AND r.status='Pending'";
            $result=mysqli_query($link,$query);
            $resultCheck=mysqli_num_rows($result);
            if($resultCheck > 0){
              while($row=mysqli_fetch_array($result))
              {

                  echo "<tr>
                  <td> $row[0]</td>
                  <td> $row[1] $row[2]</td>
                  <td> $row[3]</td>
                  <td> $row[4]</td>
                  <td><a href='thePdetails.php?id=$row[0]'>Click Here</a></td>
                </tr>";
              }
            }

           ?>

          </table>
        </div>
			</div>
		 </div>
		</div>
		<div class="clear"></div>

	</body>

</html>
