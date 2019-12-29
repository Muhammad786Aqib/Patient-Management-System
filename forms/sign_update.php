<head>
<title>Sign up update</title><meta http-equiv="Content-Language" content="en-us">
<style type="text/css">
.style1 {
	font-size: x-large;
}
.style2 {
	font-size: small;
}
.style3 {
	font-size: xx-large;
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

$ouser=$_POST['ouser'];
$opass=$_POST['opass'];
//$nuser=$_POST['nuser'];
$deptt=$_POST['deptt'];
$n_pass=$_POST['npass'];

$result = mysql_query("SELECT * FROM sign_up where user_name='$ouser' AND dept='$deptt'");
 while($row = mysql_fetch_array($result))
{ 
$pass1=$row['pass'];
  }
//if($nuser==""){$nuser=$ouser;}
if($n_pass==""){$n_pass=$opass;}
if($pass1=="$opass")

{
//mysql_query("update sign_up set user_name='$nuser' where user_name='$ouser' AND dept='$deptt'");
mysql_query("update sign_up set pass='$n_pass' where user_name='$ouser' AND dept='$deptt'");
}
else {
header("Location:error1.php");
exit;
}
?>
<body>
<?php include_once("include/nav1.php"); ?>
<center>
<p class="style3"><strong>Data has been successfully updated !</strong></p>
<table>
<tr>
<td><strong>Username:</strong></td>
<td><?php echo $ouser ?></td>
</tr>
<tr>
<td><strong>Password:</strong></td>
<td><?php echo $n_pass ?></td>
</tr>
<tr>
<td><strong>Department:</strong></td>
<td><?php echo $deptt ?></td>
</tr>

</table>
</body>


<p class="style1"><strong><span class="style2"><a href="sign_in.php">Go Back</a></span></strong></p>