<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php

if(isset($_POST['upload']) && $_FILES['form_data']['size'] > 0)
{
	 require("connect.php");
	
	$paper_title = mysqli_real_escape_string($con,$_POST['paper_title']);
	$majorarea = mysqli_real_escape_string($con,$_POST['majorarea']);
	$subarea = mysqli_real_escape_string($con,$_POST['subarea']);
	$fileName = $_FILES['form_data']['name'];
	$tmpName  = $_FILES['form_data']['tmp_name'];
	$fileSize = $_FILES['form_data']['size'];
	$fileType = $_FILES['form_data']['type'];
	
	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	
		
	if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

	$queryFile = "INSERT INTO upload (name, size, type, data, paperTitle, majorarea, subarea) VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$paper_title', '$majorarea', '$subarea')";

	mysqli_query($con, $queryFile) or die('Error, query failed');

      mysqli_close($con); 
	}

?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>
<?php
	$outstr = '';
		$outstr = '<div id = "payment-form">';
		$outstr .='<div id = "thankyou" style = "position: relative;top: 160px;left: 108px;font-size: 32px;">THANK YOU and enjoy!</div>';
		$outstr .='</div>';
		
	echo $outstr;
?>
</body>

<?php include('footer.html'); ?>