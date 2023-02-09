<form action="includes/updateProductData.inc.php" method="post">
<div style="display: none;" class="popUp" id="AdminpopUp">
<div class="popUpHeader">
   <H1>Edit</H1>
</div>
<div class="popUpBody">
  <img class="imgpop" id="imgP" src="images/FlipZ.jpg">

  <label>Name</label>
  <input type="text" id="p_name" name="NEWproductname">
  <label>Price</label>
  <input type="text" id="price" name="productNewPrice">
  <label>Stock</label>
  <input name="productNewStock" type="text" id="stock">
  <label>Description</label>
  <textarea id="p_description" name="p_description"></textarea>

  



  <button title="save changes" type="submit" name="edit" id="editButton">
  <i class="fa-solid fa-floppy-disk"></i>
  
  <button title="remove product" type="submit"id="delete" name="delete">
  <i class="fa-solid fa-trash"></i>
  </button>

  <Button  id="close" type="button" class="open" >
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

