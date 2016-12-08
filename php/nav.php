<?php
if(!isset($_SESSION['username'])){

$outstr = '';

$outstr .= '<nav>
	<p>Explore Our Site</p>
	<ul>
		<li><a href = "index.php">Home</a></li>
		<li><a href = "registration.php" >Online Registration</a></li>
		<li><a href = "login.php">Reviewer Login</a></li>
		<li><a href = "keynote.php">Keynote Speakers</a></li>
		<li id = "general"><a>General Information &#9655;</a></li>
		<li><a href = "callforpapers.php">Call For Paper</a></li>
		<li><a href = "importantdates.php">Important Dates</a></li>
		<li><a href = "majorareas.php">Major Areas</a></li>
		<li><a href = "papersub.php">Paper Submission</a></li>
		<li><a href = "shop.php">Book Store</a></li>
		<li><a href = "program.php">Conference Program</a></li>
		<li><a href= "authorsguide.php">Guidelines</a></li>
		<li><a href = "comments1.php">Comments and Feedback</a></li>
		<div class = "dropdown-menu" id = "dropdown">
			<ul>
				<li><a href = "about.php">About</a></li>
				<li><a href = "fee.php">Conference Fee</a></li>
				<li><a href = "location.php">Hotel Info</a></li>
			</ul>
		</div>

</nav>';
echo $outstr;
}
else{
$outstr = '';

$outstr .= '<nav>
	<p>Explore Our Site</p>
	<ul>
		<li><a href = "index.php">Home</a><a style = "position: relative; left: 90px;" href = "logout.php">Log Out</a></li>
		<li><a href = "registration.php" >Online Registration</a></li>
		<li><a href = "reviewerPage.php">Review Papers</a></li>
		<li><a href = "keynote.php">Keynote Speakers</a></li>
		<li id = "general"><a>General Information &#9655;</a></li>
		<li><a href = "callforpapers.php">Call For Paper</a></li>
		<li><a href = "importantdates.php">Important Dates</a></li>
		<li><a href = "majorareas.php">Major Areas</a></li>
		<li><a href = "papersub.php">Paper Submission</a></li>
		<li><a href = "shop.php">Book Store</a></li>
		<li><a href = "program.php">Conference Program</a></li>
		<li><a href= "authorsguide.php">Guidelines</a></li>
		<li><a href = "comments1.php">Comments and Feedback</a></li>
		<div class = "dropdown-menu" id = "dropdown">
			<ul>
				<li><a href = "about.php">About</a></li>
				<li><a href = "fee.php">Conference Fee</a></li>
				<li><a href = "location.php">Hotel Info</a></li>
			</ul>
		</div>

</nav>';

echo $outstr;

}
?>
