<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Patient Management System</title>
<style type="text/css">
.style1 {
	font-size: x-large;
}
</style>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
.style3 {
	font-size: 42pt;
}
.style4 {
	font-size: small;
}
</style>
</head>
<body>

		<?php require_once("include/nav1.php"); ?>

</body>
<div class='pic1'>
<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>About this<span> HEALTHY AND SAFE</span></h3>
							<p>
								<b>Our project Patient Management System includes registration of patients ,<br>,storing their details into the system and also computerized billing in the 
								pharmacy,and labs </b></p>
							<div class="read text-center"><a href="info.php" class="hvr-outline-out button2">FOR MORE INFORMATION...</a></div>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>BETTER HEALTH CARE IS CLOSER<span><!--THAN YOU THINK</span>--> </h3>
							<!-- <p> #</p> -->
							<div class="read text-center"><a href="info.php" class="hvr-outline-out button2">FOR MORE INFORMATION...</a></div>
						</div>
					</li>
				</ul>
			</div>
</div>

<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
</html>
