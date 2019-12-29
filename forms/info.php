<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Information Center</title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
.style3 {
	width: 1200px;
	margin: 0px auto;
	font-size: 14pt;
}
.style4 {
	font-size: small;
}
.style5 {
	font-size: 42pt;
	color: green;
}
.style6 {
	font-size: large;
}
</style>
</head>
<body>
<?php require_once("include/nav1.php"); ?>


<div class="welcome-grids">
	<div class="container">
		<h3 class="tittle">THE OPTIONS YOU HAVE</h3>
			<div class="col-md-3 welcome-grid text-center">
				<div class="ih-item circle effect1 left_to_right"><a href="doctor_detail.php">
					<div class="img"><img src="images/22.jpg" alt="" /></div>
					<div class="info">
					  <h4>DOCTOR'S INFORMATION</h4>
					  <p>Doctors info. with their fee structure </p>
					</div></a>
				</div>
			</div>
			<div class="col-md-3 welcome-grid text-center">
				<div class="ih-item circle effect11 left_to_right"><a href="medicine_detail.php">
					<div class="img"><img src="images/3.jpg" alt="" /></div>
					<div class="info">
					  <h4>MEDICINE INFORMATION</h4>
					  <p>Medicine info. with their price</p>
					</div></a>
				</div>
			</div>
			<div class="col-md-3 welcome-grid text-center">
				<div class="ih-item circle effect9 left_to_right"><a href="test_detail.php">
					<div class="img"><img src="images/2.jpg" alt="" /></div>
					<div class="info">
					  <h4>INFORMATION ABOUT TEST TYPES</h4>
					  <!--<p>Test information with their price</p> -->
					</div></a>
				</div>
			</div>
			<div class="col-md-3 welcome-grid text-center">
				<div class="ih-item circle effect3 left_to_right"><a href="search.php">
					<div class="img"><img src="images/111.jpg" alt="" /></div>
					<div class="info">
					  <h4>SEARCH</h4>
					  <p>Search patient by Name or CNIC</p>
					</div></a>
				</div>
			</div>
			<div class="clearfix"></div>
	</div>
</div>

<!--
<div id="page" class="style3" style="height:350px; background-image:url(images/doctor.jpg)">
<strong><span class="style5">INFORMATION CENTER:</span><br>
<br>
<span class="style6"><a href="doctor_detail.php">Information about Doctors</a></span><br>
<span class="style4"><br>
</span><span class="style6"><a href="medicine_detail.php">Information about medicine</a></span><span class="style4"><br>
<br>
</span><span class="style6"><a href="test_detail.php">Information about Test types</a></span><br>
<span class="style4"><br>
</span><span class="style6"><a href="search.php">Search patient using Name</a><br>
</span></strong><br>
<a href="cnic.php"><span class="style6"><strong>Search patient through cnic</strong></span></a>
</div>
-->
</body>
</html>
