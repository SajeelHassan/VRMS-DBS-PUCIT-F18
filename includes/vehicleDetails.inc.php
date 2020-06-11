<?php
  session_start();
if (isset($_POST['v_saveAndNext'])) {

   require "db.inc.php";

   $make=$_POST['make'];
   $model=$_POST['model'];
   $color=$_POST['color'];
   $chasis=$_POST['chasisNum'];
   $engine=$_POST['engineNum'];
   $power=$_POST['horsepower'];
   $year=$_POST['modelYear'];
   $s_userid=$_SESSION['userid'];

    if (empty($make) ||empty($model) ||empty($color) ||empty($chasis)||empty($engine)||empty($power)||empty($year))
     {
      header("location: ../vehicleDetails.php?error=emptyfields&make=".$make."&model=".$model."&color=".$color."&chasisNum=".$chasis."&engineNum=".$engine."&horsepower=".$power."&modelYear=".$year);
      exit();
     }
    else       {
             $queryy = "INSERT INTO vehicleDetails (uid,make,model,color,chasis,engine,cc,year) VALUES ('".$_SESSION['userid']."','".$make."','".$model."','".$color."','".$chasis."','".$engine."','".$power."','".$year."')";
              if (mysqli_query($link, $queryy))
              {

                header("location: ../taxDetails.php");
                exit();
              } else {
                header("location: ../vehicleDetails.php?error=insertingerror");
                exit();

              }

            }
          }

else {
  header("location: ../login.php?error=sqlerror");
  exit();
}
