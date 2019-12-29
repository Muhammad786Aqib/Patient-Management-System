<?php
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
$p_id=$_POST['p_id'];
$_SESSION['p']="$p_id";
$result = mysql_query("SELECT * FROM app where p_id='$p_id' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
$age=$row['age'];
$sex=$row['sex'];  
}

$result2 = mysql_query("SELECT * FROM app where p_id='$p_id' ");
 while($row = mysql_fetch_array($result2))
{ 
$dname=$row['dname'];  
}

$result3 = mysql_query("SELECT * FROM pharmacy where p_id='$p_id' ");		
$a1=0;
$a21=0;
while($row = mysql_fetch_array($result3)) 
{
$r=$row['price'];
$r1=$row['payment'];
$a21=$r1+$a21;
$a1=$r+$a1;
}
$result4 = mysql_query("SELECT * FROM doctor where d_name='$dname' ");
$d_fee=0;
 while($row = mysql_fetch_array($result4))
{ 
$d_fee=$row['d_fee'];
}

$result5 = mysql_query("SELECT * FROM room_services where p_id='$p_id' ");
$a2=0;
 while($row = mysql_fetch_array($result5))
{ 
$rcharges=$row['rcharges'];
$a2=$rcharges+$a2;
}
$result6 = mysql_query("SELECT * FROM room_allotment where p_id='$p_id' ");
 $r_type=0;
 while($row = mysql_fetch_array($result6))
{ 
$r_type=$row['room_type'];
$date=$row['date'];
}
$result7 = mysql_query("SELECT * FROM room_price where room_type='$r_type' ");
 $r_rent=0;
 while($row = mysql_fetch_array($result7))
{ 
$r_rent=$row['price'];
}

$edate=date("Y-m-d");
$t_date = ((strtotime($edate) - strtotime($date)) / (60 * 60 * 24));
if ($t_date==0)
{
$t_date=1;
}
$tdate=$t_date*$r_rent;
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing </title>
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
.style3 {
	color: #008000;
}
</style>
</head>
<body style ="background:url(include/bg1.jpg);">
<?php require_once("include/nav1.php"); ?>

<div id="page" class="container" style="width: 1000px">
<table>
<tr>
<td><strong>Patient Name:</strong></td>
<td><?php echo $pname ?></td>
<td><strong>Father/Husband Name:</strong></td>
<td><?php echo $fname ?></td>
</tr>
<tr>
<td><strong>Age:</strong></td>
<td><?php echo $age ?></td>
<td><strong>Sex:</strong></td>
<td><?php echo $sex ?></td>
</tr>
</table>
<br>
<table>
<tr>
<td><strong>Doctor fees:</strong></td>
<td><?php echo $d_fee ?></td>
</tr><tr>
<td><strong>Total Pharmacy Charges:</strong></td>
<td><?php echo $a1 ?></td>
</tr><tr>
<td><strong>Total pharmacy payments:</strong></td>
<td><?php echo $a21 ?></td>
</tr><tr>
<td><strong>Total Laboratory Charges:</strong></td>
<?php $result9 = mysql_query("SELECT * FROM laboratory,test_types where p_id='$p_id' AND test_types.test_type=laboratory.test_type ");		
 $a=0;  		
    		while($row = mysql_fetch_array($result9)) 
    		
    		{
    		$r=$row['rate'];
    		$a=$r+$a;
    		}

 ?>
<td><?php echo $a ?></td>
</tr>
<tr>
<td><strong>Total Room Rent:</strong></td>
<td><?php echo $tdate?></td>
<td>(<span class="">As room alloted date is</span> <strong><?php echo $date ?></strong> 
<span class="">and total number of days are</span> <strong><?php echo $t_date ?></strong>)</td>
</tr>


<tr>
<td><strong>Total Room Charges:</strong></td>
<td><?php echo $a2 ?></td>
</tr>
</table>
</br>
<table>
<tr>
<td style="width: 201px"><strong>Total:</strong></td>
<td><?php echo $tdate+$a+$d_fee+$a1+$a2-$a21?></td>

<?php 
session_start();
$tt=$tdate+$a+$d_fee+$a1+$a2-$a21 ;
$_SESSION['t']="$tt";
?><form action="bill_detail.php" method="post">
<td><input name="pay" type="number" required="required" maxlength="10" style='color:black;'/></td>
<td><input name="Submit1" type="submit" value="payment" /></td>
</tr>
</table>
</br>
<table><tr><td valign="top">
<?php 
$result10 = mysql_query("SELECT * FROM pharmacy where p_id='$p_id' ");		
		echo "<table border=1 bgcolor='' ><tr>
    		<th>Pharmacy charges</th>
    		<th>payments</th>
    		<th>Date</th>
    		</tr>";    		
    		while($row = mysql_fetch_array($result10)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$row['price']."</td>";
    		echo "<td>".$row['payment']."</td>";
    		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>
    		</td><td valign="top">
<?php 
$result11 = mysql_query("SELECT * FROM laboratory,test_types where p_id='$p_id' AND test_types.test_type=laboratory.test_type ");		
		echo "<table border=1 bgcolor='' ><tr>
    		<th>Test type</th>
    		<th>price</th>
    		<th>Date</th>
    		</tr>";   		
    		while($row = mysql_fetch_array($result11)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$row['test_type']."</td>";
    		echo "<td>".$row['rate']."</td>";
    		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>
    		</td><td valign="top">
    		<?php 
$result12 = mysql_query("SELECT * FROM room_services where p_id='$p_id' ");		
		echo "<table border=1 bgcolor='' ><tr>
    		<th>Room charges</th>
    		<th>charges detail</th>
    		<th>Date</th>
    		</tr>";    		
    		while($row = mysql_fetch_array($result12)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$row['rcharges']."</td>";
    		echo "<td>".$row['charges']."</td>";
    		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>

</td>
</tr>
</table>
</form>
<p><a href="bill.php">GO back to BILLING</a></p>
<input type="button" value="Print this page" onClick="printpage()">
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>
