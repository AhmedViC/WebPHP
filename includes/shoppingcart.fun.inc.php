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
    if(isCartExist())
    {
    foreach( $_SESSION["shoppingcart"] as $p_id)
{
    
    echo '<form>
    <p><a href="#">'
    .$p_id['name'].
    '</a> <span class="price">
    '.$p_id['price'].'</span></p></form>';
    

}
 
    }


}

function printTotalItems()
{
    if(isCartExist())
    {
    
    echo '
    '.count($_SESSION["shoppingcart"]).'
    ';
    }
    else echo '0';

}

function printTotalprice()
{
    if(isCartExist())
    {
    $totalprice = 0;
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
        
       $totalprice+=$p_id["price"];
        
    
    } 
    echo 
    ''.$totalprice.' SAR';
}
else{
    echo 
    '0 SAR';
}

}
function isCartExist()
{
    if(!empty( $_SESSION["shoppingcart"]))
    {
        return 1;
    }
    else {
        return 0 ;
    }
}

function isIteminThecart($index,$array)
{
    // array_key_exists() ;
}