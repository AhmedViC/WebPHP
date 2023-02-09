

const id= document.getElementById('productId').value
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


const popUpeditButton= document.getElementById('editButton')
 
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




console.log('name',pname);

const img = document.getElementById('imgP')
const popUp = document.getElementById('AdminpopUp')
const price= document.getElementById('price')
const p_name= document.getElementById('p_name')
const stock1= document.getElementById('stock')
const description =document.getElementById('p_description')

p_name.value=pname;
price.value=pPrice;
stock1.value=stock;
img.src=Pimg.src;


popUp.style.display="flex"

const errorMessage=document.getElementById('err')




console.log(popUpeditButton)

popUpeditButton.addEventListener('click',
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

