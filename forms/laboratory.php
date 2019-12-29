<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Laboratory</title>

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
<?php include_once("include/table_styles.php"); ?>
	<?php require_once("include/nav1.php"); ?>
<div id="page" class="container" style="width: 730px">
<form id="form1" action="laboratory_detail1.php" method="post">
    <div>
        <table >
            <tr>
                <td>
                    Patient ID:</td>
                <td>
                    <input id="p_id" name="p_id" type="text" style="width: 80px" />
                    <input id="Submit1" type="submit" value="submit" /></td>
            </tr>
            
            </table>
        <br />
            <table>
            
            <tr>
               
                <td></td>
            </tr>
            </table>
    
    </div>
    </form>
</div>
</body>
</html>
