<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["buyerid"]))
{
	$query = "delete from tblbuyer where buyerid=".$_REQUEST["buyerid"];
	mysql_query($query);
}


$query = "select * from tblbuyer";
$res = mysql_query($query);
?>

<body>
<table border="1px">
	<tr>
		<th>BuyerID</th>
		<th>UserName</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Address</th>
		<th>Area</th>
		<th>City</th>
		<th>State</th>
		<th>Pincode</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Landline</th>
		<th>Update</th>
		<th>Delete</th>		
                                                         	</tr>
	<?php
	 while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["buyerid"]."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "<td>".$row["area"]."</td>";
			echo "<td>".$row["city"]."</td>";
			echo "<td>".$row["state"]."</td>";
			echo "<td>".$row["pincode"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["mobile"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["landline"]."</td>";
			echo "<td><a href='buyerupdate.php?'>Update</a></td>";
			echo "<td><a href='buyergrid.php?buyerid=".$row["buyerid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>
</body>
</html>