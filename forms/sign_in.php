<?php
error_reporting(0);
if(!isset($_SESSION))
	session_start();

if($_REQUEST['go'])
	$_SESSION['go'] = $_REQUEST['go'];

if(isset($_SESSION['DPT']))
{
	if($_SESSION['DPT'] == "super")
	{
		$go = $_SESSION['go'];
		if($go == "")
			$go = "index.php";
		
		header("location:".$go);
		//echo $go;
		exit;
	}
	
	$user = $_SESSION['USER'];
	$pass = $_SESSION['PASS'];
	header("location:sign_in_action.php?user=$user&pass=$pass");
}
?>
<script src="js/jquery-1.11.1.min.js"></script>
<?php

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>sign in</title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
.style3 {
	color: #FFFFFF;
}
.style4 {
	font-size: 42pt;
}
</style>
</head>

<?php 

require_once("include/nav1.php");
?>			
			
			<div class="pic1">
				<div class="feedback1" style="display:none;" id="feedbackBox">
				<?php
				if(isset($_REQUEST['info']))
				{	echo $_REQUEST['info'];
					?><script>
							
							
								jQuery(document).ready(function($) {
									var t = $('#feedbackBox');
									
									disco(t);
									
								});
								
						</script>
					<?php
				}
				?>
				</div>
				<div class="login-pad">
					<h2>SIGN IN</h2>
						<form action="sign_in_action.php" method="post">
							<input name="user" type="text" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<input name="pass" type="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							
							<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i>Remember me?</label>
							<br><br><br><br>
							<input type="submit" value="Confirm">
							
							
							<a href="sign_up.php?fb=-1" class='link1'>Dont have account?</a>
							&nbsp;&nbsp;&nbsp;
							<a href="sign_in_update.php?fb=-1" class='link1'>Change Password?</a>
							
						</form>
				</div>
				<div class="clearfix"></div>
			
			</div>
		
			
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

$result= mysql_query("SELECT * FROM sign_up");		
		echo "<table border=1 bgcolor='' ><tr>
    		<th>username</th>
    		<th>password</th>
    		<th>Department</th>
    		</tr>";    		
    		while($row = mysql_fetch_array($result)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$row['user_name']."</td>";
    		echo "<td>".$row['pass']."</td>";
    		echo "<td>".$row['dept']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>
<script>

	function disco(t)
	{
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		
		
	}
</script>