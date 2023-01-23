<?php

require_once('shoppingcart.fun.inc.php');
session_start();

if(isset($_POST['delete']))
{
    $productID=$_POST['producId'];
    deleteCartItem($productID);
    echo $productID;
    echo $_SESSION['shoppingcart'][$productID];
    header("location: ../checkoutpage.php");

}


?>