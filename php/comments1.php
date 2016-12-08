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
			<div id = "comments">Comments/Feedback</div><br>
				<form id = "comment-form" action = "comments.php" method = "post">
					 <textarea rows="10" cols="50" placeholder = "Please provide any comments or feedback to help us improve next year's conferences. Thank you!" name = "comment"></textarea> 
					 <input type = "submit" id = "comment-submit" value = "SUBMIT"/>
				</form>
			<img alt = "Hope You Enjoyed This Year's Conferences" id = "comment-pic" src="commentpic.png">
			
</body>

<?php include('footer.html'); ?>
