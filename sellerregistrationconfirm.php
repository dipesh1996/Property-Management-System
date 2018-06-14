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
	
	
	$query = "insert into tbllogin (username,password,securityquestion,secureanswer,usertype) values ('".$_REQUEST["txtusername"]."','".$_REQUEST["txtpassword"]."','".$_REQUEST["txtsecurityquestion"]."','".$_REQUEST["txtsecureanswer"]."','seller')";
	mysql_query($query);
	
	$query = "select max(loginid) from tbllogin";
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
	
	
	$query = "insert into tblseller (firstname,lastname,address,areaid,cityid,stateid,pincode,email,mobile,gender,loginid) values ('".$_REQUEST["txtfirstname"]."','".$_REQUEST["txtlastname"]."','".$_REQUEST["txtaddress"]."',".$_REQUEST["drparea"].",".$_REQUEST["drpcity"].",".$_REQUEST["drpstate"].",".$_REQUEST["txtpincode"].",'".$_REQUEST["txtemail"]."',".$_REQUEST["txtmobile"].$row[0].")";
	mysql_query($query);
	
	echo "<script>alert('Registration confirm.');document.location='index.php?page=login.php';</script>";
?>
</body>
</html>
