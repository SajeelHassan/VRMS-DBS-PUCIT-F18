<?php
require "db.inc.php";
$query = "INSERT INTO `registration` VALUES  (8,sdasd,dasd,77,1,1,1,1,1,1)";
$result=mysqli_query($link, $query);
 if ($result)
 {
   echo 'done';
 }
 else {
   echo 'problme';
 }
 ?>
