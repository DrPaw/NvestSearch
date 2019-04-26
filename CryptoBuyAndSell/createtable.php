<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nvestbuysell";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE traderegistration (
sn INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	tradetype VARCHAR(512) NOT NULL,
	location VARCHAR(512) NOT NULL,
username VARCHAR(512),
currency VARCHAR(512),
minamount INT(200),
MAXAMOUNT INT(200),
paymentmethod VARCHAR(512),
	phone BIGINT(200),
		email VARCHAR(512),
		address VARCHAR(512),
		sunstarttime VARCHAR(512),
		sunendtime VARCHAR(512),
		monstarttime VARCHAR(512),
		monendtime VARCHAR(512),
		tuestarttime VARCHAR(512),
		tueendtime VARCHAR(512),
		wedstarttime VARCHAR(512),
		wedendtimetime VARCHAR(512),
		thustarttime VARCHAR(512),
		thuendtime VARCHAR(512),
		fristarttime VARCHAR(512),
		friendtime VARCHAR(512),
		satstarttime VARCHAR(512),
		satendtime VARCHAR(512),
		
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table traderegistration created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>