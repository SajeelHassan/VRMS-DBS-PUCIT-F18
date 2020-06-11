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
          <h2>User Detail</h2>
          <table id="admin_user_status" >
            <?php
            if(isset($_GET['id']))
            {
              $regid=$_GET['id'];


            $query="SELECT o.fullname,o.fhname,o.cnic,o.address,o.profession,v.make,v.model,v.color,v.chasis,v.engine,v.cc,v.year,t.type,t.ntn,t.amount,r.province,
r.city,r.zip,r.regid FROM ownerdetails o,vehicledetails v,taxdetails t,registration r WHERE o.ownerid=v.vehicleid AND v.vehicleid=t.taxid AND t.taxid=r.regid AND r.regid=$regid";
            $result=mysqli_query($link,$query);
            $resultCheck=mysqli_num_rows($result);
            if($resultCheck > 0){
              $row=mysqli_fetch_array($result);
              echo " <tr>
                <th>>> Personal Details</th>
              </tr>
              <tr>
                <th>Full Name: </th>
                <td>$row[0]</td>
              </tr>
              <tr>
                <th>Father/Husband Name: </th>
                <td>$row[1]</td>
              </tr>
              <tr>
                <th>Cnic Number: </th>
                <td>$row[2]</td>
              </tr>
              <tr>
                <th>Address: </th>
                <td>$row[3]</td>
              </tr>
              <tr>
                <th>Profession: </th>
                <td>$row[4]</td>
              </tr>
              <tr>
                <th>>> Vehicle Details</th>
              </tr>
              <tr>
                <th>Make/Manufacturer:</th>
                <td>$row[5]</td>
              </tr>
              <tr>
                <th>Model: </th>
                <td>$row[6]</td>
              </tr>
              <tr>
                <th>Color of vehicle:</th>
                <td>$row[7]</td>
              </tr>
              <tr>
                <th>Chasis Number: </th>
                <td>$row[8]</td>
              </tr>
              <tr>
                <th>Engine Number: </th>
                <td>$row[9]</td>
              </tr>
              <tr>
                <th>Engine Power: </th>
                <td>$row[10]</td>
              </tr>
              <tr>
                <th>Model Year: </th>
                <td>$row[11]</td>
              </tr>
              <tr>
                <th  >>>Tax Details</th>
              </tr>
              <tr>
                <th>Tax Type: </th>
                <td>$row[12]</td>
              </tr>
              <tr>
                <th>NTN Number: </th>
                <td>$row[13]</td>
              </tr>
              <tr>
                <th>Tax Amount:</th>
                <td>$row[14]</td>
              </tr>
              <tr>
                <th  >>> Registration Details</th>
              </tr>
              <tr>
                <th>Province: </th>
                <td>$row[15]</td>
              </tr>
              <tr>
                <th>City: </th>
                <td>$row[16]</td>
              </tr>
              <tr>
                <th>Zip Code: </th>
                <td>$row[18]</td>
              </tr>";
            }
          }
          $qu="UPDATE `registration` SET `status` = 'Approved' WHERE `registration`.`regid` = $row[18]";
          mysqli_query($link,$qu);

            ?>
        </table>
        <form class="userdetail_back" action="adminpanel.php">
          <button type="submit" name="userback">Back</button>

        </form>
        <form class="userdetail_update" action="userdetailupdate.php">
          <button type="submit" name="updati">Update Status</button>
        </form>



        </div>
			</div>
		 </div>

		<div class="clear"></div>

	</body>

</html>
