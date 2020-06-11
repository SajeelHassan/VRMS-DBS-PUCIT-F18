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
<!--  HOme Page  -->
  <div id="page-size">
  <div id="accountOptions">
    <p>Account Options</p><br><br>
    <a href="newReg.php">Add New Registration</a><br><br>
    
    <a href="pendingReg.php">My Pending Registrations</a><br><br>
    <a href="accSetting.php">Account Settings</a>
    <form action="includes/logout.inc.php" method="post">
      <button type="submit" name="logout">Logout</button>
    </form>

  </div>
  <div class="clear"></div>
  <div id="account_main">
    <?php require 'registrationformbuttons.php'; ?>

  <div id="vehicle_Details_form">
    <?php
      if(isset($_GET['error']))
        {
            if ($_GET['error']=="emptyfields")
            {
             echo '<p class="formerror" >Fill in the fields!</p>';
           }
        }
        ?>
    <form action="includes/vehicleDetails.inc.php" method='post'>
      <?php
        if (isset($_GET['make'])) {
          $makee=$_GET['make'];
          echo '<p> <input type="text" name="make" placeholder="Make/Manufacturer i.e toyota honda etc" value="'.$makee.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="make" placeholder="Make/Manufacturer i.e toyota honda etc"></p>';
        }
        if (isset($_GET['model'])) {
          $modell=$_GET['model'];
          echo '<p> <input type="text" name="model" placeholder="Model Name i.e corolla civic etc" value="'.$modell.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="model" placeholder="Model Name i.e corolla civic etc"></p>';
        }
        if (isset($_GET['color'])) {
          $colorr=$_GET['color'];
          echo '<p> <input type="text" name="color" placeholder="Color of Vehicle" value="'.$colorr.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="color" placeholder="Color of Vehicle"></p>';
        }
        if (isset($_GET['chasisNum'])) {
          $chasiss=$_GET['chasisNum'];
          echo '<p> <input type="text" name="chasisNum" placeholder="Chasis Number" value="'.$chasiss.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="chasisNum" placeholder="Chasis Number"></p>';
        }
        if (isset($_GET['engineNum'])) {
          $enginee=$_GET['engineNum'];
          echo '  <p><input type="text" name="engineNum" placeholder="Engine Number" value="'.$enginee.'"></p>';
        }
        else
        {
          echo '  <p><input type="text" name="engineNum" placeholder="Engine Number"></p>';
        }
        if (isset($_GET['horsepower'])) {
          $makee=$_GET['horsepower'];
          echo '<p> <input type="text" name="horsepower" placeholder="Engine Power CC/HP i.e 1300" value="'.$makee.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="horsepower" placeholder="Engine Power CC/HP i.e 1300"></p>';
        }
        if (isset($_GET['modelYear'])) {
          $makee=$_GET['modelYear'];
          echo '<p><input type="text" name="modelYear" placeholder="Model Year" value="'.$makee.'"></p>';
        }
        else
        {
          echo '<p><input type="text" name="modelYear" placeholder="Model Year"></p>';
        }
        ?>
        <a href="newReg.php">Back</a>
        <button type='submit' name='v_saveAndNext'>Save & Next</button>
    </form>


  </div>
</div>

</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
