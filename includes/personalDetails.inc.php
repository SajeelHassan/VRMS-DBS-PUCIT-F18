<?php
  session_start();
if (isset($_POST['p_saveAndNext'])) {

   require "db.inc.php";

   $fullname=$_POST['fullName'];
   $fhname=$_POST['fhName'];
   $cnic=$_POST['cnic'];
   $address=$_POST['address'];
   $profession=$_POST['profession'];

    if (empty($fullname) ||empty($fhname) ||empty($cnic) ||empty($address)||empty($profession))
     {
      header("location: ../newReg.php?error=emptyfields&fullName=".$fullname."&fhName=".$fhname."&nic=".$cnic."&address=".$address."&profession=".$profession);
      exit();

     }
    // else if (!preg_match('/^[a-z ]+$/i',$fullname)) {
    //   header("location: ../newReg.php?error=invalidFullName&fhName=".$fhname."&cnic=".$cnic."&address=".$address."&profession=".$profession);
    //   exit();
    // }
    // else if (!preg_match('/^[a-z ]+$/i',$fhname)) {
    //   header("location: ../newReg.php?error=invalidFhName&fullName=".$fullname."&cnic=".$cnic."&address=".$address."&profession=".$profession);
    //   exit();
    // }
    // else if (!preg_match('/^[a-z ]+$/i',$address)) {
    //   header("location: ../newReg.php?error=invalidaddress&fullName=".$fullname."&fhName=".$fhname."&cnic=".$cnic."&profession=".$profession);
    //   exit();
    // }
    // else if (!preg_match("/^[a-zA-Z/'/-\040]+$/",$profession)) {
    //   header("location: ../newReg.php?error=invalidfhname&fullName=".$fullname."&fhName=".$fhname."&cnic=".$cnic."&address=".$address);
    //   exit();
    // }

      // {
      // $sql="SELECT ownerid FROM ownerdetails WHERE cnic = '".$cnic."'";
      //
      //       $result = mysqli_query($link, $query);
      //
      //     }
      //     else  if (mysqli_num_rows($result) > 0)
      //     {
      //         header("location: ../newReg.php?error=cnicAlreadyExists&fullName=".$fullname."&fhName=".$fhname."&cnic=".$cnic."&address=".$address);
      //         exit();
      //     }
      //      else
            else {
             $query = "INSERT INTO ownerdetails (fullname,fhname,cnic,address,profession,uid) VALUES ('".$fullname."','".$fhname."','".$cnic."','".$address."','".$profession."','" . $_SESSION['userid'] . "')";
              if (mysqli_query($link, $query))
              {
                $querySession="SELECT * FROM ownerdetails WHERE uid='" . $_SESSION['userid'] . "'";
                $result=mysqli_query($link,$querySession);
                $resultCheck=mysqli_num_rows($result);
                if($resultCheck>0)
                $_SESSION['ownerid']=$arr['ownerid'];
                header("location: ../vehicleDetails.php");
                exit();
              } else {
                header("location: ../newReg.php?error=insertingerror");
                exit();

              }

            }
          }

else {
  header("location: ../login.php?error=sqlerror");
  exit();
}
