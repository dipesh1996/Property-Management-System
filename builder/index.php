<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
	 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />
<title>Bright Side of Life</title>

</head>



<body>
<!-- wrap starts here -->
<div id="wrap">
<div id="header">
<h1 id="logo">Property<span class="green">Management</span></h1>
<h2 id="slogan">view...sell...rent...buy...</h2>

<!-- Menu Tabs -->
<ul>
<li id="current"><a href="index.php?page=home.php"><span>Home</span></a></li>
<li><a href="../index.php?page=logout.php"><span>Logout</span></a></li>
</ul>
</div>
<!-- content-wrap starts here -->
<div id="content-wrap"> <img src="images/headerphoto.jpg" alt="headerphoto" class="no-border" height="200" width="1024px" />
<div id="sidebar">
<h3>Builder Control</h3>
<ul class="sidemenu">
<li><a href="index.php?page=home.php">Home</a></li>
<li><a href="index.php?page=builderprofile.php">Profile</a></li>
<li><a href="index.php?page=project.php">Projects</a></li>

<li><a href="index.php?page=changepassword.php">Change Password</a></li>
<li><a href="../index.php?page=logout.php">Logout</a></li>
</ul>
<h3>Latest Property</h3>
<?php
$query = "select * from tblproperty order by propertyid desc limit 0,3";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{echo "<p><img src='../propertyimage/".$row["images"]."' height='150px' width='250px' alt=''/></p>";}
?>
</div>
<div id="main"> <a name="TemplateInfo"></a>
<?php

if(isset($_REQUEST["page"]))
{
	include($_REQUEST["page"]);
}
else
{
	include("home.php");
}
?>
</div>
<div id="rightbar">
<h3>Latest Project</h3>
<?php
$query = "select * from tblproject order by projectid desc limit 0,3";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{echo "<p><img src='../projectimage/".$row["projectimage"]."' height='200px' width='250px' alt=''/></p>";}
?></div>
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
</body></html>