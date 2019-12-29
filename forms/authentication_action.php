
<head>
<meta http-equiv="Content-Language" content="en-gb">
<style type="text/css">
.style1 {
	font-size: large;
}
.style2 {
	font-size: small;
}
</style>
</head>

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

$code=$_POST['code'];
$dept=$_POST['dept'];

$sql="INSERT INTO authentication(code,dept) VALUES ('$code','$dept')";

?><p class="style1"><strong>Data Inserted succesfully!</strong></p>
<p class="style2"><a href="authentication.php">Go BACK</a></p>


