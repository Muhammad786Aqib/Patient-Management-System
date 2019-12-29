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
      .style4 {
	font-size: large;
}
    </style>
  </head>
  <body>
  <?php require_once("include/nav1.php"); ?>
	<?php include "include/reg.php"; ?>
	</div>
    <div id="menu-wrapper">
      <div id="menu" class="container">
        <ul>
        
          <?php require('nav.php'); ?>
        
        </ul>
      </div>
    </div><div id="page" class="container" style="width: 730px;">
    <form action="cnic_action.php" method="post">
        <span style="font-family: Century Gothic"><strong><span class="style4">Enter CNIC number</span></strong><span class="style4"> :</span></span>
        <input id="cnic" name="cnic" type="text" />
        <input id="Submit1" type="submit" value="Search" style="width: 80px" />
    </form>

</div>
</body>
</html>
