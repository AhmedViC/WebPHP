


    const products = document.querySelectorAll('.cartItems');
  


    for(var i = 0 ; i<products.length;i++)
    {
       
        const id= products[i].getElementsByClassName('pr_id')[0].value;
        const price = products[i].getElementsByClassName('pr_price')[0].value;
       const Pname =  products[i].getElementsByClassName('pr_name')[0].value
        const btn = products[i].getElementsByTagName('button')[0];
        const img = products[i].getElementsByClassName('pr_img')[0].value;
        console.log(img)
    
        
        const stock = products[i].getElementsByClassName('pr_stock')[0].value;
        const quanity = products[i].getElementsByClassName('pr_quantity')[0].value;
        console.log(stock)
        btn.addEventListener('click',function()
        {
            openpopUp(id,price,Pname,img,stock)
        })
    }
  
     


function closepopUp()
{

    const popUp = document.getElementById('popUp');
    const quantityInput= document.getElementById('inputQ')
    quantityInput.value=1
    console.log(document.getElementById('popUp'))
       popUp.style.display="none"
       console.log(popUp.style.display)
    
       console.log('hi')
}

function openpopUp(productId, pPrice,pname,Pimg,stock)
{

  


   

   const img = document.getElementById('imgP')
   const popUp = document.getElementById('popUp')
   const price= document.getElementById('price')
   const p_name= document.getElementById('p_name')
   p_name.innerHTML=pname;
   price.innerHTML='price: '+pPrice+'SAR';
   img.src=Pimg;
  

   popUp.style.display="flex"
   const quantityInput= document.getElementById('inputQ')
   const popUpButton= document.getElementById('cartB')
   const errorMessage=document.getElementById('err')

   quantityInput.addEventListener('input',(event)=>
   {
    console.log('check')
    if(parseInt(stock)<parseInt(quantityInput.value))

    {
        console.log(stock,'<',quantityInput.value,stock<quantityInput.value)
        console.log('cond 1',stock)
        popUpButton.disabled=true;
        errorMessage.style.display="block"
        return

    }
    else{
        console.log('The stock is:',stock)
        console.log('cond 2',stock)
        popUpButton.disabled=false;
        errorMessage.style.display="none"
        

    }
   })



   console.log(popUpButton)
   
   popUpButton.addEventListener('click',
   function()
   {
       //to assign values to hidden input

   
       const hiddenName= document.getElementById('productNames')
       const hiddenPrice= document.getElementById('productPrice')
       const hiddenId= document.getElementById('productId')
       const hiddenQuantity= document.getElementById('productQ')
       const hiddenStock = document.getElementById('pr_stock')
       hiddenStock.value=stock
       console.log(hiddenStock.value)
  
    
   const productImg = document.getElementById('productImg')
       hiddenName.value=pname
       hiddenPrice.value=pPrice
       hiddenId.value=productId
       productImg.value=Pimg.value
       hiddenQuantity.value=quantityInput.value
       console.log('quanity' ,hiddenQuantity.value)
       console.log('price' ,hiddenPrice.value)
       console.log('hidden name',hiddenName.getAttribute("value"))
   })
   
}
