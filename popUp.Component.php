<form action="includes/shoppingcart.inc.php" method="post">
<div style="display: none;" class="popUp" id="popUp">
<div class="popUpHeader">
   <H1 id="p_name"> Iphone x</H1>
</div>
<div class="popUpBody">
  <img class="imgpop" id="imgP" src="images/FlipZ.jpg">

  <h4 id="price"></h4>
  <label for="quantity">Quantity</label>
  <input class="popInput" type="number" id="inputQ" name="quantity" value="1" required>
  <button type="submit" id="cartB">
  <i class="fa-solid fa-cart-shopping"></i>
  </button>
 <span class="stockError" hidden id="err"> That excceeds the available stock!</span>
  <Button  type="button" class="open" onClick="closepopUp()">
    close
  </button>
  <input type="hidden"  name="producId" id="productId">
               <input type="hidden"  name="productName" id="productNames" value="111">
               <input type="hidden"  name="productPrice" id="productPrice">
               <input type="hidden"  name="Quantity" id="productQ">
               <input type="hidden"  name="Pimg" id="productImg">
               <input type="hidden"  name="stock" id="pr_stock">
            

              
</div>
</div>
  </form>