



    const products = document.querySelectorAll('.productsContainer');


    for(var i = 0 ; i<products.length;i++)
    {
       
        const id= products[i].getElementsByClassName('pr_id')[0].value;
        const price = products[i].getElementsByClassName('pr_price')[0].value;
       const Pname =  products[i].getElementsByClassName('pr_name')[0].value
        const btn = products[i].getElementsByTagName('button')[0];
        btn.addEventListener('click',function()
        {
            openpopUp(id,price,Pname)
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

function openpopUp(productId, pPrice,pname)
{
  

   

   const img = document.getElementById('imgP')
   const popUp = document.getElementById('popUp')
   const price= document.getElementById('price')
   const p_name= document.getElementById('p_name')
   p_name.innerHTML=pname;
   price.innerHTML=pPrice;

console.log(document.getElementById('popUp'))
   popUp.style.display="block"
   console.log(popUp.style.display)

   console.log('hi')
}

