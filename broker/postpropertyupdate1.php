<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);


?>

<body>
<form name="frmpostpropertyupdate" action="#" method="post">
<table border="1px">
  <tr>
    <td colspan="2"><div align="left">Broker Update Detail...</div></td>
    
  </tr>
  <tr>
    <td><div align="left">Broker ID </div></td>
    <td><input type="text" name="txtbrokerid" /></td>
  </tr>
    <tr>
    <td><div align="left">Broker Name </div></td>
    <td><input type="text" name="txtbrokername" /></td>
  </tr>
  <tr>
    <td><div align="left">City Name </div></td>
    <td>
		<select name="drpcity">
			<option value="0">-Select-</option>
			<?php
				$query = "select * from tblcity";
				$res = mysql_query($query);
				
				while($row = mysql_fetch_array($res))
				{
					echo "<option value='".$row["cityid"]."'>".$row["cityname"]."</option>";
				}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td></td>
    <td><div align="left">
	      <input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Cancel" value="Cancel" />
    </div></td>
  </tr>
</table>
</form>
</body>
</html>
