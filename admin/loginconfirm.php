<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "select * from tbllogin where username='".$_REQUEST["txtusername"]."' and password='".$_REQUEST["txtpassword"]."'";
$res = mysql_query($query);

$no = mysql_num_rows($res);

if($no > 0)
{
$row = mysql_fetch_array($res);
	if($row["usertype"] == "admin")
	{
		$_SESSION["username"] = $row["username"];
			echo "<script>document.location='index.php?page=home.php';</script>";
	}
	else
	{	
	echo "<script>alert('Invalid Detail');document.location='index.php?page=login.php';</script>";
	}

}
else
{
	echo "<script>alert('Invalid Detail');</script>";
}
?>
</body>
</html>
