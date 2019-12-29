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
	$p_i=$_REQUEST['p_id'];
	$_SESSION['p']="$p_i";
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
  
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Room Allotment</title>

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

    <div>
        <table>
            <tr>
                <td>
                    Patient ID:</td>
                <td><?php echo $p_i;?>
                    </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    Patient Name:</td>
                <td><?php echo $pname;?>
                    </td>
                <td>
                    Father/Husband Name:</td>
                <td><?php echo $fname;?>
                </td>
            </tr>
            <tr>
                <td>
                    Age:</td>
                <td><?php echo $age;?>
                    </td>
                <td>
                    Sex:</td>
                <td><?php echo $sex;?>
                </td>
            </tr>
            <tr>
                <td>
                    CNIC #</td>
                <td><?php echo $cnic;?>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr></table>
			
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
			
        <br />     
		<?php
			$res = mysql_fetch_array(mysql_query("SELECT * FROM `room_allotment` WHERE p_id=".$p_i));
			if($res == "")
			{
			?>
						<form id="form1" action="reception_action.php" method="post">
							<table>
							<tr>
								<td>
									Contact #</td>
								<td style="width: 185px">
									<input id="contact" name="contact" type="text" required="required" pattern="[0-9]{11}"onKeyPress="return isNumberKey(event)" maxlength="11"/></td>
							</tr>
							<tr>
								<td>
									Address :</td>
								<td style="width: 185px">
									<textarea id="address" name="address" cols="20" rows="2" required="required"></textarea></td>
							</tr>
							<tr>
								<td>
									Room Types:</td>
								<td>
									<select id="room_type" name="room" required="required" onchange="loadDoc(this);">
										<option selected="">----select type----</option>
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
											$query = mysql_query('SELECT room_type FROM room_price'); 
											while($row = mysql_fetch_array($query)) 
												{ 
													echo '<option name="'.$row['room_type'].'">'.$row['room_type'].'</option>'; 
												} 
													?> 

									</select>
								</td>
							</tr>
							<tr>
								<td>
									Room No.:</td>
								<td>
									<select id="room_no" name="room_no">
									</select>
								</td>
							</tr>
								<tr>
								<td>
									Date:</td>
								<td style="width: 185px">
									<?php echo date('d-m-Y'); ?></td>
							</tr>
						</table>
					
					</div>
						
						<input id="Submit1" type="submit" value="Submit Information" />
					</form></br>
					<br>
					<table  align="left" >
					<tr><td valign="top">
					
						 <?php   $result3 = mysql_query('SELECT DISTINCT room_no FROM vip_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="vip")');		
						echo "<table border=1 bgcolor='' align='center'><tr>
							<th>VIP</th>
							</tr>";    		
							while($row = mysql_fetch_array($result3)) 
							{
							echo "<tr>";
							echo "<td>".$row['room_no']."</td>";
							echo "</tr>";
							
							}
							echo"</table>";
				?>
				</td>
				<td valign="top">
				<?php



					$result2 = mysql_query('SELECT DISTINCT room_no FROM general_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="general")'); 
						echo "<table border=1 align='center'><tr>
							<th>General</th>
							</tr>";
							while($row = mysql_fetch_array($result2)) 
							{ 
							echo "<tr>";
							echo "<td>".$row['room_no']."</td>";
							echo "</tr>"; 		
							}
					echo"</table>";
						
				 ?>
				 </td>
				 <td valign="top">
				 <?php  		

						
						
					
					$result4 = mysql_query('SELECT DISTINCT room_no FROM executive_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="executive")'); 
						echo "<table border=1 align='center'><tr>
							<th>Executive</th>
							</tr>";
							while($row = mysql_fetch_array($result4)) 
							{ 
							echo "<tr>";
							echo "<td>".$row['room_no']."</td>";
							echo "</tr>"; 		
							}
						echo"</table>";
					
				   ?>
				   </td>
				   <td valign="top">
				   <?php
					$result5 = mysql_query('SELECT DISTINCT room_no FROM reserved_room WHERE  room_no NOT IN (SELECT DISTINCT room_no FROM room_allotment where room_type="reserved")'); 
						echo "<table border=1 align='center'><tr>
							<th>Reserved</th>
							</tr>";
							while($row = mysql_fetch_array($result5)) 
							{ 
							echo "<tr>";
							echo "<td>".$row['room_no']."</td>";
							echo "</tr>"; 		
							}
							"</table>"?>
							
				</td></tr></table>
			<?php }
				else
				{
					echo "This patient has already been admitted to a room";
					echo "<br>";
					echo "<br>";
					echo "Room no: ".$res['room_no'];
					echo "<br>";
					echo "Room type: ".$res['room_type'];
			?>
				
			
			<?php } ?>
</div>
<div class="feedback1" style="display:none;margin-top:-40%;" id="feedbackBox">
<script src = "jquery.js"></script>
				<?php
				if(isset($_REQUEST['info']))
				{	echo $_REQUEST['info'];
					?><script>
							
							
								jQuery(document).ready(function($) {
									var t = $('#feedbackBox');
									
									t.fadeIn();
									
								});
								
						</script>
					<?php
				}
				?>
				</div>
</body>
</html>


<?php include_once("include/table_styles.php"); ?>
<script>
function loadDoc(t) {
	var url = "ajax/load_select_options.php?room_type="+t.value;
	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("room_no").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
</script>

<?php include_once("include/table_styles.php"); ?>