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
		
  $cnicc=$_GET['cnic'];

 $result = mysql_query("SELECT * FROM app where cnic='$cnicc' ");
 while($row = mysql_fetch_array($result))
{ 
$app_id=$row['p_id'];
$pname=$row['name'];
$fname=$row['fname'];
$age=$row['age'];
$sex=$row['sex'];
$cnic=$row['cnic'];
$dname=$row['dname'];
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Appointment</title>
    <script>
			function printpage()
  				{
  					window.print() }
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
<form id="form1">
    <div>
        <table border="1">
            <tr>
                <td>
                    <strong>
                    Patient ID:</strong></td>
                <td>
					<?php echo $app_id;?>
                </td>
                <td><strong>Date:</strong></td>
                </td>
                <td><?php echo date("d-m-Y") ;?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Patient Name:</strong></td>
                <td>
					<?php echo $pname ;?>
                </td>
                <td>
                    <strong>
                    Father/Husband Name:</strong></td>
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
                    <strong>Sex:</strong></td>
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
                    <strong>Doctor Name:</strong></td>
                <td>
					<?php echo $dname ;?>
                </td>
            </tr>
        </table>
    <input type="button" value="Print this page" onClick="printpage()">
    </div>
    </form>
	<p><a href="appointment.php">Go back to APPOINTMENT</a></p>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>