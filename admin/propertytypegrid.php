<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="bootstrap-3.3.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>Property Consultancy</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["ptid"]))
{
	$query = "delete from tblpropertytype where propertytypeid=".$_REQUEST["ptid"];
	mysql_query($query);
	if ($query) {
		echo "<script>alert('Deleted...');document.location='index.php?page=propertytype.php';</script>";	
	}
}


$query = "select * from tblpropertytype";
$res = mysql_query($query);
?>
<body>
<form class="form-horizontal" name="frmpropertytype" action="index.php?page=propertytypeinsert.php" onsubmit="return validate();" method="post">
<table border="1px">
	<tr>
		<th>PropertytypeID</th>
		<th>PropertytypeName</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["propertytypeid"]."</td>";
			echo "<td>".$row["propertytypename"]."</td>";
			echo "<td><a href='propertytypeupdate.php?ptuid=".$row["propertytypeid"]."''>Update</a></td>";
			echo "<td><a href='propertytypegrid.php?ptid=".$row["propertytypeid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>
</body>
</html>
