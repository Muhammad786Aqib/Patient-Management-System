<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Doctor</title>

    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <style type="text/css">
      .style1 {
      text-align: center;
      }
      .style2 {
      font-size: xx-large;
      }
      .style3 {
      font-size: 14pt;
      }
    </style>
  </head>
  <body style="background:url(include/bg1.jpg);">
<?php include_once("include/table_styles.php"); ?>
    <?php require_once("include/nav1.php"); ?>
    
    <div id="page" class="container" style="width: 730px">
      <table>
        <tr>
          <td>
            <form action="doctor_action.php" method="post" style="width: 309px">
              <strong>
                <span class="style3">
                  Enter Doctor name and fee:<br>
                    <br>
                    </span>
              </strong>
              <table>
                <tr>
                  <td>
                    <p>Enter doctor name</p>
                  </td>
                  <td>
                    <input name="mname" type="text" required="required"/>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Enter doctor fee:</p>
                  </td>
                  <td>
                    <input name="mprice" type="text" required="required" />
                  </td>
                </tr>
              </table>
              <br>
                <input name="Submit1" type="submit" value="submit" style="width: 78px" />
              </form>
          </td>
          <td style="width: 40px">
            <form action="doctor_update.php" method="post">
              <td valign="top" class="style3">
                <strong>Change Doctor Fee:</strong>
                <br>
                  <br>
                    <table>
                      <tr>
                        <td>Select Doctor name:</td>
                        <td>
                          <select id="test_type" name="dname" >
                            <option selected="selected" name="dname" value="name">select doctor name</option>
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
    						$query = mysql_query('SELECT * FROM doctor'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['d_name'].'">'.$row['d_name'].'</option>'; 
    							}?>
                          </select>

                        </td>
                      </tr>
                      <tr>
                        <td>Enter updated fee price:</td>
                        <td>
                          <input name="d_fee" type="text" required="required"/>
                        </td>
                      </tr>
                    </table>
                    <br>
                      <input name="Submit2" type="submit" value="change fee">
            </form>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
