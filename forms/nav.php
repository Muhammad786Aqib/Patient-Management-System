<?php
if(!isset($_SESSION))
	session_start();
$dept = $_SESSION['DPT'];

if ($dept=="appointment"){
	
	echo '<li><a href="sign_in.php">APPOINTMENT</a></li>';

}
else if ($dept=="prescription"){
	
	echo '<li><a href="sign_in.php">PRESCRIPTION</a></li>';

}
else if ($dept=="reception"){
	echo '<li><a href="sign_in.php">PRESCRIPTION</a></li>';
}
else if ($dept=="room_allotment"){
	echo '<li><a href="sign_in.php">ALLOTMENT</a></li>';
}
else if ($dept=="room_services"){
	
	echo '<li><a href="sign_in.php">SERVICES</a></li>';

}
else if ($dept=="pharmacy"){
	
	echo '<li><a href="sign_in.php">PHARMACY</a></li>';
}
else if ($dept=="laboratory"){

	echo '<li><a href="sign_in.php">LAB</a></li>';
}
else if ($dept=="billing"){
	echo '<li><a href="sign_in.php">BILLING</a></li>';
}
else if($dept=="admin"){
	echo '<li><a href="sign_in.php">ADMIN</a></li>';
}
else if ($dept=="super"){
echo<<<HERE
			<li><a href="sign_in.php">ADMIN</a></li>
			<li><a href="sign_in.php">APPOINTMENT</a></li>
			<li><a href="sign_in.php">PRESCRIPTION</a></li>
			<li><a href="sign_in.php">ALLOTMENT</a></li>
			<li><a href="sign_in.php">SERVICES</a></li>
			<li><a href="sign_in.php">PHARMACY</a></li>
			<li><a href="sign_in.php">LAB</a></li>
			<li><a href="sign_in.php">BILLING</a></li>
			<li><a href="info.php">INFO</a></li>
HERE;
}
else {
echo<<<HERE
	<li><a href="sign_in.php">ADMIN</a></li>
			<li><a href="sign_in.php">APPOINTMENT</a></li>
			<li><a href="sign_in.php">PRESCRIPTION</a></li>
			<li><a href="sign_in.php">ALLOTMENT</a></li>
			<li><a href="sign_in.php">SERVICES</a></li>
			<li><a href="sign_in.php">PHARMACY</a></li>
			<li><a href="sign_in.php">LAB</a></li>
			<li><a href="sign_in.php">BILLING</a></li>
			<li><a href="info.php">INFO</a></li>
HERE;
	
}

?>

		<!--
			<li><a href="sign_in.php">ADMIN</a></li>
			<li><a href="sign_in.php">APPOINTMENT</a></li>
			<li><a href="sign_in.php">PRESCRIPTION</a></li>
			<li><a href="sign_in.php">ALLOTMENT</a></li>
			<li><a href="sign_in.php">SERVICES</a></li>
			<li><a href="sign_in.php">PHARMACY</a></li>
			<li><a href="sign_in.php">LAB</a></li>
			<li><a href="sign_in.php">BILLING</a></li>
			<li><a href="info.php">INFO</a></li>
			-->
			