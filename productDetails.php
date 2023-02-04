
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
    <script src="Javascript/quantitypopUpdetails.js" defer></script>
     <script src="Javascript/helpWindow.js" defer></script>
</head>
<body>



<?php
include_once('header.php');
include_once('includes/functions.inc.php');
include_once('includes/dbConn.inc.php');
require_once('popUp.Component.php');
    if(isset($_GET['id']))
    {
        productDetailsQuery($conn,$_GET['id']);
       

    }

?>

<div class="helpWindow">
<i id="Helpicons" class="fa-regular fa-circle-question"></i>
</div>


 <div class="popUpHelp" id="popUpHelp" style="display:none">
    <div class="windowHeader"><h2>Help</h2></div>
    <div>
        <input type="text" placeholder="how can we help You?">
        
    </div>
    <div>
        <button id="sendButton">send</button>
        
    </div>


 </div>


 <!------------------Footer------------->
 <?php

require_once('footer.php');
?>





 
    
</body>