<?php

session_start();

unset($_SESSION['fname']);
    
session_destroy();

header("Location: ../HomePage.php");
exit;
?>