<head><title>Authentication update</title>
<meta http-equiv="Content-Language" content="en-us">
<style type="text/css">
.style1 {
	font-size: x-large;
}
.style2 {
	font-size: small;
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

$dept=$_POST['dept'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];

$result = mysql_query("SELECT * FROM authentication where dept='$dept' ");
 while($row = mysql_fetch_array($result))
{ 
$code=$row['code'];
  }
if ($code=="$opass")
{
	mysql_query("update authentication set code='$npass' where dept='$dept' AND code='$opass'");
}
else{
header("location:error.php");
exit;
}


?>
<p class="style1"><strong>Data has been successfully updated</strong></p>
<p class="style1"><strong><span class="style2"><a href="authentication.php">Go Back</a></span></strong></p>
