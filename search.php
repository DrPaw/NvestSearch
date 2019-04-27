<?php
include("config.php");
include("classes/SiteResultsProvider.php");
include("classes/ImageResultsProvider.php");

if(isset($_GET["term"])) {
	$term = $_GET["term"];
}
else {
	exit("You must enter a search term");
}

$type = isset($_GET["type"]) ? $_GET["type"] : "sites";
$page = isset($_GET["page"]) ? $_GET["page"] : 1;


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Nvest</title>
	 <link rel="icon" href="images/Nvest-Logo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>	
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	
	
	<link rel="stylesheet" type="text/css" href="nvestsearch.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0","minimum-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body onload="convertCurrency();">



	<div class="wrapper">
	
		<div class="header">


			<div class="headerContent">

				<div class="logoContainer">
					<a href="index.html">
						<img src="images/nvest logo-01.png">
					</a>
				</div>

				<div class="searchContainer">

					<form action="search.php" method="GET">

						<div class="searchBarContainer">
							<input type="hidden" name="type" value="<?php echo $type; ?>" >
							<input class="searchBox" type="text" name="term" value="<?php echo $term; ?>" autocomplete="off" onchange="window.location.reload()">
							<button class="searchButton" onchange="window.location.reload()">
								<img src="assets/images/icons/search.png">
							</button>
						</div>

					</form>

				</div>

			</div>


			<div class="tabsContainer">

				<ul class="tabList">

					<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?type=sites&term=$term"; ?>'>
							Sites
						</a>
					</li>

					<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
						<a href='<?php echo "search.php?term=$term&type=images"; ?>'>
							Images
						</a>
					</li>

				</ul>


			</div>
		</div>








		<div class="mainResultsSection">
			
			<?php
			if($type == "sites") {
				$resultsProvider = new SiteResultsProvider($con);
				$pageSize = 20;
			$numResults = $resultsProvider->getNumResults($term);

			echo "<p class='resultsCount'>$numResults results found</p>";
			?>
			
			
			<div class="container custom" style="padding-right: 0 !important; padding-left: 0 !important;" id="tohide">

<div class="row">

<div class="col exchangecol" style="padding-bottom:20px;">
<div class="crypto_name" style="font-size: -webkit-xxx-large;">
<span style="padding-right:10px;" id="heading"></span>
<img id="image"  height="50" style="padding-bottom:8px;">
<a href="https://www.luca.nvest.com/" target="_blank"><img src ="images/luca1.png" height="100" style="float:right;"></a>
</div>

<div class="crypto_code" id="crypto_code">

</div>

<div class="row" style="padding-top:10px; width:100%;">
<div class="col" style="font-size:15px;">
<span style="font-size:35px;" id="price"></span> 

<span style="padding-left: 15px;font-size:large;color:green;" id="change"></span>
</div>

</div>

<div class="datetime" id="date">

</div>


<!--Desktop without collapse start-->
<div class="desktop">
<div class="row" style="padding-top:20px;">
<div class="col mktcap" >Mkt Cap</br><div id="mktcap"></div></div>
<div class="col volume">Volume</br><div id="volume"></div></div>
<div class="col supple">Supply</br><div id="supply"></div></div>
<div class="col social">Social</br><div>123</div></div>
<div class="col search">Search</br><div>123</div></div>
</div>

<div class="row pricebox" style="text-align:center;padding-top:20px;">
<!-- <div class="col">
<div class="container price" style="color:#0D1F47;">
<span style="color:#0D1F47;" onchange="convertCurrency();">$5000.00</span>USD
</div>
</div>-->
<div class="w-100"></div>
<div class="container exchangecolinner">
<div class="row">
<div class="col">
<center>

<div class="innerstyle" style="padding:40px;">
<table>
<tr>
<td><input class="input" id="fromAmount" value="1" type="text" onkeyup="convertCurrency();"/></td>
<span class="underline"></span>
<td>
<select class="selectclass input" id="from" onchange="convertCurrency();">
<option value="AED">AED </option>
<option value="AFN">AFN </option>
<option value="AMD">AMD </option>
<option value="AOA">AOA </option>
<option value="ANG">ANG </option>
<option value="ARK">ARK </option>
<option value="AZN">AZN </option>
<option value="BNB">BNB </option>
<option value="BTM*">BTM* </option>
<option value="USD">USD </option>
<option value="ETH">ETH </option>
<option value="EOS">EOS </option>
<option value="GXS">GXS </option>
<option value="NEO">NEO </option>
<option value="THETA">THETA </option>
<option value="XMR">XMR </option>
<option value="ZEC">ZEC </option>
<option value="DASH">DASH </option>
<option value="LTC">LTC </option>
<option value="TRX">TRX </option>
<option value="XEM">XEM </option>
<option value="XLM">XLM </option>
<option value="XRP">XRP </option>
<option value="BTC" selected>BTC </option>
</select>
</td>
</tr>
</table>
<table>
<tr>
<td><input class="input" id="toAmount" type="text" style="margin-top:50px;"/></td>
<span class="underline"></span>
<td>
<select class="selectclass input" id="to" onchange="convertCurrency();" style="margin-top:50px;">
<option value="AED">AED </option>
<option value="AFN">AFN </option>
<option value="AMD">AMD </option>
<option value="AOA">AOA </option>
<option value="ANG">ANG </option>
<option value="ARK">ARK </option>
<option value="AZN" >AZN </option>
<option value="BTC">BTC </option>
<option value="BNB">BNB </option>
<option value="BTM*">BTM* </option>
<option value="USD">USD </option>
<option value="ETH">ETH </option>
<option value="EOS">EOS </option>
<option value="GXS">GXS </option>
<option value="NEO">NEO </option>
<option value="THETA">THETA </option>
<option value="TRX">TRX </option>
<option value="XMR">XMR </option>
<option value="ZEC">ZEC </option>
<option value="DASH">DASH </option>
<option value="LTC">LTC </option>
<option value="XEM">XEM </option>
<option value="XLM">XLM </option>
<option value="XRP">XRP </option>
<option value="INR" selected>INR </option>
</select>
</td>
</tr>
</table>
</div>
</center>
</div>
<div class="col colbutton">
<button type="button" class="btn btn-primary exchangebutton"><img src="images/exchange3 (1).svg"></button>
</div>

</div>
<!--Begin Currency Converter Code-->



<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>



function convertCurrency()
{
var from = document.getElementById("from").value;
var to = document.getElementById("to").value;

axios.get(`https://api.coinlayer.com/convert?access_key=e03653aa09b1c23c0474d4df8e08595b&from=${from}&to=${to}&amount=${document.getElementById("fromAmount").value}`).then(response => {

document.getElementById("toAmount").value = (response.data.result + (response.data.result)*0.03).toFixed(2);

}).catch(err => console.log(err));
}
</script>
<!--End Currency Converter Code-->

</div>
</div>
</div>
<!--Desktop without collapse end-->
<!--collapse start-->
<div class="mobile">
<div class="accordion" id="accordionExample">
 <div class="indication_arrow" style="text-align:center;">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		
         <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
		 
        </button>
		</div>
   
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="row text-center" style="padding-top:20px;">
<div class="col-sm-12 mktcap1" >Mkt Cap</br></br><div id="mktcap1">123</div></div>
<div class="col-sm-12 volume1">Volume</br></br><div id="volume1">123</div></div>
<div class="col-sm-12 supple1">Supply</br></br><div id="supply1">123</div></div>
<div class="col-sm-12 social1">Social</br></br><div>123</div></div>
<div class="col-sm-12 search1">Search</br></br><div>123</div></div>
</div>

<div class="row pricebox" style="text-align:center;padding-top:20px;">
<!-- <div class="col">
<div class="container price" style="color:#0D1F47;">
<span style="color:#0D1F47;" onchange="convertCurrency();">$5000.00</span>USD
</div>
</div>-->
<div class="w-100"></div>
<div class="container exchangecolinner">
<div class="row">
<div class="col">
<center>

<div class="innerstyle" style="padding:40px;">
<table>
<tr>
<td><input class="input" id="fromAmount" value="1" type="text" onkeyup="convertCurrency();"/></td>
<span class="underline"></span>
<td>
<select class="selectclass input" id="from" onchange="convertCurrency();">
<option value="AED">AED </option>
<option value="AFN">AFN </option>
<option value="AMD">AMD </option>
<option value="AOA">AOA </option>
<option value="ANG">ANG </option>
<option value="ARK">ARK </option>
<option value="AZN">AZN </option>
<option value="BNB">BNB </option>
<option value="BTM*">BTM* </option>
<option value="EOS">EOS </option>
<option value="GXS">GXS </option>
<option value="USD">USD </option>
<option value="NEO">NEO </option>
<option value="THETA">THETA </option>
<option value="TRX">TRX </option>
<option value="XMR">XMR </option>
<option value="ZEC">ZEC </option>
<option value="DASH">DASH </option>
<option value="LTC">LTC </option>
<option value="XEM">XEM </option>
<option value="XLM">XLM </option>
<option value="XRP">XRP </option>
<option value="BTC" selected>BTC </option>
</select>
</td>
</tr>
</table>
<table>
<tr>
<td><input class="input" id="toAmount" type="text" style="margin-top:50px;"/></td>
<span class="underline"></span>
<td>
<select class="selectclass input" id="to" onchange="convertCurrency();" style="margin-top:50px;">
<option value="AED">AED </option>
<option value="AFN">AFN </option>
<option value="AMD">AMD </option>
<option value="AOA">AOA </option>
<option value="ANG">ANG </option>
<option value="ARK">ARK </option>
<option value="AZN" >AZN </option>
<option value="BTC">BTC </option>
<option value="BTM*">BTM* </option>
<option value="BNB">BNB </option>
<option value="EOS">EOS </option>
<option value="GXS">GXS </option>
<option value="USD">USD </option>
<option value="NEO">NEO </option>
<option value="THETA">THETA </option>
<option value="TRX">TRX </option>
<option value="XMR">XMR </option>
<option value="ZEC">ZEC </option>
<option value="DASH">DASH </option>
<option value="LTC">LTC </option>
<option value="XEM">XEM </option>
<option value="XLM">XLM </option>
<option value="XRP">XRP </option>
<option value="INR" selected>INR </option>
</select>
</td>
</tr>
</table>
</div>
</center>
</div>
<div class="col colbutton">
<button type="button" class="btn btn-primary exchangebutton"><img src="images/exchange3 (1).svg"></button>
</div>

</div>
<!--Begin Currency Converter Code-->



<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>



function convertCurrency()
{
var from = document.getElementById("from").value;
var to = document.getElementById("to").value;

axios.get(`https://api.coinlayer.com/convert?access_key=e03653aa09b1c23c0474d4df8e08595b&from=${from}&to=${to}&amount=${document.getElementById("fromAmount").value}`).then(response => {

document.getElementById("toAmount").value = (response.data.result + (response.data.result)*0.03).toFixed(2);

}).catch(err => console.log(err));
}
</script>
<!--End Currency Converter Code-->

</div>
</div>
</div>
</div>
</div>
<!--collapse end-->
</div>




<div class="col-sm-6 col-lg-6 col-md-12" style="padding-top:40px;box-shadow: 1px 4px 25px 1px #dedede;border-radius: 10px;">
<!-- TradingView Widget BEGIN -->
<!-- Styles -->
<style>
#chartdiv {
width: 100%;
height: 388px;
}

