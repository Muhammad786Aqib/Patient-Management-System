<?php 
include "include/sess.php";
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
							}?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Appointment </title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	font-size: xx-large;
}
.style3 {
	margin-left: 80px;
}
</style>
</head>
<body style="background:url(include/bg1.jpg);">
<?php require_once("include/nav1.php"); ?>
<div id="page" class="container" style="width: 730px">
<body bgcolor="aqua">
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
    <form id="form1" action="appointment_action.php" method="post"  onsubmit="required()">
    <div style="margin-left:150; width: 407px;background: rgba(255, 255, 255, 0.35);height: 177px;padding:10px;margin-top:20px;">
        <table >
            <tr>
                <td >
                    Patient Name :</td>
                <td>
                    <input id="pname" name="pname" type="text" style="width: 200px" required="required" maxlength="15" onkeyup ="chg()"/></td>
            </tr>
            <tr>
                <td >
                    Father/Husband Name:</td>
                <td>
                    <input id="fname" name="fname" type="text" style="width: 200px" required="required" maxlength="15" onkeyup ="chg()"/></td>

            </tr>
            <tr>
                <td >
                    Age :</td>
                <td>
                    <input id="age" name="age" style="width: 73px" type="text" required="required" maxlength="3" onKeyPress="return isNumberKey(event)"/></td>
            </tr>
            <tr>
                <td >
                    Sex :</td>
                <td >
                    <input id="sex" type="radio" name="sex" value="male" required="required"/>
                    Male
                    <input id="se" type="radio" name="sex" value="female" required="required"/>
                    Female</td>
            </tr>
            <tr>
                <td >
                    CNIC #</td>
                <td>
                    <input id="cnic" name="cnic" type="text" required="required" pattern="[0-9]{13}" maxlength="13" onKeyPress="return isNumberKey(event)" /></td>
            </tr>
            <tr>
                <td >
                    Doctor's Name :</td>
                <td><select id="dname" name="dname">
                    <option selected="selected" name="dname">---select---</option>
    					<?php 
    					$query = mysql_query('SELECT * FROM doctor'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['d_name'].'">'.$row['d_name'].'</option>'; 
    							}
    							?> 
                    </select>
</td>
            </tr>
        </table>
        <p class="style3">
        <br /><input name="submit"  type="submit" value="Submit Information" />
    	</p>
    </div>
    
    </form>
</div>
</body>
</html>
<script>

</script>