const app = document.getElementById('root');
const tableData = document.getElementById('tbody');
const pageValue = 10;
let click = 0;
let responseData = "";
let dataLength;

function apiLoad(){
axios.get('https://min-api.cryptocompare.com/data/top/totalvolfull?limit=100&tsym=USD').then(response => {
dataLength = response.data.Data.length;
responseData = response
pagination(response);
}).catch(err => console.log(err));
}
apiLoad();

function pagination(response){
for(let i=0;i<response.data.Data.length;i++){
if(i < (pageValue+click*pageValue)){
tableData.innerHTML += `
<tr scope="row">
<td class="zui-sticky-col" style="background-color:white;">${i+1}</td>
<td class="zui-sticky-col" style="background-color:white;"><img src="https://www.cryptocompare.com${response.data.Data[i].CoinInfo.ImageUrl}" height="25" width="25"></img>&nbsp;&nbsp;${response.data.Data[i].CoinInfo.FullName}(${response.data.Data[i].RAW.USD.FROMSYMBOL})</td>

<td>${response.data.Data[i].DISPLAY.USD.PRICE}</td>
<td>${response.data.Data[i].DISPLAY.USD.OPEN24HOUR}</td>
<td>${response.data.Data[i].DISPLAY.USD.MKTCAP}</td>
<td>${response.data.Data[i].DISPLAY.USD.VOLUME24HOUR}</td>
<td>${response.data.Data[i].DISPLAY.USD.SUPPLY}</td>
</tr>`;
}
}
}

document.getElementById('next').addEventListener('click',function () {
if(dataLength/pageValue > click+1){
click +=1;
tableData.innerHTML = '';
pagination(responseData);
}
console.log(click)
},false);
document.getElementById('previous').addEventListener('click',function () {
if(click > 0){
click -=1;
tableData.innerHTML = '';
pagination(responseData);
}
},false);


setTimeout(() => {
window.location.reload();
},60000);








