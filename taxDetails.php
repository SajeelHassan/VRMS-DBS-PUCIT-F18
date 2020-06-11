
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
  <div id="tax_Details_form">
    <?php
      if(isset($_GET['error']))
        {
            if ($_GET['error']=="emptyfields")
            {
             echo '<p class="formerror" >Fill in the fields!</p>';
           }
        }
        ?>
    <form action="includes/taxDetails.inc.php" method='post'>

      <p>  <label for="taxType">Tax Type:</label>
        <select name="taxType">
          <option value="filer">Filer</option>
          <option value="nonFiler" selected>Non Filer</option>
          <option value="exempted">Exempted</option>
        </select></p>
      <p>  <label for="ntnNum">NTN Number:</label>
        <?php
          if (isset($_GET['ntnNum'])) {
            $ntnn=$_GET['ntnNum'];
            echo '<input type="text" name="ntnNum" placeholder="NTN Number" value="'.$ntnn.'"></p>';
          }
          else
          {
            echo '<input type="text" name="ntnNum" placeholder="NTN Number"></p>';
          }
          ?>

        <p><label for="taxAmount">Tax Amount:</label>
          <?php
            if (isset($_GET['taxAmount']))
            {
              $taxamountt=$_GET['taxAmount'];
              echo '<input type="text" name="taxAmount" placeholder="Tax Amount" value="'.$taxamountt.'"></p>';
            }
            else
            {
              echo '<input type="text" name="taxAmount" placeholder="Tax Amount"></p>';
            }
          ?>
        <a href="vehicleDetails.php">Back</a>
        <button type='submit' name='t_saveAndNext'>Save & Next</button>
    </form>


  </div>
</div>

</div>
<div class="clear"></div>
<?php require 'footer.php'; ?>
</body>
</html>
