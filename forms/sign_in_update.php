<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Registration</title>

    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <style type="text/css">
      .style1 {
      text-align: center;
      }
      .style2 {
      font-size: xx-large;
      }
      .style3 {
	text-align: center;
	font-size: xx-large;
}
    </style>
  </head>
 <body style="background:url(include/bg1.jpg);">
   <?php require_once("include/nav1.php"); ?>
    <div id="page" class="container" style="width: 730px;">
    <table>
<form action="sign_update.php" method="post">
    <td valign="top" class="style3">
    <strong>Change password:<br>
	<br></strong>
    <table>
    <tr>
    <td>Old Username:</td>
    <td>
    <input name="ouser" type="text" required="required">
	</td>
	</td>
    </tr>
    <tr>
    <td>Old Password:</td>
    <td><input name="opass" type="text" required="required"></td>
    </tr>
    <tr>
    <td>Select department:</td>
    <td><select id="test_type" name="deptt">
                    <option selected="selected" name="deptt" value="name">select department here</option>
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
    						$query = mysql_query('SELECT Distinct(dept) FROM sign_up'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['dept'].'">'.$row['dept'].'</option>'; 
    							}?> 
                    </select>
    </td>
    </tr>
    <tr>
    <!--<td>New Username:</td>
    <td><input name="nuser" type="text"></td>--->
    </tr>
    <tr>
    <td>New Password</td>
    <td><input name="npass" type="text"></td>
    </tr>
    </table>
    <br>
    <input name="Submit1" type="submit" value="Update Information" /></form>
    </td>
    </tr></table>
    
    </div>
</body>
</html>

<?php include_once("include/table_styles.php"); ?>