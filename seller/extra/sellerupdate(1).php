<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);


?>

<body>
<form name="frmsellerupdate" action="#" method="post">
<table border="1px">
  <tr>
    <td colspan="2"><div align="left">Seller Update Detail...</div></td>
    
  </tr>
  <tr>
    <td><div align="left">Seller ID </div></td>
    <td><input type="text" name="txtSellerid" /></td>
  </tr>
    <tr>
    <td><div align="left">Seller Name </div></td>
    <td><input type="text" name="txtsellername" /></td>
  </tr>
  <tr>
    <td><div align="left">City Id </div></td>
    <td>
		<select name="drpcity">
			<option value="0">-Select-</option>
			<?php
				$query = "select * from tblcity";
				$res = mysql_query($query);
				
				while($row = mysql_fetch_array($res))
				{
					echo "<option value='".$row["cityid"]."'>".$row["cityid"]."</option>";
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
