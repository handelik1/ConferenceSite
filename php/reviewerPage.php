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
	 
	 	$outstr = '';
	 	$outstr .= '<h1 id = "reviewer-title">Thank you for reviewing these papers!</h1>';
		$outstr .= '<div style = "position: relative; left:630px; top: 170px; font-size: 20px">The names of the papers you will be reviewing are:</div></br>';
		$outstr .= '<table style = "position: relative; left:780px; top: 170px; background-color: none; border: none">';
		if($_SESSION['username'] == 'reviewer1')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'Programming Language' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';

			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }
		 
		 if($_SESSION['username'] == 'reviewer2')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'AI' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';
			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }
		 
		 if($_SESSION['username'] == 'reviewer3')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'Image Processing' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';

			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }
		 
		 if($_SESSION['username'] == 'reviewer4')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'Big Data' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';

			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }

		 if($_SESSION['username'] == 'reviewer5')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'Mobile Computing' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';

			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }

		 if($_SESSION['username'] == 'reviewer6')
		 {
			$uploadQuery = mysqli_query($con, "SELECT paperTitle FROM upload WHERE majorarea = 'HCI' ") or die (mysql_error());
			foreach($uploadQuery as $b){
				$outstr .= 
								'<tr>
									<td style = "background-color: white">'.$b['paperTitle'].'</td>
								</tr>';

			}
			$outstr .= 	'</table><br><br>';
		 //displays link to zip file
		 if(isset($_SESSION['username']))
		 {

					$outstr	.=	'<p id ="reviewer-text">Below are zipped files containing the papers you must review. Enjoy!</p>';
					$outstr .= '<a style = "position: relative; left:770px; top: 170px" href = "download.php">Download Paper(s)</a><br><br><br><br><br><br><br><br><br>';
		 }
		 
		 }

	 echo $outstr;
	
?>

</body>

<?php include('footer.html'); ?>

