<!DOCTYPE html>
<html lang="en">
<title> WOW Store </title>
<?php
require_once('includes/dbConn.inc.php');
require_once('includes/functions.inc.php');

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/42f7232704.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="styleProduct.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
        
        <script src="Javascript/adminpopUp.js" defer></script>
        <script src="Javascript/updateMessage.js" defer></script>

        <script src="Javascript/searchBarFilter.js" defer></script>
        
        
</head>

<body>
<?php
 

   


require_once('header.php');

if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("location: homepage.php?error=unauthorizedAccess");
}


require_once('popUpAdmin.Component.php');

?>
<div class="searchBar">
<input type="search"  id="searchBar" autofocus>
  
</div>



    <!--products GRID
    each item ends with 3 divs-->
    <div class="flexGrid">
        <div class="productsGridContainer">
         <?php
    retriveProducts($conn);
         ?>
        </div>
    </div>
    <!------------------Footer------------->
   <?php

require_once('footer.php');
?>




</body>