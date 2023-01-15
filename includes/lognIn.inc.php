<?php

if(isset($_POST["submit"]))
{
   


    $email = $_POST["email"];
    $passw = $_POST["pass"];
   

    require_once('dbConn.inc.php');
    require_once('functions.inc.php');
    //LogIn will return 1 if pass & username are correct
    // will return 2 if email correct but poassword is not correct
    //will return 3 if email and passowrd are not correct
    
    $state = logIn($conn, $email , $passw);
    if($state==1)
    {
        header("location: ../HomePage.php?m=loginInSuccessfuly");
    }
    else if($state==2)
    {
        header("location: ../Signuppage.php?error=falsePassword"); 
       }
       else if($state==3)
       {
           header("location: ../Signuppage.php?error=incorrectEmail"); 
          }


  
   




}

?>