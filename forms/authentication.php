<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Authentication Page</title>

    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <style type="text/css">
      .style1 {
      text-align: center;
      }
      .style2 {
      font-size: xx-large;
      }
      .style3 {
      font-size: large;
      }
    </style>
  </head>
  <body>
    <?php require_once("include/nav1.php"); ?>
    <div id="menu-wrapper">
      <div id="menu" class="container">
        <ul>
          <?php require('nav.php'); ?>
        </ul>
      </div>
    </div>
    <div id="page" class="container" style="width: 730px">
      <table>
        <tr>
          <td style="width: 450px">
            <form id="form" action="authentication_action.php" method="post" >
              <div>
                <strong>
                  <span class="style3">Provide the following information :</span>
                  <span style="font-size: 16pt">
                    <br />
                    <br />
                  </span>

                </strong>
                <span style="font-size: 16pt">
                  <table >
                    <tr>
                      <td>
                        <span style="font-size: 12pt">Department</span>
                      </td>
                      <td>
                        <select id="dept" name="dept" >
                          <option selected="selected" value="departments">select department here</option>
                          <option value="appointment">appointment</option>
                          <option value="prescription">prescription</option>
                          <option value="reception">reception</option>
                          <option value="room_allotment">room_allotment</option>
                          <option value="room_services">room_services</option>
                          <option value="pharmacy">pharmacy</option>
                          <option value="laboratory">laboratory</option>
                          <option value="billing">billing</option>
                          <option value="admin">admin</option>
                        </select>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <span style="font-size: 12pt">Authentication code</span>
                      </td>
                      <td>
                        <input id="code" name="code" type="password" required="required"/>
                      </td>
                    </tr>

                  </table>
                  <br />
                </span>

              </div>
              <br>
                <input id="Submit1" type="submit" value="submit information" />
              </form>
          </td>
          <td valign="top" class="style3" style="width: 397px">
            <strong>Change Authentication passwords:</strong>
            <br>
              <br>
                <form action="authentication_update.php" method="post">
                  <div>
                    <table>
                      <tr>
                        <td>Select Department:</td>
                        <td>

                          <select id="test_type" name="dept" >
                            <option selected="selected" name="dept" value="name">select department here</option>
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
    						$query = mysql_query('SELECT * FROM authentication'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['dept'].'">'.$row['dept'].'</option>'; 
    							}?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Old password:</td>
                        <td>
                          <input name="opass" type="password" required="required">
                        </td>
                      </tr>
                      <tr>
                        <td>New password:</td>
                        <td>
                          <input name="npass" type="password" required="required">
                        </td>
                      </tr>
                    </table>
                    <br>
                      <input name="Submit1" type="submit" value="Change code" />
                    </div>
                </form>
              </td>
        </tr>
      </table>

    </div>
  </body>
</html>

