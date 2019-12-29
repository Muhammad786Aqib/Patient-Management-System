<?php 
require_once('include/config.php');
?>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<?php
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
 
$cnic=$_POST['cnic'];
$result = mysql_query("SELECT * FROM app where cnic='$cnic'");
		$row = mysql_fetch_array($result);
		
		$p_id=$row['p_id'];
		$name=$row['name'];
		$fname=$row['fname'];
		
		if($row != null)
		{
							

					?>
					<html>
					<head>
						<title>patient Detail</title>
					</head>
					<body>
					<table>
					<tr>
					<td><strong>Patient Name:</strong></td>
					<td><?php echo $name ?></td>
					<td><strong>Father/Husband name:</strong></td>
					<td><?php echo $fname ?></td>
					</tr>
					</table>

					<p><strong>Appointment Details: </strong></p>
					</body>
					</html>
					<?php
					$result = mysql_query("SELECT * FROM app where p_id='$p_id' ");		
							echo "<table border=1 bgcolor='' ><tr>
								<th>Serial no.</th>
								<th>Doctor name</th>
								<th>Appointment date</th>
								</tr>"; 
								$a=0;
								
								
								$row = mysql_fetch_array($result);
								
								if($row != null)
								{
								
									
									do
											
									{
									echo "<tr>";
									$a=$a+1;
									echo "<td>". $a."</td>";
									echo "<td>".$row['dname']."</td>";
									echo "<td>".$row['date']."</td>";
									echo "</tr>";
									
									}
									while($row = mysql_fetch_array($result));
									echo"</table>";
								}
								else
								{
									echo "Not even single record found for appointment";
								}

								?>
					<table><tr><td>		
					<br><br>
					<p><strong>Prescription Details:</p>
					<?php 
					$result2 = mysql_query("SELECT * FROM prescription where p_id='$p_id'");		
					
					$row = mysql_fetch_array($result2);
					if($row != null)
					{
						echo "<table border=1 bgcolor='' ><tr>
								<th>Symptoms</th>
								<th>Prescription</th>
								<th>Remark</th>
								<th>Recommended test</th>
								<th>Date</th>
								</tr>";
						do
						{
							    	
								
										
								
								echo "<tr>";
								echo "<td>".$row['symptoms']."</td>";
								echo "<td>".$row['prescription']."</td>";
								echo "<td>".$row['remark']."</td>";
								echo "<td>".$row['test']."</td>";
								echo "<td>".$row['date']."</td>";
								echo "</tr>";
								
						}
						while($row = mysql_fetch_array($result2));
								echo"</table>";
					}
					else
						echo "<h3>No record found for prescription</h3>";
					
					?></td><td valign="top">
					<p><strong>Room Services Details:</strong></p>
					<?php 
					$result3 = mysql_query("SELECT * FROM room_services where p_id='$p_id'");		
					$row = mysql_fetch_array($result3);
					if($row != null)
					{
							echo "<table border=1 bgcolor='' ><tr>
								<th>Date</th>
								<th>Symptoms</th>
								<th>Present condition</th>
								<th>Prescription</th>
								<th>Temprature</th>
								<th>BP</th>
								<th>Room Charges</th>
								<th>Detail</th>
								</tr>";    		
								
								do
								{
								echo "<tr>";
								echo "<td>".$row['date']."</td>";
								echo "<td>".$row['symptoms']."</td>";
								echo "<td>".$row['present']."</td>";
								echo "<td>".$row['prescription']."</td>";
								echo "<td>".$row['temprature']."</td>";
								echo "<td>".$row['bp']."</td>";
								echo "<td>".$row['rcharges']."</td>";
								echo "<td>".$row['charges']."</td>";
								echo "</tr>";
								
								}
								while($row = mysql_fetch_array($result3));
								echo"</table>";
					}
					else
					{
						echo "No record found for room service";
					}
					?>
					</td></tr>

					<tr><td valign="top">
					<p><strong>Room Allotment Details:</strong></p>
					<?php 
					$result3 = mysql_query("SELECT * FROM room_allotment where p_id='$p_id'");	
						$row = mysql_fetch_array($result3);
						if ($row !=null)
						{
							echo "<table border=1 bgcolor='' ><tr>
								<th>Allotment Date</th>
								<th>Room Type</th>
								<th>Room No</th>
								<th>Contact</th>
								<th>Address</th>
								</tr>";    		
								
								do		
								{
								echo "<tr>";
								echo "<td class='td1'>".$row['date']."</td>";
								echo "<td>".$row['room_type']."</td>";
								echo "<td>".$row['room_no']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "</tr>";
								
								}
								while($row = mysql_fetch_array($result3));
								
								echo"</table>";
						}
						else
						{
							print "No record found for room allotment";
						}
					?>
					</td></tr></table>
		<?php }
		
		else
			echo "No record found!<br>";

		?>
<a href="cnic.php">GO back to SEARCH</a>