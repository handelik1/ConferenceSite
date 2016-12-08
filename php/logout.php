<?php
session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        die("Redirecting to login.php");
    }
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

	unset($_SESSION["username"]); 
	header("Location: index.php");

?>


</body>

<?php include('footer.html'); ?>