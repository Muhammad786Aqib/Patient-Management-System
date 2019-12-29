<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Search by name</title>

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
	text-align: center;
}
</style>
</head>
<body style ="background:url(include/bg1.jpg);">
<?php require_once("include/nav1.php"); ?>
<center>
<div class="container">
	<div id="page" class="style3 searchBox1" style="float:left;margin-left:20%;">
		<form method="post" action="search_detail.php">
			
			Name:<input name="pname" type="text">
			<br>
			<input type='checkbox' name='onlyAdmitted' id='oa' value='yes'><label for='oa'>Only admitted</label>
			<br>
			<br>
			<input name="Submit1" type="submit" value="search">
		</form>
	</div>
	<div id="page" class="style3 searchBox1" style="float:left;margin-left:10px;">
		<form method="post" action="search_detail_cnic.php">
			
			Enter CNIC:<input name="pcnic" type="text" required="required" pattern="[0-9]{13}"  maxlength=13/>
			<br>
			<input type='checkbox' name='onlyAdmitted1' id='ob' value='yes'><label for='ob'>Only admitted</label>
			<br>
			<br>
			<input name="Submit1" type="submit" value="search">
		</form>
	</div>
</div>
</center>
</body>
</html>
