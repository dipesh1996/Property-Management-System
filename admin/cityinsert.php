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

$query = "insert into tblcity (cityname,stateid) values ('".$_REQUEST["txtcityname"]."',".$_REQUEST["drpstate"].")";
mysql_query($query);
echo $query;
echo "<script>alert('record inserted.');document.location='index.php?page=city.php';</script>";

?>
</body>
</html>
