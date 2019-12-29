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
				
	$p_i=$_POST['p_id'];
	$_SESSION['ph']="$p_i";
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

  
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pharmacy</title>

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
<div id="page" class="container" style="width: 730px">
<form id="form1" method="post" action="pharmacy_action.php" >
    <div>
        <table>
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
                <td><input type="text" id="price" name="price"></td>
            </tr>
            <tr>
                <td>
                    payment:</td>
                <td>
                    <input id="payment" name="payment" type="text" style="width: 80px" required="required"/></td>
            </tr>
        </table>
    
    </div><input id="Submit1" style="width: 127px" type="submit" value="Submit Information" />
    </form>
    
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
				}?><br>
<br>
<br>
&nbsp;<table><tr><td valign="top"><strong>Prescribed in prescription<br>
	</strong>&nbsp;<?php 
				
			$result = mysql_query("SELECT * FROM prescription where p_id='$p_i' ");		
		echo "<table border=1 bgcolor='' ><tr>
			<th>Serial no.</th>
    		<th>Prescribed medicine</th>
        	<th>date</th>
    		</tr>"; 
    		$a=0;   		
    		while($row = mysql_fetch_array($result)) 
    				
    		{
    		echo "<tr>";
    		$a=$a+1;
    		echo "<td>". $a."</td>";
    		echo "<td>".$row['prescription']."</td>";
      		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>";?></td><td valign="top"><strong>Prescribed in Ward<br>
	</strong>&nbsp;<?php 
			$result2 = mysql_query("SELECT * FROM room_services where p_id='$p_i' ");		
		echo "<table border=1 bgcolor='' ><tr>
			<th>Serial no.</th>
    		<th>Prescribed medicine</th>
        	<th>date</th>
    		</tr>"; 
    		$a=0;   		
    		while($row = mysql_fetch_array($result2)) 
    				
    		{
    		echo "<tr>";
    		$a=$a+1;
    		echo "<td>". $a."</td>";
    		echo "<td>".$row['prescription']."</td>";
      		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>";?>
    		</td></tr></table>
</div>
</body>
</html>