</style>
<div id="chartdiv">
<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
document.getElementById('date').innerHTML = new Date();
// (window.location.href.split("="))[1];
let searchSmall;
let totalData;

let n1= (window.location.href.split("term="))[1];
async function serchedData() {
let p2;
await axios.get("https://min-api.cryptocompare.com/data/top/totalvolfull?limit=100&tsym=USD").then(response => {
totalData = response.data.Data;


let n2 = response.data.Data.find(val => {
return n1.toLowerCase() == val.CoinInfo.FullName.toLowerCase() || n1.toLowerCase() == val.CoinInfo.Name.toLowerCase();;
});
if(n2) {
searchSmall = n2.CoinInfo.Name;
 axios.get(`https://api.coinlayer.com/timeframe?access_key=e03653aa09b1c23c0474d4df8e08595b& start_date=${moment().format().slice(0,10)}&end_date=${moment().format().slice(0,10)}&symbols=${searchSmall}`).then(response => {
let p1 = response.data.rates[moment().format().slice(0,10)][searchSmall];
p2 = p1*0.03;
document.getElementById('price').innerHTML = (p1+p2).toFixed(2);

}).catch(err => console.log(err));

document.getElementById('heading').innerHTML = n2.CoinInfo.FullName;
// document.getElementById('price').innerHTML = n2.RAW.USD.PRICE;
document.getElementById('image').src = `https://www.cryptocompare.com${n2.CoinInfo.ImageUrl}`
document.getElementById('crypto_code').innerHTML = n2.CoinInfo.Name;
document.getElementById('date').innerHTML = new Date();
document.getElementById('mktcap').innerHTML = n2.RAW.USD.MKTCAP.toLocaleString()
document.getElementById('volume').innerHTML = n2.RAW.USD.TOTALVOLUME24H.toLocaleString()
document.getElementById('supply').innerHTML = n2.RAW.USD.SUPPLY.toFixed(2).toLocaleString();
document.getElementById('mktcap1').innerHTML = n2.RAW.USD.MKTCAP.toLocaleString()
document.getElementById('volume1').innerHTML = n2.RAW.USD.TOTALVOLUME24H.toLocaleString()
document.getElementById('supply1').innerHTML = n2.RAW.USD.SUPPLY.toFixed(2).toLocaleString();
document.getElementById('change').innerHTML = `${n2.RAW.USD.CHANGEDAY.toFixed(2)} (${n2.RAW.USD.CHANGEPCTDAY.toFixed(2)}%)`;

if(n2.RAW.USD.CHANGEPCTDAY.toString()[0] == "-"){
document.getElementById('change').style.color = "red"
}
} else {
// console.log('coin not found')
$("#tohide").hide();
}
}).catch(err => console.log(err))
}


