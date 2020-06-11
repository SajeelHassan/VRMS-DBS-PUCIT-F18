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
  <div id="finel_step_form">
    <?php
      if(isset($_GET['error']))
        {
            if ($_GET['error']=="emptyfields")
            {
             echo '<p class="formerror" >Fill in the fields!</p>';
           }
        }
        ?>
    <form action="includes/finalStep.inc.php" method='post'>
      <p> <label for="province">Province:</label>
        <select name="province">
          <option value="punjab"selected>Punjab</option>
          <option value="sindh">Sindh</option>
          <option value="kpk">Khyber pakhtunkhwa</option>
            <option value="balochistan">Balochistan</option>
              <option value="noProvince" >none</option>
        </select></p>
      <p><label for="city">City:</label>
        <?php
          if (isset($_GET['city']))
          {
            $cityy=$_GET['city'];
            echo '<input type="text" name="city" placeholder="City of Registration" value="'.$cityy.'"></p>';
          }
          else
          {
            echo '<input type="text" name="city" placeholder="City of Registration"></p>';
          }
        ?>
        <p> <label for="zipCode">Zip Code:</label>
          <?php
            if (isset($_GET['zipCode']))
            {
              $zipp=$_GET['zipCode'];
              echo '<input type="text" name="zipCode" placeholder="your Area Zip code..." value="'.$zipp.'"></p>';
            }
            else
            {
              echo '<input type="text" name="zipCode" placeholder="your Area Zip code..."></p>';
            }
          ?>


        <a href="taxDetails.php">Back</a>
        <button type='submit' name='finalize'>Submit&#8658</button>
    </form>


  </div>
</div>

</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
