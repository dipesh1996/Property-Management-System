<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$query = "select * from tblproject";
$res = mysql_query($query);
?>

<body>
<table border="0px">
	<tr>
		<th>Project Title</th>
		<th>Address</th>
		<th>Description</th>
		<th>Image</th>
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["projecttitle"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "<td>".$row["projectdescription"]."</td>";
			echo "<td><img src='projectimage/".$row["projectimage"]."' height='100px' width='100px' alt=''/></td>";			
		echo "</tr>";
	}
?>
</table>

</body>
</html>
