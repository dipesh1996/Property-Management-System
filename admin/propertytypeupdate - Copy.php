<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmpropertytypeupdate"]["txtpropertytypeid"].value == "")
	{
		err += "\nRequired propertytypeid.";
	}
	if(document.forms["frmpropertytypeupdate"]["txtpropertytypename"].value == "")
	{
		err += "\nRequired propertytypename.";
		}
	
	if(err == "")
	{
		return true;
	}
	else
	{
		alert(err);
		return false;
	}
	
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Property Consultancy</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);


?>
<body>
<form name= "frmpropertytypeupdate"  method="post" enctype="multipart/form-data" action="" onsubmit="return validate();">
<table border="1px">
  <tr>
    <td colspan="2"><div align="left">Propertytype Update Detail...</div></td>
    
  </tr>
  <tr>
    <td><div align="left">Propertytype ID </div></td>
    <td><input type="text" name="txtpropertytypeid" /></td>
  </tr>
    <tr>
    <td><div align="left">Propertytype Name </div></td>
    <td><input type="text" name="txtpropertytypename" /></td>
  </tr>
  <tr>
    <td><div align="left">Area Name </div></td>
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
    <td><div align="left">State Name </div></td>
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
