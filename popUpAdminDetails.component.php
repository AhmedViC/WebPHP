<form action="includes/updateProductData.inc.php" method="post">
<div style="display: none;" class="popUp" id="AdminpopUp">
<div class="popUpHeader">
   <H1>Edit</H1>
</div>
<div class="popUpBody">
  <img class="imgpop" id="imgP1" src="images/FlipZ.jpg">

  <label>Name</label>
  <input type="text" id="p_name1" name="NEWproductname">
  <label>Price</label>
  <input type="text" id="price1" name="productNewPrice">
  <label>Stock</label>
  <input name="productNewStock" type="text" id="stock1" value="1">
  <label>Description</label>
  <textarea id="p_description1" name="p_description"></textarea>

  



  <button title="save changes" type="submit" name="edit" id="editButton1">
  <i class="fa-solid fa-floppy-disk"></i>
  
  <button title="remove product" type="submit"id="delete" name="delete">
  <i class="fa-solid fa-trash"></i>
  </button>
 <span class="stockError" hidden id="err"> That excceeds the available stock!</span>
  <Button  id="close" type="button" class="open" >
    close
  </button>
  <input type="hidden"  name="producId" id="productId1">
               <input type="hidden"  name="productName" id="productNames1" value="111">
               <input type="hidden"  name="productPrice" id="productPrice1">
               <input type="hidden"  name="Quantity" id="productQ1">
               <input type="hidden"  name="Pimg" id="productImg1">
               <input type="hidden"  name="stock" id="pr_stock1">
            

              
</div>
</div>
  </form>

