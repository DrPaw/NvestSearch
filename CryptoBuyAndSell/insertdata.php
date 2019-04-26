<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nvestbuysell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO traderegistration(tradetype,location,username,currency,minamount,maxamount,paymentmethod,phone,email,address,sunstarttime,sunendtime,monstarttime,monendtime,tuestarttime,tueendtime,wedstarttime,wedendtimetime,thustarttime,thuendtime,fristarttime,friendtime,satstarttime,satendtime) VALUES('Sell your bitcoins locally','Bangalore','NvestSearch','USD','1000','2000','NvestPay','8370056324','Nvest@nvestbank.com','JayNagar','SUN:12:00 AM','SUN:12:00 AM','MON:12:00 PM','MON:12:00 PM','TUE:12:00 AM','TUE:12:00 PM','WED:12:00 AM','WED:12:00 PM','THU:12:00 AM','THU:12:00 PM','FRI:12:00 AM','FRI:12:00 PM','SAT:12:00 AM','SAT:12:00 PM')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
