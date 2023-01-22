
<!DOCTYPE html>
<html lang="en">
    <title> WOW Store </title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/42f7232704.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap" rel="stylesheet">

    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<?php

require_once('header.php')
?>
<div class="login">


    
    <div class="data">
      
       
    <form method="POST" action="includes/lognIn.inc.php">
        <div>
            <h1>Sign In</h1>
        </div>
       <div class="field">
        
        <input type="email" name="email" id="email" required>
        <span></span>
        <label>Email</label>
    </div>
        <div class="field">
            <input name="pass" type="password" id="pass" required>
            <span></span>
            <label for="pass">Password</label>
           

        </div>
        <div class="loginbutton">
            <button type="submit" name="submit">Login</button>
        </div>

        
            <h4>
                You dont have an account? <a href="SignupPage.php">Sign  UP</a>
            </h4>
      

       
        
    </form>
    
</div>
</div>
</div>


 <!------------------Footer------------->
 <?php

require_once('footer.php');
?>




 
    
</body>