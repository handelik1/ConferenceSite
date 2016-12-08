<?php if (!isset($_SERVER['HTTPS'])) {
	$url = 'https://' .                
	$_SERVER['HTTP_HOST'] .                
	$_SERVER['REQUEST_URI'];          
	header("Location: " . $url);          
	exit();
	} 
	?> 
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
		//displays login form
		$outstr  = '<form id = "login-form" action = "logincheck.php" method = "post">';
		$outstr .= '<div id = "review-title">Reviewer Login</div>';
		$outstr .= '<label>Username</label><input id = "username" type="text" name="username" size = "40" style = "width: 200px;" required><br><br>';
		$outstr .= '<label>Password</label><input id = "password" type="password" name="password" size = "40" style = "width: 200px;"  required>';
		$outstr .= '<input type = "submit" name = "submit" value = "Login">';
		$outstr .= '</form>';
	
	echo $outstr;
	
?>

</body>

<?php include('footer.html'); ?>
