<?php

require_once('shoppingcart.fun.inc.php');
//requiring a file that contains shopping cart related functions
session_start();

if(isset($_SESSION['fname']))
{
    $p_id =  $_POST['producId'];
    $p_name =  $_POST['productName'];
    $p_price = $_POST['productPrice'];
    $quantity = $_POST['Quantity'];
    $img = $_POST['Pimg'];
    addItemtoCart($p_id,$p_name,$p_price,$quantity,$img);
   
}
else
{
    header("location: ../homepage.php?error=logInNeeded");

}

?>