<body style="background:url(include/bg1.jpg);">

<?php
session_start();
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
$p_id=$_SESSION['pr'];
$symptoms=$_POST['symptoms'];
$prescription=$_POST['prescription'];
$remarks=$_POST['remarks'];
$test_type=$_POST['test_type'];
$dte=date('Y-m-d');

$sql="INSERT INTO prescription (p_id,symptoms,prescription,remark,date,test)
VALUES
('$p_id','$symptoms','$prescription','$remarks','$dte','$test_type')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

?>
<?php require_once("include/nav1.php"); ?>

Data is inserted successfully
<p><a href="prescription.php"><b>Go back to PRESCRIPTION</b></a></p>
