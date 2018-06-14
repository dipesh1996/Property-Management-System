<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
if(isset($_REQUEST["brokerid"]))
{
	$query = "delete from tblproperty where propertyid=".$_REQUEST["brokerid"];
	mysql_query($query);
}
$query = "select * from tblproperty";
$res = mysql_query($query);
?>

<body>
<table border="1px">
	<tr>
	   <th>ID</th>
		<th>For</th>
		<th>Price</th>
		<th>PlotArea</th>
		<th>Carpatarea</th>
		<th>BuildupArea</th>
		<th>Image</th>
		<th>Status</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
		   echo "<td>".$row["propertyid"]."</td>";
			echo "<td>".$row["propertyfor"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["plotarea"]."</td>";
			echo "<td>".$row["carpetarea"]."</td>";
			echo "<td>".$row["builduparea"]."</td>";
			echo "<td><img src='../propertyimage/".$row["images"]."' height='80px' width='80px' alt=''/></td>";
			echo "<td>".$row["status"]."</td>";
			echo "<td><a href='index.php?page=postpropertyupdate.php&propertyid=".$row["propertyid"]."'>Update</a></td>";
			echo "<td><a href='index.php?page=postproperty.php&brokerid=".$row["propertyid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>

</body>
</html>
