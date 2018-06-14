<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
<!--<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />-->
<title>Bright Side of Life</title>

</head>



<body>

<?php


$query = "select * from tblbuilder inner join tblarea on tblbuilder.areaid=tblarea.areaid inner join tblcity on tblbuilder.cityid=tblcity.cityid inner join tblstate on tblbuilder.stateid=tblstate.stateid inner join tbllogin on tblbuilder.loginid=tbllogin.loginid where tblbuilder.loginid=".$_SESSION["loginid"];
$res = mysql_query($query);
$rowuser = mysql_fetch_array($res);

?>

<h3 style="margin: 60px; border: 0px solid black; box-shadow: 0px 0px 4px 2px grey; padding: 15px; text-align: center; text-transform: capitalize; color: black; font-family: verdana;">Welcome <?php echo $_SESSION['username'];
?></h3>

  </body>
</html>