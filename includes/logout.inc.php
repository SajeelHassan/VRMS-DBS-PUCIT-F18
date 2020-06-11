<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['userid']="";
    header("Location: ../index.php");
