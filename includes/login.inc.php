<?php
if(isset($_POST['login-submit']))
{

  require "db.inc.php";

  $uNameMail=$_POST['nameormail'];
  $pwd=$_POST['pwd'];

  if(empty($uNameMail)||empty($pwd)){
    header("Location: ../login.php?error=emptyfields&nameormail=".$uNameMail);
    exit();
  }
  else {
    $sql="SELECT * FROM users WHERE username=? or email=?;";
    $stmt= mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"ss",$uNameMail,$uNameMail);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_get_result($stmt);
      if ($row=mysqli_fetch_assoc($result)) {
        $pwdCheck=password_verify($pwd, $row['password']);
        if ($pwdCheck==false) {
          header("Location: ../login.php?error=wrongPwd&nameormail=".$uNameMail);
          exit();
        }
        else if($pwdCheck==true) {
          session_start();
          $_SESSION['userid']=$row['uid'];
          $_SESSION['username']=$row['username'];

         header("Location: ../login.php?login=success");
          exit();

        }else{
          header("Location: ../login.php?error=wrongPwd&nameormail=".$uNameMail);
          exit();
        }
      }
      else{
        header("Location: ../login.php?error=NoUserExists");
        exit();
      }
    }
  }


}
else {
  header("Location: ../index.php");
  exit();
}
