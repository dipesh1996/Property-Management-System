<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property List</title>
</head>
<?php
$query = "select * from tblproperty";
$res = mysql_query($query);
?>

<body>
<h3 align="center">Property Detail</h3><hr />
<table border="1px">
	<tr>
		<th>For</th>
		<th>Price</th>
		<th>PlotArea</th>
		<th>Carpatarea</th>
		<th>BuildupArea</th>
		<th>Image</th>
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["propertyfor"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["plotarea"]."</td>";
			echo "<td>".$row["carpetarea"]."</td>";
			echo "<td>".$row["builduparea"]."</td>";
			echo "<td><img src='propertyimage/".$row["images"]."' height='80px' width='80px' alt=''/></td>";
		echo "</tr>";
	}
?>
</table>

</body>
</html>
