const searchBar = document.getElementById('searchBar');
console.log('hiiiiii')
console.log('bar',searchBar)


const products1 = document.querySelectorAll('.productsContainer');
  



 
searchBar.addEventListener('input',function()
{

    
        console.log(searchBar.value)
        if(searchBar.value.length!==0)
        {
                
for(var i = 0 ; i<products1.length;i++)
{
   
   
   const Pname =  products1[i].getElementsByClassName('pr_name')[0].value
  
    if(!Pname.toLowerCase()
        .includes(searchBar.value))
    {
        products1[i].style.display="none";
    }

    else{
        products1[i].style.display="flex";

    }
}
        }
else{
                        
for(var i = 0 ; i<products1.length;i++)
{
   
   
   
     


        products1[i].style.display="flex";

    

}

        }
    
})