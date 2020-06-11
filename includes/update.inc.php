<?php
    session_start();
if (isset($_POST['updateprofile'])) {
   require "db.inc.php";
   $email=$_POST['email'];
   $username=$_POST['username'];
   $pwd=$_POST['pwd'];
   $pwdconfirm=$_POST['pwd_confirm'];
   if (empty($email) AND empty($username) AND empty($pwd) AND empty($pwdconfirm)) {
     header("location: ../accountsettings.php");
     exit();
   }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
       header("location: ../accountsettings.php?error=invalidusername");
       exit();
     }
     else if ($pwd!=='' AND $pwd!==$pwdconfirm) {
       header("location: ../accountsettings.php?error=passwordCheck");
       exit();
     }
     // else {
     //   $sql="SELECT uid FROM users where username=? or email=?;";
     //   $stmt=mysqli_stmt_init($link);
     //   if (!mysqli_stmt_prepare($stmt,$sql))
     //   {
     //     header("location: ../accountsettings.php?error=sqlerror");
     //     exit();
     //   }
     //   else
     //   {
     //      mysqli_stmt_bind_param($stmt,"ss",$username,$email);
     //      mysqli_stmt_execute($stmt);
     //      mysqli_stmt_store_result($stmt);
     //      $resultCheck=mysqli_stmt_num_rows($stmt);
     //      if ($resultCheck) {
     //        header("location: ../accountsettings.php?error=usernameORemailAlreadytaken");
     //        exit();
     //      }
           else if ($email!=='')
           {
             $sql="SELECT * FROM users where uid!='" . $_SESSION['userid'] . "' AND email='" . $email. "' ";
             $result=mysqli_query($link,$sql);
             $checkQuery = mysqli_num_rows($result);
             if($result>0){
               header("location: ../accountsettings.php?error=emailAlreadyused");
               exit();
             }
             else{

             $querymail="UPDATE users set email='" . $email. "' WHERE uid='" . $_SESSION['userid'] . "'";
             $resultmail=mysqli_query($link,$querymail);
             header("location: ../accountsettings.php?success=updated");
             exit();
           }
             }
             else if ($username!=='')
             {

               $sql="SELECT * FROM users where uid!='" . $_SESSION['userid'] . "' AND username='" . $username. "' ";
               $result=mysqli_query($link,$sql);
               $checkQuery = mysqli_num_rows($result);
               if($result>0){
                 header("location: ../accountsettings.php?error=usernameAlreadytaken");
                 exit();
               }
               else{
               $querymail="UPDATE users set username='" . $username . "' WHERE uid='" . $_SESSION['userid'] . "'";
               $resultmail=mysqli_query($link,$querymail);
               header("location: ../accountsettings.php?success=updated");
               exit();
             }
               }
               else if ($pwd!=='')
               {
                 $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
                 $querymail="UPDATE users set password='" . $hashedPwd. "' WHERE uid='" . $_SESSION['userid'] . "'";
                 $resultmail=mysqli_query($link,$querymail);
                 header("location: ../accountsettings.php?success=updated);");
                 exit();
                 }

  }
//}
//}
 else {
   header("location: ../login.php?error=sqlerror");
   exit();
 }
