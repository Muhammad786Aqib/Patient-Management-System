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
  $p_id=$_SESSION['p'];

 $result = mysql_query("SELECT * FROM app where p_id='$p_id' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
$age=$row['age'];
$sex=$row['sex'];
$cnic=$row['cnic'];
$dname=$row['dname'];
  }

$contact=$_SESSION['pii1'];
$address=$_SESSION['pii2'];
$advance=$_SESSION['pii3'];
$room_type=$_SESSION['ra1'];
$room_no=$_SESSION['ra2'];
  
  ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Room Allotment</title>
    <script>
			function printpage()
  				{
  					window.print()
  									}
  	</script>
  	
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
</style>
</head>

<body style="background:url(include/bg1.jpg);">


<?php require_once("include/nav1.php"); ?>

<div id="page" class="container" style="width: 730px">
<form id="form1" action="" method="">
    <div>
        <table border="1">
		<caption>PATIENT DETAILS</caption>
            <tr>
                <td>
                    <strong>Patient ID:</strong></td>
                <td>
					<?php echo $p_id;?>
                </td>
                <td>
                    <strong>Date:</strong></td>
                <td>
					<?php echo date("d-m-Y") ;?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Patient Name:</strong></td>
                <td>
					<?php echo $pname ;?>
                </td>
                <td>
                    <strong>Father/Husband Name:</strong></td>
                <td>
					<?php echo $fname ;?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Age:</strong></td>
                <td>
					<?php echo $age ;?>
                </td>
                <td>
                    <strong>Sex</strong></td>
                <td>
					<?php echo $sex ;?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>CNIC #</strong></td>
                <td>
					<?php echo $cnic ;?>
                </td>
                <td>
                    <strong>Contact No.</strong></td>
                <td>
					<?php echo $contact ;?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Address:</strong></td>
                <td>
					<?php echo $address ;?>
                </td>
                </tr>
            <tr><td><strong>Room Type:</strong></td><td><?php echo $room_type ?></td>
            <td><strong>Room no:</strong></td><td><?php echo $room_no ?></td></tr>
        </table>
    <input type="button" value="Print this page" onClick="printpage()">
    </div>
    </form>
	<p><a href="reception.php">Go back to ROOM ALLOTMENT</a></p>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>