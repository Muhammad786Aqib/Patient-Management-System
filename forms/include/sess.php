<?php

if(!isset($_SESSION))
	session_start();

$dpt = $_SESSION['DPT'];
if(!isset($dpt))
	header("location:sign_in.php?info=Please_log_in");
	
	?>