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

				<form id = "registration-form" action = "payment.php" method = "post">
								<div id = "registration">Online Registration</div>
					<label>First Name</label>
					<input type="text" name="first" placeholder = "First Name" required>
					<label>Last Name</label>
					<input type="text" name="last" placeholder = "Last Name" required><br><br>
					<label>Title</label>
					<input type="text" name="title" placeholder = "Title" required>
					<label>Organization</label>
					<input type="text" name="org" placeholder = "Organization"  required><br><br>
					<label>Address</label>
					<input type="text" name="address" placeholder = "Address" required>
					<label>City</label>
					<input type="text" name="city" placeholder = "City" required><br><br>
					<label>State</label>
					<input type="text" name="state" placeholder = "State" required>
					<label>ZIP Code</label>
					<input type="text" name="zip" placeholder = "ZIP Code" required><br><br>
					<label>Phone Number</label>
					<input type="text" name="number" placeholder = "Numbers only please" required>
					<label>Email</label>
					<input type="text" name="email" placeholder = "Email Address" required><br><br>
					<h3>Select One</h3><br>
					<input type="radio" value = "Presenter" name = "present"onclick="document.getElementById('paper').disabled = false;document.getElementById('paper').value = ''" required><label class = "radio-label">Presenter</label>
					<input type="radio" value = "Student" name = "present" onclick="document.getElementById('paper').disabled = false;document.getElementById('paper').value = ''"><label class = "radio-label">Student</label>
					<input id = "attend" type="radio" value = "Attendee" name = "present" onclick="document.getElementById('paper').disabled = true;document.getElementById('paper').value = ''"><label class = "radio-label">Attendee</label><br>
					<input id = "paper" type="text"  name = "papers" size= "2" style = "width: 40px; position: relative; left:367px;top:-26px" required><label style = "width: 150px; position: relative; left:155px;top:-26px">Number of Papers</label>
					<br>
					<input id = "sub" type = "submit" name = "continue" value = "Continue">
	  		</form>
</body>

<?php include('footer.html'); ?>
