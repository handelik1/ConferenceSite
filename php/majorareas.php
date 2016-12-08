<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>

<body>
		<div id = "areas-of-research">Areas Of Research</div>
	<div id = "topic-wrapper">
		<div class = "major-topic">
			<h2>Programming Languages</h2>
				<ol>
					<li>Java</li>
					<li>Ruby</li>
					<li>Python</li>
					<li>MySQL</li>
					<li>C++</li>
				</ol>
		</div>
		<div class = "major-topic">
			<h2>Artificial Intelligence</h2>
				<ol>
					<li>Machine Learning</li>
					<li>Evolutionary Computation</li>
					<li>Swarm Intelligence</li>
					<li>The Self Driving Car</li>
					<br>
				</ol>
		</div>
		<div class = "major-topic">
			<h2>Image Processing</h2>
				<ol>
					<li>Perception</li>
					<li>Sampling Theory</li>
					<li>Geometric Transformations</li>
					<li>Object Detection/Tracking</li>
					<li>Thresholding</li>
				</ol>
		</div>
		<div class = "major-topic">
			<h2>Big Data</h2>
				<ol>
					<li>Big Data Tools</li>
					<li>Datamining</li>
					<li>Algorithms</li>
					<br>
					<br>
				</ol>
		</div>
		<div class = "major-topic" id = "mobile">
			<h2>Mobile Computing</h2>
				<ol>
					<li>Android Operating Systems</li>
					<li>OSX</li>
					<li>Smart SOS</li>
					<li>Wireless Security Issues</li>
					<br>
				</ol>
		</div>
		<div class = "major-topic" id = "human-c">
			<h2>Human-Computer Interaction (HCI)</h2>
				<ol>
					<li>Interaction Design</li>
					<li>HCI Applications</li>
					<li>Graphical User Interfaces (GUI)</li>
					<li>Ubiquitous Computing</li>
					<li>Habituation</li>
				</ol>
		</div>
	</div>
</body>

<?php include('footer.html'); ?>