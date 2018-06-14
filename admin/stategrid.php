<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["stateid"]))
{
	$query = "delete from tblstate where stateid=".$_REQUEST["stateid"];
	mysql_query($query);
	echo "<script>alert('record deleted.');document.location='index.php?page=state.php';</script>";

}


$query = "select * from tblstate";
$res = mysql_query($query);
?>
<body>
<table border="1px">
	<tr>
		<th>StateID</th>
		<th>StateName</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["stateid"]."</td>";
			echo "<td>".$row["statename"]."</td>";
			echo "<td><a href='index.php?page=stateupdate.php&stateid=".$row["stateid"]."'>Update</a></td>";
			echo "<td><a href='index.php?page=stategrid.php&stateid=".$row["stateid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>
</body>
</html>
