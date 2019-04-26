


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="cryptobuyandsell.css">
</head>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>


    <div class="container">
        <form class="formbuysell" action="CryptoBuyAndSellFilter.php" method="get">
            <div class="text-center topbuysell">
<a onclick="Buy()" onmouseover="stext()" onmouseout="htext()"><span class="toptext" id="tt1">QUICKBUY</span></a>
<a onclick="Sell()" onmouseover="htext()" onmouseout="stext()"><span class="toptext" id="tt2">QUICKSELL</span></a>
</div>
            <div id="buy">
                <div class="form-row" id="buy">
                    <div class="form-group col-md-3">
					
                        <input type="number" class="form-control" id="inputCity" placeholder="Amount">
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState1" class="form-control">
                            <option selected>Currency...</option>
                           
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState2" class="form-control"  onchange="countryChange()">
                            <option selected>Country...</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState3" class="form-control" name="area">
                            <option selected>Choose</option>
							 <option value="NvestPay,Paytm">NvestPay</option>
							  <option value="paytm">Paytm</option>
							   <option value="nvestwallet">NvestWallet</option>
							    <option value="phonepay">PhonePay</option>
								<option value="paypal">Paypal</option>
                            
                        </select>
                    </div>
                </div>
            </div>
            <div id="sell">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="number" class="form-control" id="inputCity" value="Amount">
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState3" class="form-control">
                            <option selected>Currency</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState4" class="form-control" onchange="countryChange()">
                            <option selected>Country</option>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
            </div>
			<input type="submit" />
			 
        </form>
		
		<?php
		
		
				
		if(isset($_GET['area']))
{
$area=$_GET['area'];
$sql="select sn,seller,paymentmethod,tradelimit from buysellrecord where paymentmethod LIKE ('%$area%')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo   "<tr><td>".$row["sn"]."</td>";
		 echo "<td>".$row["seller"]."</td>";
		 echo "<td>" .$row["paymentmethod"]. "";
		 
		
		
          
                echo "<td><span id='displayAmount'>30000</span><br/><span id='displayCurrency'>INR</span></td>";
                echo "<td>".$row["tradelimit"]."</td>";
				 echo " <td class='tablebuybtn'><a href='buy and sell assets/cryptobuy.php?sn=".$row["sn"]."'><button type='button' class='btn btn-success'>Buy</button></a></td></tr>";
		
    }
} else {
    echo "0 results";
}
}
				
	
 

 
 ?>
		
		
		
		
		
       <center>
	   <a onclick="buyClick(this)">
            <button type="submit" name="submit" class="btn btn-primary btnsearch" onclick="getValue()">Search</button>
			</a>
        </center>
    </div>
	<div id="buytable">
	<div class="container pt-5">
 <h2>Results for buying bitcoins online</h2>
 </div>
    <div class="container table-responsive">
       
        <table>
            <tr>
				<th>Serial No.</th>
                <th>Trader</th>
                <th>Payment method</th>
                <th>Price / BTC</th>
                <th>Limits</th>
                <th></th>
            </tr>
            <tr>
			<?php
include_once('nvestbuysellconfig.php');

$sql = "SELECT sn,seller,paymentmethod,tradelimit FROM buysellrecord";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		echo   "<tr><td>".$row["sn"]."</td>";
		echo "<td>".$row["seller"]."</td>";
		
            echo   "<td>".$row["paymentmethod"]."</td>";
                echo "<td><span id='displayAmount'>30000</span><br/><span id='displayCurrency'>INR</span></td>";
                echo "<td>".$row["tradelimit"]."</td>";
				 echo " <td class='tablebuybtn'><a href='buy and sell assets/cryptobuy.php?sn=".$row["sn"]."'><button type='button' class='btn btn-success'>Buy</button></a></td></tr>";
    }
} else {
    echo "0 results";
}

?>
			
               
               
         
        </table>
    </div>
	</div>
	

    <div id="selltable">
    <div class="container pt-5">
        <h2>Results for selling bitcoins online</h2>
    </div>
    <div class="container table-responsive">
        <table>
            <tr>
				<th>Serial No.</th>
                <th>Trader</th>
                <th>Payment method</th>
                <th>Price / BTC</th>
                <th>Limits</th>
                <th></th>
            </tr>
            <tr>
			
			<?php
$sql = "SELECT sn,seller,paymentmethod,tradelimit FROM buysellrecord";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td>".$row["sn"]."</td>";
		echo "<td>".$row["seller"]."</td>";
            echo   "<td>".$row["paymentmethod"]."</td>";
               echo "<td><span id='displayAmount1'>30000</span><br/><span id='displayCurrency1'>INR</span></td>";
                echo "<td>".$row["tradelimit"]."</td>";
				 echo " <td class='tablebuybtn'><a href='buy and sell assets/cryptosell.php?sn=".$row["sn"]."'><button type='button' class='btn btn-danger'>Sell</button></a></td></tr>";
    }
} else {
    echo "0 results";
}

?>
                
               
        </table>
    </div>
    </div>
<script>
    let clickedCurrency = "CAD";
let clickedCountry = "Canadian Dollar";
let totalData;
let buyItem = "BTC";
axios.get('https://openexchangerates.org/api/currencies.json').then(response => {
console.log(response.data);
totalData = response.data;
for(let i in response.data){

document.getElementById('inputState1').innerHTML += (i == "CAD" ? `<option selected>${i}</option>` : `<option>${i}</option>`);

document.getElementById('inputState2').innerHTML += (response.data[i] == "Canadian Dollar" ? `<option selected>${response.data[i]}</option>` : `<option>${response.data[i]}</option>`);
}
}).catch(err => console.log(err));

function countryChange() {
for(let i in totalData){
if(document.getElementById('inputState2').value == totalData[i]){
document.getElementById('inputState1').value = i;
}
}
clickedCurrency = document.getElementById('inputState1').value;
clickedCountry = document.getElementById('inputState2').value; 
getValue();
}

function buyClick(e){
console.log(e);
e.href = `?currency=${clickedCurrency}&country=${clickedCountry}`;
};

function submitClick(e) {
e.preventDefault();
getValue();
};

function getValue() {
let to = document.getElementById('inputState1').value;
axios.get(`https://api.coinlayer.com/convert?access_key=e03653aa09b1c23c0474d4df8e08595b&from=${buyItem}&to=${to}&amount=1`).then(response => {
console.log(response.data);
document.getElementById("displayAmount").innerHTML = response.data.result;
document.getElementById("displayCurrency").innerHTML = to;
document.getElementById("displayAmount1").innerHTML = response.data.result;
document.getElementById("displayCurrency1").innerHTML = to;
console.log(clickedCurrency,clickedCountry);

localStorage.setItem('amount',JSON.stringify(response.data.result));
localStorage.setItem('currency',to);

}).catch(err => console.log(err));
}

setTimeout(() => {getValue()},500);
</script>
    <script src="cryptobuyandsell.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
</body>

</html>