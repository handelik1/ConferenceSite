<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>

<?php include('checkdate.html'); ?>

<?php
	require("connect.php");
	$total_bill = mysqli_real_escape_string($con,$_POST['total_bill']);
	
	$outstr = '';
		//displays checkout form
		$outstr  = '<form id = "check-form" onsubmit = "return submitCheck()"  action = "payment-form.php" method = "post">';
		$outstr .= '<div id = "payment-title">Credit Card Payment</div>';
		$outstr .= '<p style =  "font-size: 20px; font-family: Tahoma, Times, Arial;position: relative; left: 350px;width: 100px">Amount:<span id = "amount" style = "position: relative; left: 20px;">$'.$total_bill.'</span></p>';
		$outstr .= '<a id = "checkout-continue" href = "shop.php"><button value = "Continue Shopping">Continue Shopping</button></a>';
		$outstr .= '<label>Name on Card</label>';
		$outstr .= '<input id = "name" type="text" name="name" placeholder = "Full Name" required>';
		$outstr .= '<label>Card Type</label>
						<select id = "type" name="cardtype">
							<option value="visa">Visa</option>
							<option value="mastercard">Mastercard</option>
							<option value="amex">American Express</option>
							<option value="discover">Discover</option>
						 </select>';
		$outstr .= '<label>Card Number</label>';
		$outstr .= '<input id = "number" type="text" name="cardnumber" placeholder = "Card Number" size = "20"  required>';
		$outstr .= '<label>Expiration (mm/yy)</label>';
		$outstr .= '<input id = "month" type="text" name="expirationMonth" style = "width: 40px"  required>';
		$outstr .= '<input id = "year" type="text" name="expirationYear" size = "3" style = "width: 40px;position: relative; left:25px"  required><br>';
		$outstr .= '<input type = "submit" name = "submit" value = "SUBMIT">';
		$outstr .= '</form>';
	
	echo $outstr;
?>

</body>

<?php include('footer.html'); ?>