serchedData();
setTimeout(async function (){
	await serchedData();
chartData1();
},1000);


function chartData1(){
	console.log(n1)
// Themes begin
var promise1 = new Promise(function (resolve, reject) {
let array1 = [];
let val2 = searchSmall;
var chartData, firstDate, price;

axios.get(`https://api.coinlayer.com/timeframe?access_key=e03653aa09b1c23c0474d4df8e08595b& start_date=${moment().subtract(30, 'days').format().slice(0,10)}&end_date=${moment().format().slice(0,10)}&symbols=${val2}`).then(response => {
// console.log(response.data.rates);
for (let i in response.data.rates) {
let obj = {};
obj['timestamp'] = i;
obj['rate'] = response.data.rates[i][val2]+response.data.rates[i][val2]*0.03;
array1.push(obj)
}



chartData = [];
// console.log(array1)
for (let j = 0; j < array1.length; j++) {
chartData.push({
date: array1[j].timestamp,
price: array1[j].rate
});
}
resolve(chartData)
}).catch(err => console.log(err));
});

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
promise1.then((chartData) => {
console.log(chartData)
chart.data = chartData;
})

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.minGridDistance = 50;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "price";
series.dataFields.dateX = "date";
series.strokeWidth = 2;
series.minBulletDistance = 10;
series.tooltipText = "{valueY}";
series.tooltip.pointerOrientation = "vertical";
series.tooltip.background.cornerRadius = 20;
series.tooltip.background.fillOpacity = 0.5;
series.tooltip.label.padding(12, 12, 12, 12)

// Add scrollbar
// chart.scrollbarX = new am4charts.XYChartScrollbar();
// chart.scrollbarX.series.push(series);

// Add cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.xAxis = dateAxis;
chart.cursor.snapToSeries = series;
};

