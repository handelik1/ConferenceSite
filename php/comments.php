<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<?php  
  
  require("connect.php");
  
  $comment = mysqli_real_escape_string($con,$_POST['comment']);

  $query = "INSERT INTO `comments`(feedbackText) VALUES ('$comment')";
 
  $result = mysqli_query($con, $query);
  
  mysql_query($query);

  mysqli_close($con);
  
?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>
			<div id = "comments">Comments/Feedback</div><br>
				<div id = "feedback"><?php echo "Thank you for your feedback!" ?></div>
			<img alt = "Hope You Enjoyed This Year's Conferences" id = "comment-pic" src="commentpic.png">
			<br><br><br><br><br><br><br>
			
</body>

<?php include('footer.html'); ?>

