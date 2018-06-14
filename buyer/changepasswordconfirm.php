<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
<title>Property Consultancy</title>
</head>

<body>
<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "select * from tbllogin where username='".$_SESSION["username"]."' and password='".$_REQUEST["txtopassword"]."'";
$res = mysql_query($query);

$no = mysql_num_rows($res);

if($no > 0)
{
$row = mysql_fetch_array($res);
	$query = "update tbllogin set password='".$_REQUEST["txtnpassword"]."' where username='".$_SESSION["username"]."' and password='".$_REQUEST["txtopassword"]."'";
	mysql_query($query);
	echo "<script>alert('Password Changed Successfully');</script>";

}
else
{
	echo "<script>alert('Invalid Detail');</script>";
}
?>
</body>
</html>
