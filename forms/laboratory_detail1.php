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
	$_SESSION['lab']="$p_i";
 $result = mysql_query("SELECT * FROM app where p_id='$p_i' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
$cnic=$row['cnic'];
  }
  
$result1 = mysql_query("SELECT * FROM prescription where p_id='$p_i' ");
 while($row = mysql_fetch_array($result1))
{ 
$test=$row['test'];
 $_SESSION['lab12']="$test"; }
 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Laboratory</title>

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

<div>
<?php require_once("include/nav1.php"); ?>
	
	</div>

<div id="page" class="container" style="width: 730px">
<form id="form1" action="laboratory_action.php" method="post">
    <div>
        <table >
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
            <table>
            <tr>
                <td>Prescribed test :</td>
                <td><?php echo $test ?></td>
            </tr>
            <tr>
            <td>Upload test report:</td>
            <td><input type="file" name="photo"></td>
            </tr>
            </table>
    
    </div>
    <input id="submit"  type="submit" value="Submit Information" />
    </form>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>
