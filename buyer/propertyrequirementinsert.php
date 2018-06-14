<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	  <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	  
<title>Property Consultancy</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "insert into tblpropertyrequirement (postdate,loginid,minimumarea,maximumarea,minimumprice,maximumprice,furniture,requirementfor,typeid,totalbedroom,totalbathroom) values ('".date("Y/m/d")."',".$_SESSION["loginid"].",".$_REQUEST["txtminimumarea"].",".$_REQUEST["txtmaximumarea"].",".$_REQUEST["txtminimumprice"].",".$_REQUEST["txtmaximumprice"].",'".$_REQUEST["txtfurniture"]."','".$_REQUEST["rbfor"]."',".$_REQUEST["drptype"].",".$_REQUEST["txttotalbedroom"].",".$_REQUEST["txttotalbathroom"].")";
mysql_query($query);
echo "<script>alert('Registration confirm.');document.location='index.php?page=propertyrequirement.php';</script>";
?>
</body>
</html>
