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
<?php require_once("include/nav1.php"); ?>
<body style="background:url(include/bg1.jpg);">
<div id="page" class="container" style="width: 730px">
<form id="form1" method="post" action="pharmacy_detail1.php" >
    <div>
        <table>
		<caption >Pharmacy </caption>
            <tr>
                <td>
                    Patient ID:</td>
                <td>
                    <input id="Text1" name="p_id" type="text" style="width: 80px" required="required"/>
                    <input id="Submit2" type="submit" value="submit" /></td>
            </tr>
            
            
        </table>
    
    </div>
	<br><input id="Submit1"  type="submit" value="Submit Information" />
    </form>
</div>
</body>
</html>
<?php include_once("include/table_styles.php"); ?>
