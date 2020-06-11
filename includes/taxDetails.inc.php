<?php
  session_start();
if (isset($_POST['t_saveAndNext'])) {

   require "db.inc.php";

  if(isset($_POST['taxType'])){
    $type = $_POST['taxType'];
    switch ($type) {
        case 'nonFiler':
            $type="nonFiler";
            break;
        case 'filer':
            $type="filer";
            break;
        default:
            $type="exempted";
            break;
          }
        }
   $ntn=$_POST['ntnNum'];
   $amount=$_POST['taxAmount'];
    if (empty($amount))
     {
      header("location: ../taxDetails.php?error=emptyfields&ntnNum=".$ntn."&taxAmount=".$amount);
      exit();
     }
    else
    {
             $query = "INSERT INTO taxdetails (uid,type,ntn,amount) VALUES ('".$_SESSION['userid']."','".$type."','".$ntn."','".$amount."')";
              if (mysqli_query($link, $query))
              {
                header("location: ../finalStep.php");
                exit();
              } else {
                header("location: ../taxDetails.php?error=insertingerror");
                exit();

              }

            }
          }

else {
  header("location: ../login.php?error=sqlerror");
  exit();
}
