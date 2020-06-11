<?php

if (isset($_POST['signup-submit'])) {

   require "db.inc.php";

   $email=$_POST['email'];
   $username=$_POST['username'];
   $pwd=$_POST['pwd'];
   $pwd_confirm=$_POST['pwd-confirm'];

    if (empty($email) ||empty($username) ||empty($pwd) ||empty($pwd_confirm)) {
      header("location: ../register.php?error=emptyfields&email=".$email."&username=".$username);
      exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
      header("Location: ../register.php?error=invalidusernameandmail");
      exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      header("location: ../register.php?error=invalidemail&username=".$username);
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
      header("location: ../register.php?error=invalidusername&email=".$email);
      exit();
    }
    else if ($pwd!==$pwd_confirm) {
      header("location: ../register.php?error=passwordCheck&email=".$email."&username=".$username);
      exit();
    }
    else {
      $sql="SELECT uid FROM users where username=? or email=?;";
      $stmt=mysqli_stmt_init($link);
      if (!mysqli_stmt_prepare($stmt,$sql))
      {
        header("location: ../register.php?error=sqlerror");
        exit();
      }
      else
      {
         mysqli_stmt_bind_param($stmt,"ss",$username,$email);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_store_result($stmt);
         $resultCheck=mysqli_stmt_num_rows($stmt);
         if ($resultCheck) {
           header("location: ../register.php?error=usernameORemailAlreadytaken");
           exit();
         }
         else {
           $sql="INSERT INTO users (email,username,password) VALUES (?,?,?)";
           $stmt=mysqli_stmt_init($link);
           if (!mysqli_stmt_prepare($stmt,$sql))
             {
               header("location: ../register.php?error=sqlerror");
               exit();
             }
             else {
               $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmt,"sss",$email,$username,$hashedPwd);
               mysqli_stmt_execute($stmt);
               header("location: ../register.php?signup=success");
               exit();

             }
         }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
else {
  header("location: ../login.php?error=sqlerror");
  exit();
}
