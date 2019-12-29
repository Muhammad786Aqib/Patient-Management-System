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
	$_SESSION['pr']="$p_i";
 $result = mysql_query("SELECT * FROM app where p_id='$p_i' ");
 while($row = mysql_fetch_array($result))
{ 
$pname=$row['name'];
$fname=$row['fname'];
$age=$row['age'];
$sex=$row['sex'];
$cnic=$row['cnic'];
$dname=$row['dname'];
  }
  
  $result2 = mysql_query("SELECT * FROM laboratory where p_id='$p_i' ");
 while($row = mysql_fetch_array($result2))
{ 
$ph=$row['photo'];  }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Prescription</title>

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
<form id="for" action="prescription_action.php" method="post">    <div>
        <table>
		<caption>Prescription Details</caption>
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_i;?></td>
				<td></td>
				<td></td>
            </tr>
            <tr>
                <td>
                    Doctor's Name:</td>
                <td><?php echo $dname;?>
                </td>                <td>
                    Patient Name:</td>
                <td><?php echo $pname;?>
                </td>
				
				
            </tr>
            <tr>
                <td>
                    Father/Husband Name:</td>
                <td><?php echo $fname;?>
                </td>                <td>
                    Age:</td>
                <td><?php echo $age;?>
                </td>
				
            </tr>
            <tr>
                <td>
                    Sex:</td>
                <td><?php echo $sex;?>
                </td>
				<td></td>
				<td></td>
            </tr>
           
			<tr>
                <td>
                    Symptoms:</td>
                <td>
                    <textarea id="symptoms" name="symptoms" cols="20" rows="2" required="required"></textarea></td>
                    <td>View test report:</td>
                    <td>
                    </td>
					
				
            </tr>
            <tr>
                <td>
                    Prescription:</td>
            <td><textarea id="prescription" name="prescription" required="required"></textarea></td>
			
				<td></td>
				<td></td>

            </tr>

            <tr><td>prescribe test:</td>
            <td>    <select id="test_type" name="test_type" required="required">
                    <option selected="selected" value="nill">Nill</option>
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
    						$query2 = mysql_query('SELECT test_type FROM test_types'); 
    						while($row = mysql_fetch_array($query2)) 
    							{ 
    							    echo '<option name="'.$row['test_type'].'">'.$row['test_type'].'</option>'; 
    							} 
    						$result4 = mysql_query("SELECT * FROM test_types where test_type='$query' ");
 							while($row = mysql_fetch_array($result4))
 							{
 							$price=$row['rate'];
 							} ?> 
                    </select>
</td>
<td></td>
				<td></td>
            </tr>
            <tr>
                <td>
                    Remarks:</td>
                <td>
                    <input id="remarks" name="remarks" type="text" required="required"/></td>
					<td></td>
				<td></td>
            </tr>
            <tr>
            <td>Date:</td>
            <td><?php echo date('d-m-Y'); ?> </td>
			<td></td>
				<td></td>
            </tr>
        </table>
    
    </div><input id="Submit1"  type="submit" value="Submit information" />
    </form>
<?php 
$result5 = mysql_query("SELECT * FROM room_services where p_id='$p_i'");		
		echo "<table border=1 bgcolor='' ><tr>
		<caption>Furthur Details</caption>
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