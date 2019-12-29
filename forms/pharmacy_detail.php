<?php 
SESSION_start();
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
		$p_i=$_SESSION['ph'];
 $result = mysql_query("SELECT * FROM app where p_id='$p_i' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
  }
  $result2 = mysql_query("SELECT * FROM prescription where p_id='$p_i' ");
 while($row = mysql_fetch_array($result2))
{
  $presc=$row['prescription'];
  }
  $price=$_SESSION['ph1'];
  $pay=$_SESSION['ph2'];
  
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pharmacy</title>
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
<form id="form1" method="" action="" >
    <div>
        <table border="1">
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_i;?>
				</td>
            </tr>
            <tr>
                <td>
                    Name:</td>
                <td>
					<?php echo $pname;?>
                </td>
            </tr>
            <tr>
                <td>
                    Father/Husband Name:</td>
                <td>
					<?php echo $fname;?>
                </td>
            </tr>
			</form>
			<form id="form1" method="post" action="pharmacy_action.php" >
            <tr>
                <td>
                    Price:</td>
                <td><?php echo $price;?></td>
            </tr>
            <tr>
                <td>
                    payment:</td>
                <td><?php echo $pay;?></td>
            </tr>
        </table>
    
    </div><input type="button" value="Print this page" onClick="printpage()">
    </form><script src="validations/pharmacy.js"></script>
	<br>
	<br>
	<a href="pharmacy.php">GO back to PHARMACY</a>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>