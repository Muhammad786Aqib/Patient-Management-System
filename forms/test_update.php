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
		header("location:test_types.php?info=Unable to select database");exit; 
				}

$ttype=$_POST['test_type'];
$price=$_POST['nprice'];

mysql_query("update test_types set rate='$price' where test_type='$ttype'");

header("location:test_types.php?info=Record is updated");exit;

?>
