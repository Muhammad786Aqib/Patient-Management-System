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

$test=$_POST['test'];
$rate=$_POST['rate'];

$sql="INSERT INTO test_types (test_type,rate)
VALUES
('$test','$rate')";
if (!mysql_query($sql))
  {
  $info = '<span style="color:red;">Record already exits</span> ';
  
  
  }
  else
	  $info = "Record $test inserted succesfully";
  
  
  header("location:test_types.php?info=".$info);
  exit;
  
  ?>
