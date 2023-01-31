const form = document.getElementById('checkoutform')
const submitButton = document.getElementById('submit')

const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };

  const validateZip = (zip) => {
    return String(zip)
     
      .match(
        /^\d{5}$/
      );
  };
  const validateCVV = (cvv) => {
    return String(cvv)
     
      .match(
        /^\d{3}$/
      );
  };
  
  const validateYear = (year) => {
    console.log(new Date().getFullYear)
    console.log(parseInt(new Date().getFullYear()))
     return parseInt(year)>parseInt(new Date().getFullYear())
     
  };
  const validateMonth = (month) => {
    return month>0 && month<13
  };



  function setErrorMessage(input,message)
  {
    const parent = input.parentElement;
    console.log(parent)
    const small = parent.querySelector('small') 
    console.log(small)
    small.innerHTML=message;
  }
  function removeError(input)
  {
    const parent = input.parentElement;
    console.log(parent)
    const small = parent.querySelector('small') 
    console.log(small)
    small.innerHTML="";

  }
  form.addEventListener('submit',function(event)
{
   if(validateEmail(form.email.value)==null)
   {
   event.preventDefault();
   console.log(false, form.email.value)
   console.log(validateEmail(form.email.value))
   setErrorMessage(form.email,'wrong email!')

   }
   else
   {
    console.log('remove')
    removeError(form.email)
   }
  

   if(validateCVV(form.cvv.value)==null)


   
   {   event.preventDefault();
    setErrorMessage(form.cvv,'incorrect cvv!')
    console.log('false number')


   }
   else{
    console.log('correct number')
    removeError(form.cvv)
   }
   if(validateZip(form.zip.value)==null)


   
   {   event.preventDefault();
    setErrorMessage(form.zip,'incorrect zip!')
    console.log('false number')


   }
   else{
    console.log('correct number')
    removeError(form.zip)
   }
   if(validateMonth(form.expmonth.value)==false)


   
   {   event.preventDefault();
    setErrorMessage(form.expmonth,'incorrect month!')
    console.log('false number')


   }
   else{
    console.log('correct number')
    removeError(form.expmonth)
   }
   if(validateYear(form.expyear.value)==false)


   
   {   event.preventDefault();
    setErrorMessage(form.expyear,'invalid exp card')
    console.log('false number')


   }
   else{
    console.log('correct number')
    removeError(form.expyear)
   }
   
  
})
 