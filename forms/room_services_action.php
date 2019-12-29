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
$p_id=$_SESSION['pii'];

$symp=$_POST['symptoms'];
$pcondition=$_POST['pcondition'];
$pres=$_POST['prescription'];
$rcharges=$_POST['rcharges'];
$charges=$_POST['cdetail'];
$temp=$_POST['temprature'];
$bp=$_POST['bp'];
$date=date('Y-m-d');

$_SESSION['pii']="$p_id";
$_SESSION['pii1']="$symp";
$_SESSION['pii2']="$pcondition";
$_SESSION['pii3']="$pres";
$_SESSION['pii4']="$rcharges";
$_SESSION['pii5']="$charges";
$_SESSION['pii6']="$temp";
$_SESSION['pii7']="$bp";

$sql="INSERT INTO room_services (symptoms,present,prescription,rcharges,charges,temprature,bp,p_id,date)
VALUES
('$symp','$pcondition','$pres','$rcharges','$charges','$temp','$bp','$p_id','$date')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  
  
  
  header("location:room_services_detail.php");
  exit;

  
  ?>