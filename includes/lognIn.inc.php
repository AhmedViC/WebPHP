<?php

if(isset($_POST["submit"]))
{
   

    $email = $_POST["email"];
    $passw = $_POST["pass"];
   

    require_once('dbConn.inc.php');
    require_once('functions.inc.php');
    
    logIn($conn, $email , $passw);

  
   




}

?>