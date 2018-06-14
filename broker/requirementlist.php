<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
<title>Untitled Document</title>
</head>
<?php
$query = "select * from tblpropertyrequirement";
$res = mysql_query($query);
?>

<body>
<h3 align="center">Requirement Detail...</h3><hr>
<table border="1px">
	<tr>
		<th>PostDate</th>
		<th>Min.Area</th>
		<th>Max.Area</th>
		<th>Min.Price</th>
		<th>Max.Price</th>
		<th>For</th>
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
		echo "</tr>";
	}
?>
</table>

</body>
</html>
