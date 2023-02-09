<?php


//functions related to shopping cart
// remaming: delete cart item, updateItemQuantity

function addItemtoCart($productID, $ProductName, $ProductPrice, $productQuantity, $productImg,$stock)
{


$cart_array = array(
    $productID=>array(
        'p_id'=>$productID,

        'name'=>$ProductName,
        'price'=>$ProductPrice,
        'quantity'=>$productQuantity,
        'tPrice'=>$productQuantity*$ProductPrice,
        'img'=>$productImg,
        'stock'=>$stock


    )
    );
 
if(empty($_SESSION['shoppingcart']))

{
    $_SESSION['shoppingcart']=$cart_array;


}


    else if(isIteminThecart($productID,$_SESSION["shoppingcart"]))
    {
        $_SESSION["shoppingcart"][$productID]['quantity']=$productQuantity;
        $_SESSION["shoppingcart"][$productID]['tPrice']=$productQuantity*$ProductPrice;

    }

    else{
      
    $_SESSION["shoppingcart"][$productID]=array(
        'p_id'=>$productID,

        'name'=>$ProductName,
        'price'=>$ProductPrice,
        'tPrice'=>$productQuantity*$ProductPrice,
        'quantity'=>$productQuantity,
        'img'=>$productImg,
        'stock'=>$stock


    );
        ;
}


}

function displayCartItems()
{
   
    if(isCartExist())
    {
    foreach( $_SESSION["shoppingcart"] as $p_id)
{
    
   
    
    echo '<form action="includes/deleteCartItem.inc.php" method="post"><div class="cartItems">
    <p><a href="productDetails.php?id='.$p_id['p_id'].'">'
    .$p_id['name'].
    '</a><span class="qData">'.$p_id['quantity'].'</span><span class="editButton"><button title="modify" type="button">
    <i class="fa-solid fa-pen-to-square"></i></button>
    </span><span class="editButton"><button name="delete" type="submit"><i class="fa-solid fa-xmark"></i></button></span><span class="price">
    '.$p_id['tPrice'].'</span></p>
    <input type="hidden" class="pr_id"  name="producId" id="producId" value="'.$p_id['p_id'].'">
    <input type="hidden" class="pr_name" value="'.$p_id['name'].'">
    <input type="hidden"  class="pr_price"  value="'.$p_id['price'].'">
    <input type="hidden"  class="pr_stock"  value="'.$p_id['stock'].'">
    <input type="hidden"  class="pr_img" name="productimg" value="'.$p_id['img'].'">
    <input type="hidden"  class="pr_quantity" value="'.$p_id['quantity'].'">
    <input type="hidden"  class="pr_stock"  value="'.$p_id['tPrice'].'">
    
    
    </div>
    </form>
   
   
 
    ';
    

}
 
    }


}

function printTotalItems()
{
    if(isCartExist())
    {
    $totalquantity = 0;
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
      
        
       $totalquantity+=$p_id["quantity"];
        
    
    }
     return $totalquantity; 
}
    else{
        echo 
        '0 SAR';
    }


}

function deleteCartItem($productID)
{

    unset($_SESSION['shoppingcart'][$productID]);
   

}

function printTotalprice()
{
    if(isCartExist())
    {
    $totalprice = 0;
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
        
       $totalprice+=$p_id["tPrice"];
        
    
    } 
    echo 
    ''.$totalprice.' SAR';
}
else{
    echo 
    '0 SAR';
}

}

function getTotalPrice()
{
    if(isCartExist())
    {
    $totalprice = 0;
    foreach( $_SESSION["shoppingcart"] as $p_id)
    {
        
       $totalprice+=$p_id["tPrice"];
        
    
    } 
    return $totalprice;
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