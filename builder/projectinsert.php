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
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "insert into tblproject (projecttitle,address,projectimage,projectdescription,loginid) values ('".$_REQUEST["txtprojecttitle"]."','".$_REQUEST["txtaddress"]."','".$_FILES["flprojectimage"]["name"]."','".$_REQUEST["txtdescription"]."',".$_SESSION["loginid"].")";
mysql_query($query);
move_uploaded_file($_FILES["flprojectimage"]["tmp_name"],"../projectimage/".$_FILES["flprojectimage"]["name"]);

echo "<script>alert('Project data inserted...');document.location='index.php?page=project.php';</script>";
?>
</body>
</html>
