<?php


//functions related to shopping cart
// remaming: delete cart item, updateItemQuantity

function addItemtoCart($productID, $ProductName, $ProductPrice, $productQuantity, $productImg)
{


$cart_array = array(
    $productID=>array(
        'p_id'=>$productID,

        'name'=>$ProductName,
        'price'=>$ProductPrice*$productQuantity,
        'quantity'=>$productQuantity,
        'img'=>$productImg


    )
    );
if(empty($_SESSION['shoppingcart']))

{
    $_SESSION['shoppingcart']=$cart_array;

}

    else if(isIteminThecart($productID,$_SESSION["shoppingcart"]))
    {
        $_SESSION["shoppingcart"][$productID]['quantity']=$productQuantity;

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
   
    
    echo '<form class="cartItems">
    <p><a href="#">'
    .$p_id['name'].
    '</a><span class="qData">'.$p_id['quantity'].'</span><span class="editButton"><button title="modify" type="button"><i class="fa-solid fa-pen-to-square"></i></button></span><span class="price">
    '.$p_id['price'].'</span></p>
    <input type="hidden" class="pr_id" id="producId" value="'.$p_id['p_id'].'">
    <input type="hidden" class="pr_name" name="productName" value="'.$p_id['name'].'">
    <input type="hidden"  class="pr_price" name="productPrice" value="'.$p_id['price'].'">
    <input type="hidden"  class="pr_price" name="productPrice" value="'.$p_id['quantity'].'">
    <input type="hidden"  class="pr_price" name="productPrice" value="'.$p_id['img'].'">
    </form>';
    

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

function isIteminThecart($p_id,$cart)
{
    // array_key_exists() ;
    return array_key_exists($p_id,$cart);

}