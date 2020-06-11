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
  <div id="page-size">
  <div id="accountOptions">
    <p>Account Options</p><br><br>
    <a href="newReg.php">Add New Registration</a><br><br>
    <a href="myVehicles.php">My Registered Vehicles</a><br><br>
    <a href="pendingReg.php">My Pending Registrations</a><br><br>
    <a href="accountsettings.php">Account Settings</a>
    <form class="logout-button" action="includes/logout.inc.php" method="post">

      <button type="submit" name="logout">Logout</button>
    </form>

  </div>
  <div class="clear"></div>
  <div id="account_main">
    <?php
    $query="SELECT regid,uid,status,dated FROM registration Where uid='".$_SESSION['userid']."'";
    $doQuery=mysqli_query($link,$query);
    $row=mysqli_fetch_array($doQuery);
    $query="SELECT * FROM vehicledetails WHERE uid='".$_SESSION['userid']."'";
    $doQuery=mysqli_query($link,$query);
    $vehicleRow=mysqli_fetch_array($doQuery);
     ?>
        <h4>Registered Vehicles</h4>
        <table id="user_status" class="blue" >
              <tr>

                <th>Vehicle Make and Model</th>
                <th>Dated</th>
                <th>Details</th>
              </tr>
              <?php if ($row[2]=='Approved' AND$row[2]!=='pending' )
              {

                  echo '<tr>
                  <td>'.$vehicleRow[2].' '. $vehicleRow[3].' </td>
                  <td>'.$row[3].'</td>
                  <td>Click Here</td>
                  </tr>
                ';
              }
      else
          {
          echo '</table><h2 class="NO_Registration">No Registered vehicle Found!</h2>';
          }
          echo'</table>';
        ?>


  </div>


</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>

</body>
</html>
