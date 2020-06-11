<?php

if(isset($_POST['adminlogin']))
{

  require "db.inc.php";

  $username=$_POST['username'];
  $pin=$_POST['pin'];

  if(empty($username)||empty($pin)){
    header("Location: ../adminlogin.php?error=emptyfields&username=".$username);
    exit();
  }
  else {
    $sql="SELECT * FROM admin WHERE adminuname=? or pin=?;";
    $stmt= mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../adminlogin.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"ss",$username,$pin);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_get_result($stmt);
      if ($row=mysqli_fetch_assoc($result)) {

        if ($pin!==$row['pin']) {
          header("Location: ../adminlogin.php?error=wrongPin&username=".$username);
          exit();
        }
        else if($pin==$row['pin']) {
          session_start();
          $_SESSION['adminid']=$row['adminid'];
          $_SESSION['adminname']=$row['adminuname'];

         header("Location: ../adminpanel.php");
          exit();

        }
        else
        {
          header("Location: ../adminlogin.php?error=wrongPin&username=".$username);
          exit();
        }
      }
      else{
        header("Location: ../adminlogin.php?error=NoAdminExists");
        exit();
      }
    }
  }


}
else {
  header("Location: ../adminlogin.php");
  exit();
}
