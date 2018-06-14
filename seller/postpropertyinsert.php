<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
	 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<title>Property Consultancy</title>
</head>

<body>
<?php
$query = "insert into tblproperty (propertyfor,address,areaid,pincode,loginid,postdate,price,plotarea,carpetarea,builduparea,typeid,furniture,totalbedroom,totalbathroom,images,status) values ('".$_REQUEST["rbfor"]."','".$_REQUEST["txtaddress"]."',".$_REQUEST["drparea"].",".$_REQUEST["txtpincode"].",".$_SESSION["loginid"].",'".date("Y/m/d")."',".$_REQUEST["txtprice"].",".$_REQUEST["txtplotarea"].",".$_REQUEST["txtcarpatarea"].",".$_REQUEST["txtbuilduparea"].",".$_REQUEST["drptype"].",'".$_REQUEST["drpfurniture"]."',".$_REQUEST["txttotalbedroom"].",".$_REQUEST["txttotalbathroom"].",'".$_FILES["flpropertyimage"]["name"]."','confirm')";
mysql_query($query);
move_uploaded_file($_FILES["flpropertyimage"]["tmp_name"],"../propertyimage/".$_FILES["flpropertyimage"]["name"]);
echo "<script>alert('Inserted...');document.location='index.php?page=postproperty.php';</script>";
?>
</body>
</html>
