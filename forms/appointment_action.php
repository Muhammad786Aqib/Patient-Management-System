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
$pname=$_POST['pname'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$cnic=$_POST['cnic'];
$dname=$_POST["dname"];
$date=date('Y-m-d');

$sql="INSERT INTO app (name,fname,age,sex,cnic,dname,date)
VALUES
('$pname','$fname','$age','$sex','$cnic','$dname','$date')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
 

header("Location:appointment_detail.php?cnic=$cnic");
exit;

?>