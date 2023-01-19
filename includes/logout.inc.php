<?php

session_start();

unset($_SESSION['fname']);
unset( $_SESSION["shoppingcart"]);
    
session_destroy();

header("Location: ../HomePage.php");
exit;
?>