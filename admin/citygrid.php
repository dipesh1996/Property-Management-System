<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["cityid"]))
{
	$query = "delete from tblcity where cityid=".$_REQUEST["cityid"];
	mysql_query($query);
	echo "<script>alert('record deleted.');document.location='index.php?page=city.php';</script>";

}


$query = "select * from tblcity";
$res = mysql_query($query);
?>
<body>
<table border="1px">
	<tr>
		<th>CityID</th>
		<th>CityName</th>
		<th>StateId</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["cityid"]."</td>";
			echo "<td>".$row["cityname"]."</td>";
			echo "<td>".$row["stateid"]."</td>";
			echo "<td><a href='index.php?page=cityupdate.php&cityid=".$row["cityid"]."'>Update</a></td>";
			echo "<td><a href='index.php?page=citygrid.php&cityid=".$row["cityid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>
</body>
</html>
