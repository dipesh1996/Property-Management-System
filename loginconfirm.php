<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>

<body>
<?php

$query = "select * from tbllogin where username='".$_REQUEST["txtusername"]."' and password='".$_REQUEST["txtpassword"]."'";

$res = mysql_query($query);

$no = mysql_num_rows($res);

if($no > 0)
{
	$row = mysql_fetch_array($res);
	$_SESSION["username"] = $row["username"];
	$_SESSION["loginid"] = $row["loginid"];
	if($row["usertype"] == "seller")
	{
	
		echo "<script>alert('login successfull');document.location='seller/';</script>";
	}
	else if($row["usertype"] == "admin")
	{
			echo "<script>alert('login successfull');document.location='admin/';</script>";
	}
	else if($row["usertype"] == "builder")
	{
			echo "<script>alert('login successfull');document.location='builder/';</script>";
	}
	else if($row["usertype"] == "buyer")
	{
			echo "<script>alert('login successfull');document.location='buyer/';</script>";
	}
	else if($row["usertype"] == "broker")
	{
			echo "<script>alert('login successfull');document.location='broker/';</script>";
	}
}
else
{

	echo "<script>alert('Invalid Detail');document.location='index.php?page=login.php';</script>";
}
?>
</body>
</html>
