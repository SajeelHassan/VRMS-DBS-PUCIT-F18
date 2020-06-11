<?php
    session_start();
if (isset($_POST['finalize'])) {

   require "db.inc.php";

  if(isset($_POST['province'])){
    $type = $_POST['province'];
    switch ($type) {
        case 'punjab':
            $type="Punjab";
            break;
        case 'sindh':
            $type="Sindh";
            break;
        case 'kpk':
            $type="Khyber pakhtunkhwa";
            break;
        case 'balochistan':
            $type="Balochistan";
            break;
        default:
            $type="None";
            break;
          }
        }
   $city=$_POST['city'];
   $zip=$_POST['zipCode'];
    if (empty($city) ||empty($zip))
     {
      header("location: ../finalStep.php?error=emptyfields&city=".$city."&zipCode=".$zip);
      exit();
     }
    else
    {
             $query = "INSERT INTO registration (uid,province,city,zip) VALUES ('".$_SESSION['userid']."','".$type."','".$city."','".$zip."')";
              if (mysqli_query($link, $query))
              {
                header("location: ../myaccount.php");
                exit();
              } else {
                header("location: ../finalStep.php?error=insertingerror");
                exit();

              }

            }
          }

else {
  header("location: ../login.php?error=sqlerror");
  exit();
}
