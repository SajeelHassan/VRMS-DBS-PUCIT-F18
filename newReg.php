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
    <a href="accountsettings.php">Account Settings</a>
    <form action="includes/logout.inc.php" method="post">
      <button type="submit" name="logout">Logout</button>
    </form>

  </div>
  <div class="clear"></div>
  <div id="account_main">
    <?php require 'registrationformbuttons.php'; ?>

  <div id="personal_details_form">
    <?php
      if(isset($_GET['error']))
        {
            if ($_GET['error']=="emptyfields")
            {
             echo '<p class="formerror" >Fill in the fields!</p>';
           }
        }
        ?>
    <form action="includes/personalDetails.inc.php" method='post'>
      <?php
        if (isset($_GET['fullName'])) {
          $fullnamee=$_GET['fullName'];
          echo '<p> <input type="text" name="fullName" placeholder="Your Full Name" value="'.$fullnamee.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="fullName" placeholder="Your Full Name"></p>';
        }
        if (isset($_GET['fhName'])) {
          $fhnamee=$_GET['fhName'];
          echo '<p> <input type="text" name="fhName" placeholder="Your Father or Husband Name" value="'.$fhnamee.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="fhName" placeholder="Your Father or Husband Name"></p>';
        }
        if (isset($_GET['nic'])) {
          $cnicc=$_GET['nic'];
          echo '<p> <input type="text" name="cnic" placeholder="Your CNIC without hyphen i.e 3320244455555" value="'.$cnicc.'"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="cnic" placeholder="Your CNIC without hyphen i.e 3320244455555"></p>';
        }if (isset($_GET['address'])) {
          $addresss=$_GET['address'];
          echo '<p><input type="text" name="address" placeholder="Your Address" value="'.$addresss.'"></p>';
        }
        else
        {
          echo '<p><input type="text" name="address" placeholder="Your Address"></p>';
        }if (isset($_GET['profession'])) {
          $professionn=$_GET['profession'];
          echo '<p> <input type="text" name="profession" placeholder="Your Profession i.e Businessman...etc"></p>';
        }
        else
        {
          echo '<p> <input type="text" name="profession" placeholder="Your Profession i.e Businessman...etc"></p>';
        }

       ?>
        <button type='submit' name='p_saveAndNext'>Save & Next</button>
    </form>


  </div>
</div>

</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>
