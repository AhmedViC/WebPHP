<?php

if(isset($_POST["submit"]))
{
    echo "pass".$_POST["pass"].'\n';
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $birthDate = $_POST["date"];
    $phoneNum = $_POST["phone"];
    $city = $_POST["city"];
    $district = $_POST["district"];

    require_once('dbConn.inc.php');
    require_once('functions.inc.php');
    if(checkEmail($conn,$email)==true)
    {

        $insert = insertUser($conn,$fname,$lname,$email,$password,$birthDate,$phoneNum,$district,$city);
        if($insert)
        {
         header("location: ../Signuppage.php?error=none");
        }
    }
    else{
        header("location: ../Signuppage.php?error=usedEmail");
    }
   

  
   




}

?>