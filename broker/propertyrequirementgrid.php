<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
if(isset($_REQUEST["reqid"]))
{
	$query = "delete from tblpropertyrequirement where requirementid=".$_REQUEST["reqid"];
	mysql_query($query);
	echo "<script>alert('Property requirement deleted.');document.location='index.php?page=propertyrequirement.php';</script>";
}
$query = "select * from tblpropertyrequirement";
$res = mysql_query($query);
?>

<body>
<table border="1px">
	<tr>
		<th>PostDate</th>
		<th>Min.Area</th>
		<th>Max.Area</th>
		<th>Min.Price</th>
		<th>Max.Price</th>
		<th>For</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["postdate"]."</td>";
			echo "<td>".$row["minimumarea"]."</td>";
			echo "<td>".$row["maximumarea"]."</td>";
			echo "<td>".$row["minimumprice"]."</td>";
			echo "<td>".$row["maximumprice"]."</td>";
			echo "<td>".$row["requirementfor"]."</td>";
			echo "<td><a href='index.php?page=propertyrequirementupdate.php&reqid=".$row[0]."'>Update</a></td>";
			echo "<td><a href='index.php?page=propertyrequirementgrid.php&reqid=".$row[0]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>

</body>
</html>
