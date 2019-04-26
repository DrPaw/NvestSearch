<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Nvest Search</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
</head>

<body>
<div class="container pt-5">



<h2>Buy bitcoins using 
<?php 
include_once('../nvestbuysellconfig.php');

if(isset($_GET['sn']))
{
$sn=$_GET['sn'];
$sql="select paymentmethod from buysellrecord where sn='$sn'";






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo "" .$row["paymentmethod"]. "";
		
    }
} else {
    echo "0 results";
}
}
?> with Indian Rupee (INR)</h2>




<h5>NvestSearch.com user 
<?php 
include_once('../nvestbuysellconfig.php');

if(isset($_GET['sn']))
{
$sn=$_GET['sn'];
$sql="select seller from buysellrecord where sn='$sn'";






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo "" .$row["seller"]. "";
		
    }
} else {
    echo "0 results";
}
}
?>
 wishes to sell bitcoins to you.</h5>
</div>
<div class="container">
<div class="row">
<div class="col"><strong>Price:</strong></div>
<div class="col text-success"><span id="amount"></span>/<span id="currency"></span></div>
<div class="w-100 pt-1"></div>
<div class="col"><strong>Payment method:</strong></div>
<div class="col"><?php 
include_once('../nvestbuysellconfig.php');

if(isset($_GET['sn']))
{
$sn=$_GET['sn'];
$sql="select paymentmethod from buysellrecord where sn='$sn'";






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo "" .$row["paymentmethod"]. "";
		
    }
} else {
    echo "0 results";
}
}
?> </div>
<div class="w-100 pt-1"></div>
<div class="col"><strong>User:</strong></div>
<div class="col text-primary"><i class="fa fa-user"></i>
 <?php 
include_once('../nvestbuysellconfig.php');

if(isset($_GET['sn']))
{
$sn=$_GET['sn'];
$sql="select seller from buysellrecord where sn='$sn'";






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo "" .$row["seller"]. "";
		
    }
} else {
    echo "0 results";
}
}
?>
</div>
<div class="w-100 pt-1"></div>
<div class="col"><strong>Limits:</strong></div>
<div class="col"> <?php 
include_once('../nvestbuysellconfig.php');

if(isset($_GET['sn']))
{
$sn=$_GET['sn'];
$sql="select tradelimit from buysellrecord where sn='$sn'";






$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
		 echo "" .$row["tradelimit"]. "";
		
    }
} else {
    echo "0 results";
}
}
?></div>
<div class="w-100 pt-1"></div>
<div class="col"><strong>Location:</strong></div>
<div class="col text-primary"> India</div>
<div class="w-100 pt-1"></div>
<div class="col"><strong>Payment window: </strong></div>
<div class="col"> 1 hour 30 minutes </div>
</div>
</div>
<div class="container pt-5">
<div class="card text-center">
<div class="card-body">
<h5 class="card-title">How much you wish to buy?</h5>
<button type="button" class="btn btn-primary">INR : <input type="number" value="0.00"></button>
<button type="button" class="btn btn-primary">BTC : <input type="number"></button>
<h5 class="card-title">Sign up and buy bitcoins instantly.</h5>
<button type="button" class="btn btn-success">Sign Up free</button>
<p class="card-text">Signing up is free and takes only 30 seconds.</p>
</div>
</div>
</div>

<script>
document.getElementById('amount').innerHTML = localStorage.getItem('amount');
document.getElementById('currency').innerHTML = localStorage.getItem('currency');
</script>
</body>

</html>