</script>

<!-- HTML -->
</div>

<!-- TradingView Widget END -->
</div>


</div>


</div>










			<?php
			}
			else {
				$resultsProvider = new ImageResultsProvider($con);
				$pageSize = 30;
				$numResults = $resultsProvider->getNumResults($term);

			echo "<p class='resultsCount'>$numResults results found</p>";

			}

			



			echo $resultsProvider->getResultsHtml($page, $pageSize, $term);
			?>


		</div>



		<div class="paginationContainer">

			<div class="pageButtons">



				<div class="pageNumberContainer">
					<img src="images/Nvest-Logo.png">
				</div>

				<?php

				$pagesToShow = 10;
				$numPages = ceil($numResults / $pageSize);
				$pagesLeft = min($pagesToShow, $numPages);

				$currentPage = $page - floor($pagesToShow / 2);

				if($currentPage < 1) {
					$currentPage = 1;
				}

				if($currentPage + $pagesLeft > $numPages + 1) {
					$currentPage = $numPages + 1 - $pagesLeft;
				}

				while($pagesLeft != 0 && $currentPage <= $numPages) {

					if($currentPage == $page) {
						echo "<div class='pageNumberContainer'>
								<img src='images/nvest number-02.png'>
								<span class='pageNumber'>$currentPage</span>
							</div>";
					}
					else {
						echo "<div class='pageNumberContainer'>
								<a href='search.php?term=$term&type=$type&page=$currentPage'>
									<img src='images/nvest number-03.png'>
									<span class='pageNumber'>$currentPage</span>
								</a>
						</div>";
					}


					$currentPage++;
					$pagesLeft--;

				}





				?>

				<div class="pageNumberContainer">
					<img src="images//nvest number-04.png">
				</div>
				<div class="pageNumberContainer">
					<img src="images//nvest number-05.png">
				</div>



			</div>




		</div>




	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>