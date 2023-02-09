

if(document.getElementById('open')!=null)
{




   
    const id= document.getElementById('producId').value
    const price =document.getElementById('pprice').value

   const Pname =  document.getElementById('productName').value
    const btn = document.getElementById('open');
    const img = document.getElementById('img').value;
    console.log('img: ',img)
    console.log('price',price)
    
    const stock = document.getElementById('stock').value

    btn.addEventListener('click',function()
    {
     
        openpopUp(id,price,Pname,img,stock)
    })


 


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
console.log('here ',Pimg)





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
if(parseInt(quantityInput.value)<=0)
{
    popUpButton.disabled=true;
    return;


}
else{
    popUpButton.disabled=false;

}
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
   const hiddenstock = document.getElementById('pr_stock')

 

const productImg = document.getElementById('productImg')
   hiddenName.value=pname
   hiddenPrice.value=pPrice
   hiddenId.value=productId
   productImg.value=Pimg.src
   hiddenQuantity.value=quantityInput.value
   hiddenstock.value=stock
   console.log(hiddenstock.value)
   console.log('quanity' ,hiddenQuantity.value)
   console.log('price' ,hiddenPrice.value)
   console.log('hidden name',hiddenName.getAttribute("value"))
})
}
}
else {
    

const id= document.getElementById('producId').value
const price =document.getElementById('pprice').value

const Pname =  document.getElementById('productName').value
const btn = document.getElementById('admin');
const img = document.getElementById('img').value;
console.log('img: ',img)
console.log('price',price)

const stock = document.getElementById('stock').value

btn.addEventListener('click',function()
{
 
    openpopUp(id,price,Pname,img,stock)
})


const popUpeditButton= document.getElementById('editButton1')
 
const closebutton = document.getElementById('close');
closebutton.addEventListener('click',function()
{
closepopUp()
})

function closepopUp()
{

const popUp = document.getElementById('AdminpopUp');

   popUp.style.display="none"
   console.log(popUp.style.display)

   console.log('hi')
}

function openpopUp(productId, pPrice,pname,Pimg,stock)
{
    console.log('product id',productId)




console.log('name',pname);

const img = document.getElementById('imgP1')
const popUp = document.getElementById('AdminpopUp')
const price= document.getElementById('price1')
const p_name= document.getElementById('p_name1')
const stock1= document.getElementById('stock1')
const description =document.getElementById('p_description1')

console.log(img)
console.log(Pimg)
p_name.value=pname;
price.value=pPrice;
stock1.value=stock;
img.src=Pimg;
console.log(img)

popUp.style.display="flex"

const errorMessage=document.getElementById('err')




console.log(popUpeditButton)

popUpeditButton.addEventListener('click',
function()
{
   //to assign values to hidden input


   const hiddenName= document.getElementById('productNames1')
   const hiddenPrice= document.getElementById('productPrice1')
   const hiddenId= document.getElementById('productId1')
   const hiddenQuantity= document.getElementById('productQ1') 
   const hiddenstock = document.getElementById('pr_stock1')

 

const productImg = document.getElementById('productImg1')
   hiddenName.value=pname
   hiddenPrice.value=pPrice
   hiddenId.value=productId
   productImg.value=Pimg.src

   hiddenstock.value=stock
   console.log('hidden is',hiddenstock.hiddenId)


   console.log('price' ,hiddenPrice.value)
   console.log('hidden name',hiddenName.getAttribute("value"))
})



const btnDelete = document.getElementById('delete')

btnDelete.addEventListener('click',
function()
{
//to assign values to hidden input


const hiddenName= document.getElementById('productNames')
const hiddenPrice= document.getElementById('productPrice')
const hiddenId= document.getElementById('productId')
const hiddenQuantity= document.getElementById('productQ') 
const hiddenstock = document.getElementById('pr_stock')



const productImg = document.getElementById('productImg')
hiddenName.value=pname
hiddenPrice.value=pPrice
hiddenId.value=productId
productImg.value=Pimg.src

hiddenstock.value=stock
console.log('hidden is',hiddenstock.hiddenId)


console.log('price' ,hiddenPrice.value)
console.log('hidden name',hiddenName.getAttribute("value"))
})

}



}

