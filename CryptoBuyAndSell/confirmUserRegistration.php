<?php
/** @var \pmill\AwsCognito\CognitoClient $client */
$client = require(__DIR__ . '/bootstrap.php');
if(isset($_POST['submit']))
	{
$confirmationCode = $_POST['confirmationCode'];
$username = $_POST['username'];

$client->confirmUserRegistration($confirmationCode, $username);
header('location:login.php');
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>World Best Local Directory Website template</title>
<!-- META TAGS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- FAV ICON(BROWSER TAB ICON) -->
<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Poppins|Quicksand:500,700" rel="stylesheet">
<!-- FONTAWESOME ICONS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- ALL CSS FILES -->
<link href="css/materialize.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
<link href="css/responsive.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div id="preloader">
<div id="status">&nbsp;</div>
</div>
<!--TOP SEARCH SECTION-->

<section>
<div class="email-tem">
<div class="email-tem-inn">
<div class="email-tem-main">
<div class="email-tem-head">
<h2><img src="images/mail/letter.png" alt=""> Email Verification</h2>
</div>
<div class="email-tem-body">
<h3>Congratulations!</h3>
<p>Verify you email id variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
<div class="email-list">
<form action="" method="post">
<ul>
<li><b>Enter Your Verification code:</b>
<div class="input-field">
<input type="text" name="confirmationCode">
</div>
</li>
<li><b>User Name:</b>
<div class="input-field">
<input type="text" name="username">
</div>
</li>
</ul>

<input type="submit" name="submit" value="Confirm" class="waves-effect waves-light log-in-btn">
</form>
</div>
</div>
</div>
<div class="email-tem-foot">
<h4>Stay in touch</h4>
<ul>
<li><a href="#"><img src="images/mail/s1.png" alt=""></a></li>
<li><a href="#"><img src="images/mail/s2.png" alt=""></a></li>
<li><a href="#"><img src="images/mail/s3.png" alt=""></a></li>
<li><a href="#"><img src="images/mail/s4.png" alt=""></a></li>
<li><a href="#"><img src="images/mail/s5.png" alt=""></a></li>
</ul>
<p>Email send by Rn53themes</p>
<p>copyrights © 2019 NvestSearch. All rights reserved.</p>
</div>
</div>
</div>
</section>
<!--END DASHBOARD-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/materialize.min.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
</body>

</html>


