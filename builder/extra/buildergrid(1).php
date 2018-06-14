<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);
if(isset($_REQUEST["builderid"]))
{
	$query = "delete from tblbuilder where builderid=".$_REQUEST["builderid"];
	mysql_query($query);
}
$query = "select * from tblbuilder";
$res = mysql_query($query);
?>


<body>
<table border="1px">
	<tr>
		<th>BuilderID</th>
		<th>Username</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Address</th>
		<th>Area</th>
		<th>City</th>
		<th>State</th>
		<th>Pincode</th>
		<th>Fax</th>
		<th>Mobile</th>
		<th>Landline</th>
		<th>Email</th>
		<th>Website</th>
		<th>Logo</th>
		<th>Update</th>
		<th>Delete</th>		
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["builderid"]."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "<td>".$row["area"]."</td>";
			echo "<td>".$row["city"]."</td>";
			echo "<td>".$row["state"]."</td>";
			echo "<td>".$row["pincode"]."</td>";
			echo "<td>".$row["fax"]."</td>";
			echo "<td>".$row["mobile"]."</td>";
			echo "<td>".$row["landline"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["website"]."</td>";
			echo "<td>".$row["logo"]."</td>";
			echo "<td><a href='builderupdate.php'>Update</a></td>";
			echo "<td><a href='buildergrid.php?builderid=".$row["builderid"]."'>Delete</a></td>";
		echo "</tr>";
	}
?>
</table>

</body>
</html>
