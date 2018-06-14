<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["sellerid"]))
{
	$query = "delete from tblseller where sellerid=".$_REQUEST["sellerid"];
	mysql_query($query);
}


$query = "select * from tblseller";
$res = mysql_query($query);
?>

<body>
<table border="1px">
	<tr>
		<th>SellerID</th>
		<th>UserName</th>
		<th>FristName</th>
		<th>LastName</th>
		<th>Address</th>
		<th>Area Id</th>
		<th>City Id</th>
		<th>State Id</th>
		<th>Pincode</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>update</th>
		<th>Delete</th>
				
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["sellerid"]."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["address"]."</td>";
		    echo "<td>".$row["areaid"]."</td>";
			echo "<td>".$row["cityid"]."</td>";
			echo "<td>".$row["stateid"]."</td>";
			echo "<td>".$row["pincode"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["mobile"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td><a href='sellerupdate.php'>Update</a></td>";
			echo "<td><a href='sellergrid.php?sellerid=".$row["sellerid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>

</body>
</html>
