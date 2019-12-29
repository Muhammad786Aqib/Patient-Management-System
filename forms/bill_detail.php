<?php
session_start();
error_reporting(0);
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
$pay=$_POST['pay'];
$p_id=$_SESSION['p'];
$total=$_SESSION['t'];
$date=date('Y-m-d');
$sql2="update room_allotment set room_no=0 where p_id='$p_id'";
$sql="INSERT INTO bill (payment,total,date,p_id)
VALUES
('$pay','$total','$date','$p_id')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  
   }
?>
<?php 

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
  

?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Registration</title>
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
      .style4 {
	font-size: medium;
}
    .style5 {
	color: red;
}
    </style>
  </head>
  <body>
  <?php require_once("include/nav1.php"); ?>
    <body style="background:url(include/bg1.jpg);">
<?php include_once("include/table_styles.php"); ?>
    </div>
    <div id="page" class="container" style="width: 730px; padding-left:200">
    <table>
    <tr>
    <td class="style4"><strong>Patient Name:</strong></td>
    <td><?php echo $pname ?></td>
    <td class="style4"><strong>Father/Husband's Name:</strong></td>
    <td><?php echo $fname ?></td>
    </tr>
    <tr>
    <td class="style4"><strong>Age:</strong></td>
    <td><?php echo $age ?></td>
    <td class="style4"><strong>Sex:</strong></td>
    <td><?php echo $sex ?></td>
    </tr>
    <tr>
    <td class="style4"><strong>CNIC:</strong></td>
    <td><?php echo $cnic ?></td>
    <td></td>
    </tr>
    </table>
    <br>
	<br>
    <table>
    <tr>
    <td><strong>Total Charges:</strong></td>
    <td><?php echo $total ?></td>
    </tr>
    <tr>
    <td><strong>Payment:</strong></td>
    <td><?php echo $pay ?></td></tr><tr>
    <td><strong>Remaining:</strong></td>
    <td><?php echo $total-$pay ?></td>
    </tr>
    </table>
    
    <br>
	<input type="button" value="Print this page" onClick="printpage()"><br>
	<br>
	<a href="bill.php" class="style5">Go BACK</a></div>
</body>
</html>
