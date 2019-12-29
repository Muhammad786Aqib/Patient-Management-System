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

 $target = "\images"; 
 $target = $target . basename( $_FILES['photo']['test_report']);
$test_type=$_SESSION['lab12'];
$phot=$_POST['photo'];
$p_id=$_SESSION['lab'];
$date=date('Y-m-d');

$sql="INSERT INTO laboratory (test_type,p_id,date,photo)
VALUES
('$test_type','$p_id','$date','$phot')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  
   }
header("Location:laboratory_detail.php");
exit;

  ?>