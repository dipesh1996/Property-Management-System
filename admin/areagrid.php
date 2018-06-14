<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["areaid"]))
{
	$query = "delete from tblarea where areaid=".$_REQUEST["areaid"];
	mysql_query($query);
	echo "<script>alert('record deleted.');document.location='index.php?page=area.php';</script>";

}


$query = "select * from tblarea a inner join tblcity c on a.cityid=c.cityid";
$res = mysql_query($query);
?>
<body>
<table border="1px">
	<tr>
		<th>AreaID</th>
		<th>AreaName</th>
		<th>CityID</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["areaid"]."</td>";
			echo "<td>".$row["areaname"]."</td>";
			echo "<td>".$row["cityid"]."</td>";
			echo "<td><a href='index.php?page=areaupdate.php&areaid=".$row["areaid"]."'>Update</a></td>";
			echo "<td><a href='index.php?page=areagrid.php&areaid=".$row["areaid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>
</body>
</html>
