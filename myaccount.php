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
<!--  HOme Page  -->
  <div id="page-size">
  <?php require 'accountOptions.php'; ?>
  <div class="clear"></div>
  <div id="account_main">
        <h2>Dashboard</h2>
        <table id="user_status" >
              <tr>
                <th>Application id</th>
                <th>Vehicle Details</th>
                <th>Status</th>
                <th>Dated</th>

              </tr>
              <?php
                $query="SELECT  r.regid,v.make,v.model,r.status,r.dated
                FROM registration r,vehicledetails v WHERE r.regid=v.vehicleid AND r.uid='".$_SESSION['userid']."'";
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

                    </tr>";
                  }
                }

               ?>

        </table>
  </div>

</div>

<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
