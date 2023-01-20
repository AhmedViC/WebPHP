const query  = window.location.search;
const urlParam = new URLSearchParams(query);
const msg = urlParam.get('msg');
console.log('hi')
console.log(msg)
if(msg=='purchasedone')
{
   alert('Purchase Completed')
}