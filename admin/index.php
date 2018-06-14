<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" /><title>Bright Side of Life</title>
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/kp.ico" />
</head>



<body>
<!-- wrap starts here -->
<div class="container-fluid">
<div class="row">
<div id="wrap">
<div id="header">

<h1 id="logo">Property<span class="green">Management</span></h1>
<h2 id="slogan">view...sell...rent...buy...</h2>

<!-- Menu Tabs -->
<?php
if(isset($_SESSION["username"]))
{
?>
<ul>
<li id="current"><a href="index.php?page=home.php"><span>Home</span></a></li>
<li><a href="../index.php?page=logout.php"><span>Logout</span></a></li>
</ul>
<?php
}
?>
</div>
<!-- content-wrap starts here -->
<div id="content-wrap"> <img src="images/headerphoto.jpg" alt="headerphoto" class="no-border" height="180" width="1020" />
<div id="sidebar">
<?php
if(isset($_SESSION["username"]))
{
?>
<h3 align="center">Admin Control</h3>
<ul class="sidemenu">
<li><a href="index.php?page=home.php">Home</a></li>
<li><a href="index.php?page=area.php">Area</a></li>
<li><a href="index.php?page=city.php">City</a></li>
<li><a href="index.php?page=state.php">State</a></li>
<li><a href="index.php?page=Propertytype.php">Propertytype</a></li>
<li><a href="index.php?page=changepassword.php">changepassword</a></li>
<li><a href="../index.php?page=logout.php">Logout</a></li>
</ul>
<?php
}
?><br /><br />
</div>
<!--<div id="main"> <a name="TemplateInfo"></a>
-->
  <div class="container-fluid">
    <div class="col-sm-3 col-md-6 col-lg-8" >
<?php

if(isset($_REQUEST["page"]))
{
	include($_REQUEST["page"]);
}
else
{
	include("login.php");
}
?>
</div>
</div>
</div>
</div>
<!-- footer starts here -->
<div id="footer">
<div class="footer-left">
<p class="align-left"> © 2018 <strong>Developers</strong>
	<br/>&nbspDeveloped by |<strong> Dipesh | Imran</strong><a href="http://www.styleshout.com/"></a>	
</div>
</div>
<!-- footer ends here --><!-- wrap ends here --> </div>
</div>
</div>
</body></html>