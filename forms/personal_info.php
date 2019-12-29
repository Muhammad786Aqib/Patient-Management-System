<body style="background:url(include/bg1.jpg);">
<?php
require_once('include/config.php');
$id = $_REQUEST['id'];
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DATABASE);
$q = mysql_query("SELECT * FROM sign_up where sr_no=$id");

$res = mysql_fetch_array($q);

$name = $res['user_name'];
$dpt = $res['dept'];

include_once("include/nav1.php");

echo "Welcome ".$name;

echo "<br>Department of ".$dpt;



?>

<a href ="sign_out.php">Sign OUT</a>


