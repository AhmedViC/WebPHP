<?php


//functions related to shopping cart
// remaming: delete cart item, updateItemQuantity

function addItemtoCart($productID, $ProductName, $ProductPrice, $productQuantity, $productImg)
{


$cart_array = array(
    $productID=>array(

        'name'=>$ProductName,
        'price'=>$ProductPrice*$productQuantity,
        'quantity'=>$productQuantity


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
    echo  $p_id['name'].'<br>';
    echo  $p_id['price'].'<br>';
    echo  $p_id['quantity'].'<br>';

}
}

function displayCartItems()
{
    foreach( $_SESSION["shoppingcart"] as $p_id)
{
    
    echo '
    <p><a href="#">'
    .$p_id['name'].
    '</a> <span class="price">
    '.$p_id['price'].'</span></p>';
    

} 


}

function printTotalItems()
{
    echo '
    '.count($_SESSION["shoppingcart"]).'
    ';
}

function printTotalprice()
{
    $totalprice = 0;
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
        
       $totalprice+=$p_id["price"];
        
    
    } 
    echo 
    ''.$totalprice.' SAR';

}