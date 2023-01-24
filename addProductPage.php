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
        <style>
            .open:hover{
                background-color: black;

            }
        </style>
        
        
</head>

<body>
<?php
 


require_once('header.php');
require_once('popUpAdmin.Component.php');

if (isset($_SESSION['role'])&&$_SESSION['role']=='admin')
{ 
   
 }
else{
  header("location: homepage.php");
}
  

?>
<h2 class="pageTitle">
add new product
</h2>

<form  method="POST" action="includes/addproduct.inc.php" enctype="multipart/form-data">
    <div class="addProduct" >
    <label>Product ID</label>
        <input type="number" max="10000"  name="id">
        <label>Product Name</label>
        <input type="text" maxlength="40"  name="name">
        <label>Product Category</label>
        <select name="category">
  <option value="11112">Mobiles & Accessories(Samsung)</option>
  <option value="11117">Laptops & Accessories(Apple)</option>
  <option value="11116">Mobiles(Sony)</option>
  <option value="11118">Mobiles(Huawei)</option>
</select>
        <label>Price</label>
        <input type="number" max="100000" name="price">
        <label>Stock</label>
        <input type="number" max="100000"  name="stock">
        <label>Image</label>
        <input class="imgInput" type="file"  name="Img">
        <label>Description</label>
        <textarea maxlength="250" name="description"></textarea>
        <button name="add" type="submit">Submit</button>


    </div>


</form>

    <!------------------Footer------------->
   <?php

require_once('footer.php');
?>




</body>