<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Medicine</title>

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
            <form action="medicine_action.php" method="post" style="width: 380px">

              <span class="style3">
                <strong>
                  Enter medicine name and price:<br>
                    <br>
                    </strong>
              </span>

              <table>
                <tr>
                  <td>
                    <p>Enter medicine name :</p>
                  </td>
                  <td>
                    <input name="mname" type="text" required="required"/>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Enter medicine price :</p>
                  </td>
                  <td>
                    <input name="mprice" type="text" required="required" />
                  </td>
                </tr>
              </table>
              <br>
                <input name="Submit1" type="submit" value="submit" style="width: 78px" />
          </td>
          </form>
          <form action="medicine_update.php" method="post">
            <td valign="top" class="style3">
              <strong>Update medicine price:</strong>
              <br>
                <br>
                  <table>
                    <tr>
                      <td>Select medicine:</td>
                      <td>
                        <select id="test_type" name="medicine" >
                          <option selected="selected" name="medicine" value="name">select medicine here</option>
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
    						$query = mysql_query('SELECT * FROM medicine'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['m_name'].'">'.$row['m_name'].'</option>'; 
    							}?>
                        </select>

                      </td>
                    </tr>
                    <tr>
                      <td>updated price:</td>
                      <td>
                        <input name="mprice" type="text" required="required">
                      </td>
                    </tr>
                  </table>
                  <br>
                    <input name="Submit2" type="submit" value="update price"></td>
          </form>
        </tr>
      </table>
    </div>
  </body>
</html>
