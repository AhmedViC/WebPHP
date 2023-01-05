
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
    <link rel="stylesheet" href="productStyle.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
    rel="stylesheet">
</head>
<body>



<?php
include_once('header.php');
include_once('includes/functions.inc.php');
include_once('includes/dbConn.inc.php');
    if(isset($_GET['id']))
    {
        productDetailsQuery($conn,$_GET['id']);
       

    }

?>



 <!------------------Footer------------->
 <div class="footer">
<div class="contaner">
    <div class="row">
      
        <div class="footer-col">
            <h4> Company </h4>
            <ul> 

              <li> <a href="# ">About us</a></li>
              <li> <a href="# ">Our service</a></li>
              <li> <a href="# ">Privacy policy</a></li>
              <li> <a href="# ">Affilate program</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4> Get help </h4>
            <ul> 

              <li> <a href="# ">FAQ</a></li>
              <li> <a href="# ">Shipping</a></li>
              <li> <a href="# ">Returns</a></li>
              <li> <a href="# ">Order Status</a></li>
              <li> <a href="# ">Payment option</a></li>
            </ul>
        </div>

        
        <div class="footer-col">
            <h4>  online Shop </h4>
            <ul> 

              <li> <a href="# ">Watch</a></li>
              <li> <a href="# ">bag</a></li>
              <li> <a href="# "></a></li>
              <li> <a href="# "></a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4> Follow us</h4>
            <div class="social-links">
               <a href="# "><i class="fab fa-facebook-f"></i></a>
               <a href="# "><i class="fab fa-twitter"></i></a>
               <a href="# "><i class="fab fa-instagram"></i></a>
               
            </div>
        </div>
            
        </div>
    </div>
</div>




 
    
</body>