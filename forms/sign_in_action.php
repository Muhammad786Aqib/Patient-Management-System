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
session_start();
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];



$result = mysql_query("SELECT * FROM sign_up where user_name='$user' AND BINARY pass='$pass' ");
 while($row = mysql_fetch_array($result))
{ 
$dept=$row['dept'];

$_SESSION['DPT'] = $row['dept'];
$_SESSION['USER'] = $row['user_name'];
$_SESSION['PASS'] = $row['pass'];
$_SESSION['ID'] = $row['sr_no'];
  }

  
//echo $_REQUEST['path'];
  
  
if ($dept=="appointment"){
header("location:appointment.php");
exit;
}
else if ($dept=="prescription"){
header("location:prescription.php");
exit;
}
else if ($dept=="reception"){
header("location:reception.php");
exit;
}
else if ($dept=="room_allotment"){
header("location:reception.php");
exit;
}
else if ($dept=="room_services"){
header("location:room_services.php");
exit;
}
else if ($dept=="pharmacy"){
header("location:pharmacy.php");
exit;
}
else if ($dept=="laboratory"){
header("location:laboratory.php");
exit;
}
else if ($dept=="billing"){
header("location:bill.php");
exit;
}
else if ($dept=="admin"){
header("location:admin.php");
exit;
}
else {
header("location:sign_in.php?info=Wrong username/password!");
exit;}

?>