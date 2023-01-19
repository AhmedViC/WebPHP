


    const products = document.querySelectorAll('.productsContainer');
  


    for(var i = 0 ; i<products.length;i++)
    {
       
        const id= products[i].getElementsByClassName('pr_id')[0].value;
        const price = products[i].getElementsByClassName('pr_price')[0].value;
       const Pname =  products[i].getElementsByClassName('pr_name')[0].value
        const btn = products[i].getElementsByTagName('button')[0];
        const img = products[i].getElementsByTagName('img')[0];
        btn.addEventListener('click',function()
        {
            openpopUp(id,price,Pname,img)
        })
    }
  
     


function closepopUp()
{

    const popUp = document.getElementById('popUp');
    console.log(document.getElementById('popUp'))
       popUp.style.display="none"
       console.log(popUp.style.display)
    
       console.log('hi')
}

function openpopUp(productId, pPrice,pname,Pimg)
{
  

   

   const img = document.getElementById('imgP')
   const popUp = document.getElementById('popUp')
   const price= document.getElementById('price')
   const p_name= document.getElementById('p_name')
   p_name.innerHTML=pname;
   price.innerHTML=pPrice;
   img.src=Pimg.src;

   popUp.style.display="flex"



   const popUpButton= document.getElementById('cartB')
   console.log(popUpButton)
   
   popUpButton.addEventListener('click',
   function()
   {
       //to assign values to hidden input

   
       const hiddenName= document.getElementById('productNames')
       const hiddenPrice= document.getElementById('productPrice')
       const hiddenId= document.getElementById('productId')
       const hiddenQuantity= document.getElementById('productQ')
       const quantityInput= document.getElementById('inputQ')
    
   const productImg = document.getElementById('productImg')
       hiddenName.value=pname
       hiddenPrice.value=pPrice
       hiddenId.value=productId
       productImg.value=Pimg.src
       hiddenQuantity.value=quantityInput.value
       console.log('quanity' ,hiddenQuantity.value)
       console.log('price' ,hiddenPrice.value)
       console.log('hidden name',hiddenName.getAttribute("value"))
   })
   
}
