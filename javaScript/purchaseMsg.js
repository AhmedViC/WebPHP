const query  = window.location.search;
const urlParam = new URLSearchParams(query);
console.log('00000')
const msg = urlParam.get('error');
console.log(urlParam)
console.log('hi')
console.log(msg)
if(msg=='purchasedone')
{
   alert('Purchase Completed')
}
else if(msg=='unauthorizedAccess')
{
   alert('unauthorized Access!')
}
