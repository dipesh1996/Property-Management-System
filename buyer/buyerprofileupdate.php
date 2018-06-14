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


$query = "update";




$query = "update tbllogin set username='".$_REQUEST["txtusername"]."',securityquestion='".$_REQUEST["txtsecurityquestion"]."',securityanswer='".$_REQUEST["txtsecurityanswer"]."' where loginid=".$_SESSION["loginid"];
mysql_query($query);


$query = "update tblbuyer set firstname='".$_REQUEST["txtfirstname"]."',lastname='".$_REQUEST["txtlastname"]."',address='".$_REQUEST["txtaddress"]."',areaid=".$_REQUEST["drparea"].",cityid=".$_REQUEST["drpcity"].",stateid=".$_REQUEST["drpstate"].",pincode=".$_REQUEST["txtpincode"].",email='".$_REQUEST["txtemail"]."',mobile=".$_REQUEST["txtmobile"].",gender='".$_REQUEST["rbgender"]."' where loginid=".$_SESSION["loginid"];
mysql_query($query);

echo "<script>alert('Profile Changed.')</script>";

?>
</body>
</html>
