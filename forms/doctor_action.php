
<head>
<style type="text/css">
.style1 {
	font-size: xx-large;
}
.style2 {
	font-size: x-small;
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

$mname=$_POST['mname'];

$mprice=$_POST['mprice'];
$date=date("Y-m-d");
$sql="INSERT INTO doctor (d_name,d_fee,date)
VALUES
('Dr. $mname','$mprice','$date')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  
  
  }
  include_once("include/nav1.php");
  ?><p class="style1">DATA INSERTED SUCCESSFULLY</p>
<p class="style2"><a href="doctor.php">GO BACK</a></p>
