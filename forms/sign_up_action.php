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

$user=$_POST['user'];
$pass=$_POST['password'];
$dept=$_POST['dept'];
$auth=$_POST['authentication'];
$feedback = "";

if(!isset($user) || $user == "")
{
header("location:sign_up.php?fb=Please enter username");
exit;	
}
else if(!isset($pass) || $pass == "")
{
header("location:sign_up.php?fb=Please enter password");
exit;	
}

$res = mysql_fetch_array(mysql_query("select * from sign_up where user_name='$user'"));
if($res != "")
{
	header("location:sign_up.php?fb=User already exists");
	exit;	
}

$result = mysql_query("SELECT * FROM authentication where dept='$dept' ");
 while($row = mysql_fetch_array($result))
{ 
$code=$row['code'];
  }
  if ($code==$auth || $dept != "super"  ){

$sql="INSERT INTO sign_up (user_name,pass,dept)
VALUES
('$user','$pass','$dept')";
if (!mysql_query($sql))
  {
  //die("Department already exists");
  $feedback = "Department already exists";
  header("location:sign_up.php?fb=".$feedback);
  exit;
  }
  }else {
	$feedback = "Wrong authentication code provided";
  header("location:sign_up.php?fb=".$feedback);
  exit;}
  
  header("location:sign_in.php?info=New account $user is saved!");
  
  ?>
  
