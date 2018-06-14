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
<form name="frmbulider" action="builderinsert.php" method="post">
<blockquote>&nbsp;	</blockquote>
<table width="317" border="1">
  <tr>
    <td colspan="2"><div align="center">Bulider Detail </div></td>
  </tr>
  <tr>
    <td><div align="center">User Name </div></td>
    <td><input type="text" name="txtusername" /></td>
  </tr>
  <tr>
    <td><div align="center">First Name </div></td>
    <td><input type="text" name="txtfirstname" /></td>
  </tr>
  <tr>
    <td><div align="center">Last Name </div> </td>
    <td><input type="text" name="txtlastname" /></td>
  </tr>
  <tr>
    <td><div align="center">Adderss</div></td>
    <td><input type="text" name="txtaddress" /></td>
  </tr>
  <tr>
    <td><div align="center">Area</div></td>
    <td>
	<select name="drparea">
		<option value="0">-Select-</option>
		<?php
			$query = "select * from tblarea";
			$res = mysql_query($query);
			while($row = mysql_fetch_array($res))
			{
				echo "<option value='".$row["areaid"]."'>".$row["areaname"]."</option>";
			}
		?>
    </select>
	</td>
    
  </tr>
  <tr>
    <td><div align="center">City</div></td>
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
 + <tr>
    <td><div align="center">State</div></td>
    <td>
		<select name="drpstate">
			<option value="0">-Select-</option>
			<?php
				$query = "select * from tblstate";
				$res = mysql_query($query);
				
				while($row = mysql_fetch_array($res))
				{
					echo "<option value='".$row["stateid"]."'>".$row["statename"]."</option>";
				}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td><div align="center">Pincode</div></td>
    <td><input type="text" name="txtpincode" /></td>
  </tr>
  <tr>
    <td><div align="center">Fax</div></td>
    <td><input type="text" name="txtfax" /></td>
  </tr>
  <tr>
    <td><div align="center">Mobile</div></td>
    <td><input type="text" name="txtmobile" /></td>
  </tr>
  <tr>
    <td><div align="center">Landline</div></td>
    <td><input type="text" name="txtlandline" /></td>
  </tr>
  <tr>
    <td><div align="center">Email</div></td>
    <td><input type="text" name="txtemail" /></td>
  </tr>
  <tr>
    <td><div align="center">Website</div></td>
    <td><input type="text" name="txtwebsite" /></td>
  </tr>
  <tr>
    <td><div align="center">Logo</div></td>
    <td><input type="text" name="txtlogo" /></td>
  </tr>
  <tr>
  <td >
	<input type="submit" name="Submit" value="Submit" />
	<input type="reset" name="Submit2" value="Cancle" /></td>
  </tr>
  <tr>
  	<td colspan="2"><?php include("buildergrid.php"); ?></td>
  </tr>
</table>
</form>
 </body>
</html>
