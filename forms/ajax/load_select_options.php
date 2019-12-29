<?php
require_once('../include/config.php');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db = mysql_select_db(DB_DATABASE);
$room_type = $_REQUEST['room_type'];
//echo "<option>$room_type</option>";


$q;
switch($room_type)
{
	case "general":
	
	$q = mysql_query('SELECT DISTINCT room_no FROM general_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="general")'); 
	break;
	case "vip":
	$q = mysql_query('SELECT DISTINCT room_no FROM vip_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="vip")');		
	break;
	case "executive":
	$q = mysql_query('SELECT DISTINCT room_no FROM executive_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="executive")'); 
	break;
	case "reserved":
	$q = mysql_query('SELECT DISTINCT room_no FROM reserved_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="reserved")'); 
	break;
	default:
	//$q = mysql_query('SELECT DISTINCT room_no FROM reserved_room'); 
}
while($res = mysql_fetch_array($q))
	echo "<option>$res[0]</option>";

?>