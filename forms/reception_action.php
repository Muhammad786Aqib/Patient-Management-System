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
$p_ii=$_SESSION['p'];
$con=$_POST['contact'];
$add=$_POST['address'];
$room_type=$_POST['room'];
$room_no=$_POST['room_no'];
if($room_no == "")
{
	header("Location:reception_detail1.php?p_id=".$p_ii."&info=please select room no");
	exit;
}
$date=date('Y-m-d');


$_SESSION['pii1']="$con";
$_SESSION['pii2']="$add";
$_SESSION['pii3']="$add";
$_SESSION['ra1']="$room_type";
$_SESSION['ra2']="$room_no";

$sql1="INSERT INTO room_allotment (p_id,room_type,room_no,contact,address,date)
VALUES('$p_ii','$room_type','$room_no','$con','$add','$date')";

if (!mysql_query($sql1))
  {
  die('Error: ' . mysql_error());
  }

header("Location:reception_detail.php?p_id=".$p_ii."&info=Room is allocated");
exit;
  
  ?>
 
