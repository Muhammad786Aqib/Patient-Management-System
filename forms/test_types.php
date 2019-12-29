<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Test types</title>

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
          <td style="width: 381px">
            <form id="form1" method="post" action="test_type_action.php">
              <div>
                <strong>
                  <span class="style3">Enter new </span>
                  <span style="font-size: 14pt">&nbsp;test type and rate:</span>
                </strong>
                <br />
                <br />
                <table>
                  <tr>
                    <td>
                      Enter test type
                    </td>
                    <td>
                      <input id="test" name="test" type="text" required="required"/>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Enter rate
                    </td>
                    <td>
                      <input id="rate" name="rate" type="text" required="required"/>
                    </td>
                  </tr>
                </table>
                <br />
                <input id="Submit1" type="submit" value="submit information" />
              </div>
            </form>
          </td>
          <form action="test_update.php" method="post">
            <td valign="top">
              <span class="style3">
                <strong>Change Test price:</strong>
              </span>
              <br>
                &nbsp;<table>
                  <tr>
                    <td>Select test type:</td>
                    <td>
                      <select id="test_type" name="test_type" >
                        <option selected="selected" name="test_type" value="name">select test name</option>
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
    						$query = mysql_query('SELECT * FROM test_types'); 
    						while($row = mysql_fetch_array($query)) 
    							{ 
    							    echo '<option name="'.$row['test_type'].'">'.$row['test_type'].'</option>'; 
    							}?>
                      </select>



                    </td>
                  </tr>
                  <tr>
                    <td>Enter updated price</td>
                    <td>
                      <input name="nprice" type="text" required="required">
                      </td>
                  </tr>
                </table><br>
                  <input type="submit" value="Change price">

                  </td>
        </tr>
      </table>
      </form>
    </div>
	<div class="feedback1" style="display:none;margin-top:-35%;margin-left:30%;" id="feedbackBox">
				<?php
				if(isset($_REQUEST['info']))
				{	echo $_REQUEST['info'];
					?><script>
							
							
								jQuery(document).ready(function($) {
									var t = $('#feedbackBox');
									
									disco(t);
									
								});
								
						</script>
					<?php
				}
				?>
	</div>
  </body>
</html>
<script>

	function disco(t)
	{
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		
		$(t).fadeIn('fast');
		$(t).fadeOut('fast');
		$(t).fadeIn('fast');
		
		
	}
</script>