<?php
if(!isset($_SESSION))
	session_start();



?>
<!DOCTYPE html>

<html>
<head>
<title>Medi Cure a Medical hospital Category Flat Bootstrap Responsive Website Template | Blog :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medi Cure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- toggle menu links -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu links -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<!-- effect9 links -->
<link href="css/ihover.css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/classie.js"></script>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
			
	<!-- start-smoth-scrolling -->
</head>
<!-- slide-toggle-menu -->

<body class="cbp-spmenu-push">
       <!--top-header-->
		<!--bottom-->
		
		  <section class="button">
					<button id="showLeftPush"><img src="images/menu.gif" alt=""></button>
		   </section>
		   
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow:auto;">
				<h3>Menu</h3>
						<a href="info.php?go=info.php">INFO</a>
						<a href="sign_in.php?go=admin.php">ADMIN</a>
						<a href="sign_in.php?go=appointment.php">APPOINTMENT</a>
						<a href="sign_in.php?go=prescription.php">PRESCRIPTION</a>
						<a href="sign_in.php?go=reception.php">ALLOTMENT</a>
						<a href="sign_in.php?go=room_services.php">SERVICES</a>
						<a href="sign_in.php?go=pharmacy.php">PHARMACY</a>
						<a href="sign_in.php?go=laboratory.php">LAB</a>
						<a href="sign_in.php?go=bill.php">BILLING</a>
		    </nav>
		  
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		
		
<!-- banner -->
<div class="banner page-head" style='border-bottom: 2px solid black;'>
	<div class="logo">
		<h1><a href="index.php" class="link1" ><p style="	font-variant: small-caps;">PATIENT MANAGEMENT SYSTEM</p></a></h1>
	</div>
	<div class="search">		
		<a  href="search.php"><img src='include/search.png' /> </a>
	</div>
	
		<div id="small-dialog" class="mfp-hide">
			<div class="search-top">
				<div class="login">
					<input type="submit" value="">
					<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
				</div>			
			</div>				
		</div>
		
		
		
		<p style='float:right;margin-right:10px;'>
			<a style="color:white;" href="sign_in.php?go=index.php">
			<?php
				
						error_reporting(0);	
						$user = $_SESSION['USER'];
						
						if(isset($user))
						{
							$id = $_SESSION['ID'];
							echo "<a class='link1' href='personal_info.php?id=".$id."'>$user</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='sign_out.php' class='link1'>Out</a>";
						}
						else
						{
							echo '<a href="sign_in.php" class="link1">Sign in page</a>';
						}
			?>
			</a>
		</p>
		
		
		
		
	<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
</div>

