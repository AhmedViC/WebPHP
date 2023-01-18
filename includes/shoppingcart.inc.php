<?php

require_once('dbConn.inc.php');
session_start();
echo $_SESSION['fname'];

if(isset($_SESSION['fname']))
{
    $p_id =  $_POST['producId'];
    $p_name =  $_POST['productName'];
    $p_price = $_POST['productPrice'];
    $quantity = $_POST['quantity'];
    $cart_array = array(
        $p_id=>array(

            'name'=>$p_name,
            'price'=>$p_name,
            'quantity'=>$quantity


        )
        );
    if(empty($_SESSION['shoppingcart']))
    {
        $_SESSION['shoppingcart']=$cart_array;


      


           


    }
    else{
        $_SESSION["shoppingcart"] = array_merge(
            $_SESSION["shoppingcart"],
            $cart_array
            );
    }
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
        echo  $p_id['name'];

    }
}
else
{
    header("location: ../homepage.php?error=logInNeeded");

}

?>