<?php
    session_start();
if (isset($_POST['updating'])) {
   require "db.inc.php";
  if(isset($_POST['userStatus'])){
    $type = $_POST['userStatus'];
    switch ($type) {
        case 'approved':
            $type="Approved";
            break;
        case 'rejected':
            $type="Rejected";
            break;
        default:
            $type="Pending";
            break;
          }
        }



     header("location: ../adminpanel.php?success ");
     exit();


}
else {
  header("location: ../userdetailupdate.php?error");
  exit();
}
