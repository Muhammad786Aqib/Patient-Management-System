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
$p_id=$_SESSION['pii'];
$result = mysql_query("SELECT * FROM app where p_id='$p_id' ");
while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
  }
  
$symp=$_SESSION['pii1'];
$pcondition=$_SESSION['pii2'];
$pres=$_SESSION['pii3'];
$rcharges=$_SESSION['pii4'];
$charges=$_SESSION['pii5'];
$temp=$_SESSION['pii6'];
$bp=$_SESSION['pii7'];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Room Services</title>
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
<body>
<?php require_once("include/nav1.php"); ?>

<body style="background:url(include/bg1.jpg);">
<?php include_once("include/table_styles.php"); ?>

<div id="page" class="container" style="width: 730px">
<form id="form1"  method="post" action="room_services_action.php">
    <div>
        <table border="1">
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_id;?></td>
            </tr>
            <tr>
                <td>
                    Patient Name:</td>
                <td><?php echo $pname;?>
                </td>
            </tr>
            <tr>
                <td>
                    Father/Husband Name:</td>
                <td><?php echo $fname;?>
                </td>
            </tr>
            <tr>
                <td>
                    Date:</td>
                <td><?php echo date("d/m/y");?>
                </td>
            </tr>
        </table>
        <br />
        <table border="1">
            <tr>
                <td>
                    Symptoms</td>
                <td><?php echo $symp;?></td>
                <td>
                    Present Condition:</td>
                <td><?php echo $pcondition;?></td>
            </tr>
            <tr>
                <td>
                    Temprature</td>
                <td><?php echo $temp;?></td>
                <td>
                    Blood pressure</td>
                <td><?php echo $bp;?>
                    </td>
            </tr>
            <tr>
                <td>
                    Prescription</td>
                <td><?php echo $pres;?></td>
                <td>
                    Room Charges</td>
                <td><?php echo $rcharges;?></td>
            </tr>
            <tr>
                <td>
                    Charges Detail</td>
                <td><?php echo $charges;?></td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>
    
    </div>
        <br />
        <input type="button" value="Print this page" onClick="printpage()"></form><script src="validations/room_services.js"></script>
    
	<p><a href="room_services.php">GO back to ROOM SERVICES</a></p>
</div>
</body>
</html>
