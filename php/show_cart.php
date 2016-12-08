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

<?php
	require("connect.php");
	
	
	$outstr = '';

	include("shopping_cart.php");
	
		echo $outstr;
	mysqli_close($con);
	
?>


</body>

<?php include('footer.html'); ?>