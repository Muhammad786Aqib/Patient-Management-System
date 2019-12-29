
<head>
<style type="text/css">
.style1 {
	font-size: xx-large;
}
.style2 {
	font-size: small;
}
</style>
</head>
<body style="background:url(include/bg1.jpg);">
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

$res = mysql_fetch_array(mysql_query("select * from medicine where m_name='$mname';"));
if($res != "")
{
	include_once("include/nav1.php");
	
	echo "<center><br><br><label style='color:white;'>This medicine already exists</label></center>";
}
else
{
	$sql="INSERT INTO medicine (m_name,m_price) VALUES ('$mname','$mprice')";
	if (!mysql_query($sql))
	  {
	  die('Error: ' . mysql_error());
	  
	  
	  }?>
	  <?php require_once("include/nav1.php"); ?>
	  
	<?php include_once("include/table_styles.php"); ?>
	  <p class="style1">DATA INSERTED SUCCESSFULY</p>
	<p class="style2"><a href="medicine.php">GO BACK</a></p>
<?php
} 
 ?>