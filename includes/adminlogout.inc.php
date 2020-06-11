<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['adminid']="";
    header("Location: ../adminlogin.php");
