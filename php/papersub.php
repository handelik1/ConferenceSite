<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<script type="text/javascript">
    function showForm() {
        var seloption = document.getElementById("option").value;
				if (seloption == "Programming Language") {
					document.getElementById("f1").style.display = "block";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option1").setAttribute("name","subarea");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","")
					document.getElementById("option1").required = true;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = false;
					
		}
				else if (seloption == "AI") {
					document.getElementById("f2").style.display = "block";
					document.getElementById("f1").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option2").setAttribute("name","subarea");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = true;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = false;

		}
		        else if (seloption == "Image Processing") {
					document.getElementById("f3").style.display = "block";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f1").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option3").setAttribute("name","subarea");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = true;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = false;


        }
		        else if (seloption == "Big Data") {
					document.getElementById("f4").style.display = "block";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f1").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option4").setAttribute("name","subarea");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = true;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = false;
        }
		        else if (seloption == "Mobile Computing") {
					document.getElementById("f5").style.display = "block";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f1").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option5").setAttribute("name","subarea");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = true;
					document.getElementById("option6").required = false;
        }
		        else if (seloption == "HCI") {
					document.getElementById("f6").style.display = "block";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f1").style.display = "none";
					document.getElementById("option6").setAttribute("name","subarea");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = true;
        }
        else {
					document.getElementById("f1").style.display = "none";
					document.getElementById("f2").style.display = "none";
					document.getElementById("f3").style.display = "none";
					document.getElementById("f4").style.display = "none";
					document.getElementById("f5").style.display = "none";
					document.getElementById("f6").style.display = "none";
					document.getElementById("option3").setAttribute("name","");
					document.getElementById("option1").setAttribute("name","");
					document.getElementById("option2").setAttribute("name","");
					document.getElementById("option4").setAttribute("name","");
					document.getElementById("option5").setAttribute("name","");
					document.getElementById("option6").setAttribute("name","");
					document.getElementById("option1").required = false;
					document.getElementById("option2").required = false;
					document.getElementById("option3").required = false;
					document.getElementById("option4").required = false;
					document.getElementById("option5").required = false;
					document.getElementById("option6").required = false;
        }
    }
</script>


<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>
<?php
	$outstr = '';

		$outstr  = '<form id = "upload-form" action = "upload.php" method = "post" enctype="multipart/form-data">';
		$outstr .= '<div id = "payment-title">Paper Submission</div>';
		$outstr .= '<label>Upload Document</label>';
		$outstr .= '<input type="hidden" name="MAX_FILE_SIZE" value="2000000">';
		$outstr .= '<input type="file" name="form_data" size="40" required>';
		$outstr .= '<label>Title of Paper</label>';
		$outstr .= '<input type="text" id = "papert" name="paper_title" size="40" required> ';
		$outstr .= '<label>Major Area</label>';
		$outstr .= '<select id = "option" name = "majorarea" onchange="showForm()" required>
						    <option value="">Select Option</option>
							<option value="Programming Language">Programming Languages</option>
							<option value="AI">AI</option>
							<option value="Image Processing">Image Processing</option>
							<option value="Big Data">Big Data</option>
							<option value="Mobile Computing">Mobile Computing</option>
							<option value="HCI">HCI</option>
						 </select>';
		$outstr .= '<label>Subarea</label>';
		
		$outstr .= '
					<div id="f1" style="display:none">
							<select id="option1" >
						<option value="">Select Option</option>
						<option value="Java">Java</option>
						<option value="Ruby">Ruby</option>
						<option value="Python">Python</option>
						<option value="MySQL">MySQL</option>
						<option value="C++">C++</option>
							</select>
					</div>

					<div id="f2" style="display:none">
							<select id="option2" >
						<option value="">Select Option</option>
						<option value="Machine Learning">Machine Learning</option>
						<option value="Evolutionary Computation">Evolutionary Computation</option>
						<option value="Swarm Intelligence">Swarm Intelligence</option>
						<option value="The Self Driving Car">The Self Driving Car</option>
							</select>
					</div>
					
					<div id="f3" style="display:none">
							<select id="option3" >
						<option value="">Select Option</option>
						<option value="Perception">Perception</option>
						<option value="Sampling Theory">Sampling Theory</option>
						<option value="Geometric Transformations">Geometric Transformations</option>
						<option value="Object Detection/Tracking">Object Detection/Tracking</option>
						<option value="Thresholding">Thresholding</option>
							</select>
					</div>
					
					<div id="f4" style="display:none">
							<select id="option4" >
						<option value="">Select Option</option>
						<option value="Big Data Tools">Big Data Tools</option>
						<option value="Datamining">Datamining</option>
						<option value="Algorithms">Algorithms</option>
							</select>
					</div>
					
					<div id="f5" style="display:none">
							<select id="option5" >
						<option value="">Select Option</option>
						<option value="Android Operating Systems">Android Operating Systems</option>
						<option value="OSX">OSX</option>
						<option value="Smart SOS">Smart SOS</option>
						<option value="Wireless Security Issues">Wireless Security Issues</option>
							</select>
					</div>
					
					<div id="f6" style="display:none">
							<select id="option6">
						<option value="">Select Option</option>
						<option value="Interaction Design">Interaction Design</option>
						<option value="HCI Applications">HCI Applications</option>
						<option value="Graphical User Interfaces (GUI)">Graphical User Interfaces (GUI)</option>
						<option value="Ubiquitous Computing">Ubiquitous Computing</option>
						<option value="Habituation">Habituation</option>
							</select>
					</div>
					<input name="upload" type = "submit" value = "SUBMIT"></form>';
		
		echo $outstr;
?>
</body>

<?php include('footer.html'); ?>
