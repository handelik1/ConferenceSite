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
	
	
	$username= mysqli_real_escape_string($con,$_POST['username']);
    $password= mysqli_real_escape_string($con,$_POST['password']);

	$epassword= hash('sha256', $password);
	
	$logQuery= "SELECT * FROM reviewers WHERE username= '$username' and password= '$epassword'";
	
	$result = mysqli_query($con, $logQuery);
	
	$count= mysqli_num_rows($result);
	//checks if row is queried
	if($count==1){
	$_SESSION['username'] = $username;
	
	
	header("Location: index.php");

	}
	else {
	echo '<script>alert("Wrong username or password!")</script>';
	echo '<div style = "position: relative;left: 550px;top: 125px;font-size: 32px;">Please click on Reviewer Login to try again!</div><br><br><br><br><br><br><br><br><br>';
	}
	
	
	      mysqli_close($con); 
?>
	
</body>

<?php include('footer.html'); ?>
