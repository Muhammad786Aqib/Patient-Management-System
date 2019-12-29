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
	$p_i=$_POST['p_id'];
	$_SESSION['pii']="$p_i";
 $result = mysql_query("SELECT * FROM app where p_id='$p_i' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
  }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Room services</title>

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


  <SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
    </SCRIPT>
<?php require_once("include/nav1.php"); ?>
<div id="page" class="container" style="width: 706px">
 <form id="form1"  method="post" action="room_services_action.php">
    <div>
        <table>
		<caption>ROOM SERVICE :</caption>
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_i;?></td>
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
        <table>
            <tr>
                <td>
                    Symptoms</td>
                <td>
                    <textarea id="symptoms" name="symptoms" cols="20" rows="2" required="required"></textarea></td>
                <td>
                    Present Condition:</td>
                <td>
                    <textarea id="pcondition" name="pcondition" cols="20" rows="2" required="required"></textarea></td>
            </tr>
            <tr>
                <td>
                    Temprature</td>
                <td>
                    <textarea id="temprature" name="temprature" cols="20" rows="2" required="required" onKeyPress="return isNumberKey(event)"></textarea></td>
                <td>
                    Blood pressure</td>
                <td>
                    <input id="bp" name="bp" style="width: 100px" type="text" required="required" onKeyPress="return isNumberKey(event)"/></td>
            </tr>
            <tr>
                <td>
                    Prescription</td>
                <td>
                    <textarea id="prescription" name="prescription" cols="20" rows="2" required="required"></textarea></td>
                <td>
                    Room Charges</td>
                <td>
                    <input id="rcharges" name="rcharges" style="width: 100px" type="text" required="required" onKeyPress="return isNumberKey(event)"/></td>
            </tr>
            <tr>
                <td>
                    Charges Detail</td>
                <td>
                    <textarea id="cdetail" name="cdetail" cols="20" rows="2" required="required"></textarea></td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>
    
    </div>
        <br />
        <input id="Submit1" type="submit" value="Submit Information" " /></form>
<?php 
$result5 = mysql_query("SELECT * FROM room_services where p_id='$p_i'");		
		echo "<table border=1 bgcolor='' ><tr>
    		<th>Serial no.</th>
    		<th>Symptoms</th>
    		<th>Present condition</th>
    		<th>Prescription</th>
    		<th>Blood pressure</th>
    		<th>Temprature</th>
    		<th>Date</th>
    		
    		</tr>";
    		$a=1;    		
    		while($row = mysql_fetch_array($result5)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$a."</td>";
    		$a=$a+1;
    		echo "<td>".$row['symptoms']."</td>";
    		echo "<td>".$row['present']."</td>";
    		echo "<td>".$row['prescription']."</td>";
    		echo "<td>".$row['bp']."</td>";
    		echo "<td>".$row['temprature']."</td>";
    		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>

</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>
