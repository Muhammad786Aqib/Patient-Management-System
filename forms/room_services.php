<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Room Services</title>

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
<form id="form1" method="post" action="room_services_detail1.php">
    <div>
        <table>
		
<caption>ROOM SERVICE</caption>
            <tr>
                <td>
                    Patient ID:</td>
                <td>
                    <input id="p_id" name="p_id" style="width: 80px" type="text" required="required"/>
                    <input id="Submit2" type="submit" value="submit" /></td>
            </tr>
            
            
        </table>
    
    </div>
        <br />
        </form>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>