const form = document.getElementById('signUpFrom')
const submitButton = document.getElementById('submit')
console.log(form)

const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };
  const validatePhone = (phone) => {
    return String(phone)
     
      .match(
        /^05\d{8}$/
      );
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
   if(form.pass.value.length<5)
   {
    event.preventDefault();
    setErrorMessage(form.pass,'weak password!')
   console.log('weak password')

   }
   else{
    removeError(form.pass)

   }

   if(validatePhone(form.phone.value)==null)


   
   {   event.preventDefault();
    setErrorMessage(form.phone,'incorrect number!')
    console.log('false number')


   }
   else{
    console.log('correct number')
    removeError(form.phone)
   }
   
  
})
 