<?php
$feedback = $_REQUEST['fb'];
if($feedback != -1)
	echo '<div class="fb">'.$feedback.'</div>';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sign up</title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="jquery.js">
</script>
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
.fb
{
	    position: absolute;
    margin-top: 15%;
    margin-left: 41%;
    color: red;
    font-weight: bold;
    background: rgba(255, 255, 0, 0.35);
    padding: 6px;
    border-radius: 11px;
}
</style>
</head>
<body style="background:url(include/bg1.jpg);">
<?php include_once("include/table_styles.php"); ?>

	  <?php include_once("include/nav1.php"); ?>

<div id="page" class="container" style="width: 730px">
 <form id="form1" method="post" action="sign_up_action.php">
    <div style="padding-left:200">
        <div>
			<p class="style3">
        <span style="font-size: 24pt">Sign Up<br />
            <br />
            </p>
		</div>
            <table>
                <tr>
                    <td>
                        User Name:</td>
                    <td>
                        <input id="Text1" name="user" type="text" /></td>
                </tr>
                <tr>
                    <td>
                        Password:</td>
                    <td>
                        <input id="Password1" name="password" type="password" /></td>
                </tr>
                
				<tr>
					<td>
						signing up for
					</td>
					<td>
                    <select id="dept" name="dept" onchange='updateAuthUI(this);' >
                        <option selected="selected" value="departments">select department here</option>
                    	<option value="appointment">appointment</option>
						<option value="prescription">prescription</option>
						<option value="room_allotment">room_allotment</option>
						<option value="room_services">room_services</option>
						<option value="pharmacy">pharmacy</option>
						<option value="laboratory">laboratory</option>
						<option value="billing">billing</option>
						<option value="admin">admin</option>
						<option value="super" >super</option>
                    </select>
					</td>
              </tr>
			  <tr id='auth1_tr'>
                    <td >
                        Authentication</td>
                    <td>
                        <input id="Password2" name="authentication" type="password" />
						<script>
						$('#auth1_tr').hide();
						</script>
					</td>
                </tr>
            </table>
            <br />
            <input id="Submit1" type="submit" value="Submit Information" /></span></div>
    </form>
</div>
</body>
<script>
function updateAuthUI(t)
{
	if(t.value == "super")
	{
		for(var i=1; i<5; i++)
		{
			if(i%2==0)
				$('#auth1_tr').fadeOut();
			else
				$('#auth1_tr').fadeIn();
			
			$('#auth1_tr').fadeIn();
			
		}
	}
	else
	{
		$('#auth1_tr').fadeOut('slow');
	}
}
</script>
</html>
<?php include_once("include/table_styles.php"); ?>