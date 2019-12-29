<head>
<meta http-equiv="Content-Language" content="en-us">
<style type="text/css">
.style1 {
	font-size: x-large;
}
.style2 {
	font-size: small;
}
</style>
</head>
<body style="background:url(include/bg1.jpg);">
<?php
require_once('include/config.php');
//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}

	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
				}

$medicine=$_POST['medicine'];
$price=$_POST['mprice'];

mysql_query("update medicine set m_price='$price' where m_name='$medicine'");


?>
<?php require_once("include/nav1.php"); ?>
<p class="style1"><strong>Data has been successfully updated</strong></p>
<p class="style1"><strong><span class="style2"><a href="medicine.php">Go Back</a></span></strong></p>
