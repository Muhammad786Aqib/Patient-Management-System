<?php
SESSION_start();
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

$pay=$_POST['payment'];
$price=$_POST['price'];
$p_id=$_SESSION['ph'];
$date=date('Y-m-d');

$_SESSION['ph1']="$price";
$_SESSION['ph2']="$pay";
$_SESSION['ph3']="$p_id";
$sql="INSERT INTO pharmacy (payment,p_id,price,date)
VALUES
('$pay','$p_id','$price','$date')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  
  header("location:pharmacy_detail.php");
  exit;
  
  ?>