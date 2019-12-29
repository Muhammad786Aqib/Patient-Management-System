<?php
session_start();


unset($_SESSION['DPT']);
unset($_SESSION['USER']);
unset($_SESSION['PASS']);
unset($_SESSION['ID']);
unset($_SESSION['go']);

header("location:index.php");

?>