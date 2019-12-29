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
$p_i=$_SESSION['lab'];
 $result = mysql_query("SELECT * FROM app where p_id='$p_i' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
$cnic=$row['cnic'];
  }
 $result1 = mysql_query("SELECT * FROM laboratory where p_id='$p_i' ORDER BY lab_id DESC LIMIT 1 ");
 while($row = mysql_fetch_array($result1))
{ 
$test=$row['test_type'];
  } 
$result2 = mysql_query("SELECT * FROM test_types where test_type='$test' ");
 while($row = mysql_fetch_array($result2))
{  
$price=$row['rate']; }
  
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Laboratory</title>
    <script>
			function printpage()
								  {
									  window.print()}
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
<form id="form1" action="laboratory_action.php" method="post">
    <div>
        <table border="1">
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_i;?></td>
            </tr>
            <tr>
                <td>
                    Patient Name:
				</td>
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
            <tr>
                <td>
                    CNIC #</td>
                <td><?php echo $cnic;?></td>
            </tr></table>
        <br />
		</form>
		<form id="form1" action="laboratory_action.php" method="post">
            <table border="1">
            
            <tr>
                <td>
                    Test Type :</td>
                <td ><?php echo $test;?></td>
            </tr>
            <tr>
                <td >
                    Price :</td>
                <td ><?php echo $price;?>
                </td>
            </tr>
            
        </table>
    
    </div> <input type="button" value="Print this page" onClick="printpage()">   </form>
	<p><a href="laboratory.php">GO back to LABORATORY</a></p>
</div>
</body>
</html>
