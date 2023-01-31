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


  
form.addEventListener('submit',function(event)
{
   if(validateEmail(form.email.value)==null)
   {
   event.preventDefault();
   console.log(false, form.email.value)
   console.log(validateEmail(form.email.value))

   }
  
})
 