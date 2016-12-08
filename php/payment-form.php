<?php
session_start();
?>
<?php include('header.html'); ?>
<?php include('nav.php'); ?>

<?php
	if($_POST){
	
    require("connect.php");

  	$name = mysqli_real_escape_string($con,$_POST['name']);
	$cardtype = mysqli_real_escape_string($con,$_POST['cardtype']);
	$cardnumber = mysqli_real_escape_string($con,$_POST['cardnumber']);
	$expirationMonth = mysqli_real_escape_string($con, $_POST['expirationMonth']);
	$expirationYear = mysqli_real_escape_string($con, $_POST['expirationYear']);

	$message = "Please use numerals only for card number.";
	
	$month = date('m');
	$year = date('y');
	
	$currentMonth = (int)$month;
	$currentYear = (int)$year;
	
	$trimMonth = ltrim($expirationMonth, '0');

	if($expirationYear < $currentYear || $trimMonth > 12){
		exit("<script type='text/javascript'>alert('Please enter a valid expiration date.');history.go(-2)</script>"); 
	}
	else if($expirationYear == $currentYear && $trimMonth < $currentMonth){
		exit("<script type='text/javascript'>alert('Please enter a valid expiration date.');history.go(-2)</script>"); 
	}
	else if (strlen($cardnumber) != 16){
		exit("<script type='text/javascript'>alert('Please enter a valid credit card number.');history.go(-2)</script>");
	}
	else{
  if(!is_numeric($cardnumber) || !is_numeric($expirationMonth) || !is_numeric($expirationYear)){
	exit("<script type='text/javascript'>alert('$message');history.go(-1)</script>"); 
  }
  else{
	  $queryPayment = "INSERT INTO `payment`(name,cardtype,cardnumber,expirationMonth,expirationYear) VALUES ('$name','$cardtype','$cardnumber','$expirationMonth','$expirationYear')";
  
	  mysqli_query($con,$queryPayment);

      mysqli_close($con);
  }
	}
	}
?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>

				<div id = "payment-form">
						<div id = "thankyou" style = "	position: relative;top: 160px;left: 108px;font-size: 32px;">THANK YOU and enjoy!</div>
				</div>
				
</body>

<?php include('footer.html'); ?>

