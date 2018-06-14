<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
                <link rel="stylesheet" href="images/BrightSide.css" type="text/css" />
		      <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	        <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/kp.ico" />
        <script src="jq/jquery.js"></script>
        <script src="jq/fadein.js"></script>
		<script src="jq/hide.js"></script>

		<title>Bright Side of Life</title>
		<script src="assets/jquery.js"></script>
		<script src="assets/jquery.bxslider.min.js"></script>
		<link href="assets/jquery.bxslider.css" rel="stylesheet" />
	</head>



	<body>
	<!-- wrap starts here -->
	<div class="container-fluid">
		<div id="wrap">
	<div id="header">
	
	<h1 id="logo" style="text-transform: capitalize;">Property<span class="green">Management</span></h1>

	<h2 id="slogan"><br></h2>
	<!-- Menu Tabs -->
	<ul>
	<li id="current"><a href="index.php?page=home.php"><span>Home</span></a></li>
	<li><a href="index.php?page=login.php"><span>Login</span></a></li>
	</ul>
	</div>
	<!-- content-wrap starts here -->
	<div id="content-wrap"> <img src="images/headerphoto.jpg" alt="headerphoto" class="no-border" height="200" width="1024px" />
	<div id="sidebar">
	<h3>User Control</h3>
	<ul class="sidemenu" >
	<li><a href="index.php?page=home.php">Home</a></li>
	<li><a href="index.php?page=Login.php">Login</a></li>
	<li><a href="index.php?page=Brokerregistration.php">Broker Registration</a></li>
	<li><a href="index.php?page=builderregisration.php">Builder Registration</a></li>
	<li><a href="index.php?page=Buyerregistration.php">Buyer Registration</a></li>
	<li><a href="index.php?page=Sellerregistration.php">Seller Registration</a></li>
	<li><a href="index.php?page=About us.php">About us</a></li>
	<li><a href="index.php?page=propertylist.php">Property</a></li>
	<li><a href="index.php?page=projectlist.php">Project</a></li>
	<li><a href="index.php?page=requirementlist.php">Requirement</a></li>
	<li><a href="index.php?page=Contact us.php">Contact us</a></li>
	</ul>
	<h3>Latest Property</h3>
	<?php
	$query = "select * from tblproperty order by propertyid desc limit 0,3";
	$res = mysql_query($query);
	while($row = mysql_fetch_array($res))
	{echo "<p><img src='propertyimage/".$row["images"]."' height='150px' width='250px' alt='' id='message' /></p>";}
	?>
	</div>
	<div id="main" > <a name="TemplateInfo"></a>
	<?php

	if(isset($_REQUEST["page"]))
	{
		include($_REQUEST["page"]);
	}
	else
	{
		include("Home.php");
	}
	?>
	</div>
	<div id="rightbar" class="ok">
	<h3>Latest Project</h3>
	<?php
	$query = "select * from tblproject order by projectid desc limit 0,3";
	$res = mysql_query($query);
	while($row = mysql_fetch_array($res))
	{echo "<p><img src='projectimage/".$row["projectimage"]."' height='200px' width='250px' alt=''/></p>";}
	?>
	</div>
	<!-- content-wrap ends here --> </div>
	<!-- footer starts here -->
	<div id="footer">
	<div class="footer-left">
	<p class="align-left"> © 2018 <strong>Developers</strong>
	<br/>&nbspDeveloped by |<strong> Dipesh | Imran</strong><a href="http://www.styleshout.com/"></a>	
	  <a href="http://validator.w3.org/check/referer"></a>
	 <a href="http://jigsaw.w3.org/css-validator/check/referer"></a>
	</p>
	</div>
	<div class="footer-right">
	<p class="align-right"> <a href="index.html"></a>&nbsp;&nbsp;
	<a href="index.html"></a>&nbsp;&nbsp;
	<a href="index.html"></a> </p>
	</div>
	</div>
	<!-- footer ends here --><!-- wrap ends here --> </div>
	<div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;"></div>
	</div>
	</div>
	</body>
</html>