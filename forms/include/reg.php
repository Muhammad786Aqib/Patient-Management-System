<div ='registerBox' style="position: absolute;margin-top: -2%;margin-left: 90%;    color: #001B1D;">
			<?php
			
						if(!isset($_SESSION))
							session_start();
						error_reporting(0);	
						$user = $_SESSION['USER'];
						
						if(isset($user))
						{
							$id = $_SESSION['ID'];
							echo "<a href='personal_info.php?id=".$id."'>$user</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='sign_out.php'>Sign Out</a>'";
						}
						else
						{
							echo '<a href="registration.php">Register</a>';
						}
				?>
				
		</div>