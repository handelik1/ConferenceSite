<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('checkdate.html'); ?>

<?php
	if($_POST){
	
    require("connect.php");

  	$first = mysqli_real_escape_string($con,$_POST['first']);
	$last = mysqli_real_escape_string($con,$_POST['last']);
	$title = mysqli_real_escape_string($con,$_POST['title']);
	$org = mysqli_real_escape_string($con, $_POST['org']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$city = mysqli_real_escape_string($con,$_POST['city']);
	$state = mysqli_real_escape_string($con,$_POST['state']);
	$zip = mysqli_real_escape_string($con,$_POST['zip']);
	$number = mysqli_real_escape_string($con,$_POST['number']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$present = mysqli_real_escape_string($con,$_POST['present']);
	
	if($present == "Presenter" || $present == "Student"){
	
		$papers = mysqli_real_escape_string($con,$_POST['papers']);
	
	}	
	else{
		$papers = 0;
	}
	
	$message = "Please use numerals only for zipcode, phone number, and number of papers.";
	
  if(!is_numeric($zip) || !is_numeric($number)){
	exit("<script type='text/javascript'>alert('$message');history.go(-1)</script>"); 
  }
  else{
	  
	  $query = "INSERT INTO `registration`(fname,lname,title,organization,address,city,state,zipcode,phoneNumber,email,presenterType, papers) VALUES ('$first','$last','$title','$org','$address','$city','$state','$zip','$number','$email','$present', '$papers')";
  
	 mysqli_query($con,$query);

	 mysqli_close($con);
  }
	}
?>

<?php

	if($present == "Presenter"){
		$amount = 700 + 350 * ($papers - 1);
	}
	else if($present == "Student"){
		$amount = 400 + 200 * ($papers - 1);
	}
	else{
		$amount = 0;
	}
	
?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>

<?php
	$outstr = '';
	
	if($present == "Attendee"){
		$outstr = '<div id = "payment-form">';
		$outstr .='<div id = "thankyou" style = "position: relative;top: 160px;left: 108px;font-size: 32px;">THANK YOU and enjoy!</div>';
		$outstr .='</div>';
	}
	else{
		$outstr  = '<form id = "payment-form" onsubmit = "return submitCheck()" action = "payment-form.php" method = "post">';
		$outstr .= '<div id = "payment-title">Credit Card Payment</div>';
		$outstr .= '<p style =  "font-size: 20px; font-family: Tahoma, Times, Arial;position: relative; left: 350px;width: 100px">Amount:<span id = "amount" style = "position: relative; left: 20px;">$'.$amount.'</span></p>';
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
		
	}
	echo $outstr;
?>

				
</body>

<?php include('footer.html'); ?>
