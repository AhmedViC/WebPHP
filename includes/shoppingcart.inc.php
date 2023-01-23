<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
require_once('shoppingcart.fun.inc.php');
//requiring a file that contains shopping cart related functions
session_start();

if(isset($_SESSION['fname']))
{
    
    

   
    $p_id =  $_POST['producId'];
    $p_name =  $_POST['productName'];
    $p_price = $_POST['productPrice'];
    $quantity = $_POST['Quantity'];
    echo $_POST['Quantity'];
    $img = $_POST['Pimg'];
    $stock = $_POST['stock'];
   
     addItemtoCart($p_id,$p_name,$p_price,$quantity,$img,$stock);
    header("location: ../checkoutpage.php?message=addedSuccessfully");
  
  
  

   
}
else
{
    header("location: ../LoginPage.php?error=logInNeeded");

}

?>