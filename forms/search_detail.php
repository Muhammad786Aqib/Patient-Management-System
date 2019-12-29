<html>
<head><title>Search by name</title></head>
<body style="background:url(include/bg1.jpg);">

<?php require_once("include/nav1.php"); ?>
<?php

session_start();
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
				
    		
				?>
				
<?php 
$pname=$_REQUEST['pname'];
$onlyAdmitted = $_REQUEST['onlyAdmitted'];
if($onlyAdmitted == "yes")
	$result3 = mysql_query("SELECT * FROM app,room_allotment where name='$pname'  AND room_allotment.p_id=app.p_id ");
else
	$result3 = mysql_query("SELECT * FROM app where name='$pname' ");
		echo "<table border=1 bgcolor='' ><tr>
    		<th>Name</th>
    		<th>Father Name</th>
    		<th>Age</th>
    		<th>Sex</th>
    		<th>CNIC #</th>
    		<th>P ID</th>
    		<th>Room Number</th>
    		<th>Room type</th>
    		</tr>";    		
    		while($row = mysql_fetch_array($result3)) 
    		
    		{
				$roomNO = $row['room_no'];
				$roomCat = $row['room_type'];
				$p_id = $row['p_id'];
				if($roomNO == "")
				{
					$res = mysql_fetch_array(mysql_query("SELECT * FROM room_allotment WHERE p_id=".$p_id));
					
				
					if($res == "")
					{
						$roomNO = "N/A";
						$roomCat = "N/A";
					}
					else
					{
						$roomNO = $res['room_no'];
						$roomCat = $res['room_type'];
					}
				}
				
    		echo "<tr>";
    		echo "<td>".$row['name']."</td>";
    		echo "<td>".$row['fname']."</td>";
    		echo "<td>".$row['age']."</td>";
    		echo "<td>".$row['sex']."</td>";
    		echo "<td>".$row['cnic']."</td>";
    		echo "<td>".$row['p_id']."</td>";
    		echo "<td>".$roomNO."</td>";
    		echo "<td>".$roomCat."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?><p>&nbsp;</p>
<p><a href="search.php">Go BACK</a></p>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>