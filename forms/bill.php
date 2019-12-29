<?php
include "include/sess.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Billing </title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
.style3 {
	font-size: xx-large;
	color: #000000;
	font-family: "Courier New", Courier, monospace;
}
</style>
</head>

<?php require_once("include/nav1.php"); ?>
<div id="page" class="container" style="height:400px;width:880px;background-image:url('images/billing.jpg')">
<form action="bill_action.php" method="post">
<div style="margin-left:270;margin-top:150;border: 3px solid black; width: 440px; height: 110px;">
<table>
<tr>
<td class="style3"><strong><em>Enter Patient ID:</em></strong></td>
<td><input name="p_id" type="text" style="width: 80px" /></td>
</tr>
</table>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Submit1" type="submit" value="submit" style="width: 79px" />
</div>
</form>
</div>
</body>
</html>
