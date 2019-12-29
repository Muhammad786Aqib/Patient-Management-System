<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Doctor </title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src= "jquery.js"></script>
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
<?php include_once("include/table_styles.php"); ?>

<?php require_once("include/nav1.php"); ?>

<div id="page" class="container" style="width: 730px">
<div style=" margin-left:120"><?php
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
$result12 = mysql_query("SELECT * FROM doctor");		
		echo "<table border=1 bgcolor='' ><tr>
			<caption>DOCTOR DETAILS</caption>
    		<th>Serial no.</th>
    		<th>Doctor Name:</th>
    		<th>Doctor Fee</th>
    		<th>Appointed Date</th>
    		</tr>";    	
    		$a=1;	
    		while($row = mysql_fetch_array($result12)) 
    		
    		{
    		echo "<tr>";
    		echo "<td>".$a."</td>";
    		$a=$a+1;
    		echo "<td>".$row['d_name']."</td>";
    		echo "<td>".$row['d_fee']."</td>";
    		echo "<td>".$row['date']."</td>";
    		echo "</tr>";
    		
    		}
    		echo"</table>"; ?>
</div>
</div>
</body>
</html>

<script>
$(window).ready(function(){
	$("tr").each(function(i){
		if(i%2==0)
			$(this).addClass("tr_model_1_even");
		else
			$(this).addClass("tr_model_1_odd");
	});
	$("td").addClass("td_model_1");
	$("caption").css('font-weight','bold');
});
</script>

