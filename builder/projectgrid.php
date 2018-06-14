<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
if(isset($_REQUEST["propertyid"]))
{
	$query = "delete from tblproject where projectid=".$_REQUEST["propertyid"];
	mysql_query($query);
}
$query = "select * from tblproject where loginid=".$_SESSION["loginid"];
$res = mysql_query($query);
?>

<body>
<table border="0px">
	<tr>
		<th>ID</th>
		<th>Project Title</th>
		<th>Address</th>
		<th>Description</th>
		<th>Image</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

<?php
	while($row = mysql_fetch_array($res))
	{
		echo "<tr>";
			echo "<td>".$row["projectid"]."</td>";
			echo "<td>".$row["projecttitle"]."</td>";
			echo "<td>".$row["address"]."</td>";
			echo "<td>".$row["projectdescription"]."</td>";
			echo "<td><img src='../projectimage/".$row["projectimage"]."' height='100px' width='100px' alt=''/></td>";
			echo "<td><a href='index.php?page=projectupdate.php&projectid=".$row["projectid"]."'>Update</a></td>";
			echo "<td><a href='index.php?page=projectgrid.php&propertyid=".$row["projectid"]."'>Delete</a></td>";
			
		echo "</tr>";
	}
?>
</table>

</body>
</html>
