const helpIcon = document.getElementById('Helpicons')
const helpWidnow = document.getElementById('popUpHelp')
console.log(helpIcon)
console.log('hhhii')
helpIcon.addEventListener('click',function()
{
    helpWidnow.style.display="flex"
})




const buttonHelp = document.getElementById('sendButton')
buttonHelp.addEventListener('click',function()
{
    helpWidnow.style.display="none"
})