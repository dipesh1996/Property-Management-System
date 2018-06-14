<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmcityupdate"]["txtcityid"].value == "")
	{
		err += "\nRequired CityId.";
	}
	if(document.forms["frmlogin"]["txtcityname"].value == "")
	{
		err += "\nRequired CityName.";
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

if(isset($_REQUEST["Submit"]))
{
	$query = "update tblcity set cityname='".$_REQUEST["txtcityname"]."',stateid=".$_REQUEST["drpstate"]." where cityid=".$_REQUEST["txtcityid"];
	mysql_query($query);
	echo "<script>alert('record update.');document.location='index.php?page=city.php';</script>";

}


$query = "select * from tblcity c inner join tblstate s on c.stateid=s.stateid where cityid=".$_REQUEST["cityid"];
$res = mysql_query($query);
$row = mysql_fetch_array($res);

?>
<body>
<form name="frmcityupdate" action="#" onsubmit="return validate();" method="post">
<table border="1px">
  <tr>
    <td colspan="2"><div align="left">City Update Detail...</div></td>
    
  </tr>
  <tr>
    <td><div align="left">City ID </div></td>
    <td><input type="text" name="txtcityid" value="<?php echo $row["cityid"]; ?>"/></td>
  </tr>
    <tr>
    <td><div align="left">City Name </div></td>
    <td><input type="text" name="txtcityname" value="<?php echo $row["cityname"]; ?>"/></td>
  </tr>
  <tr>
    <td><div align="left">State Name </div></td>
    <td>
		<select name="drpstate">
			<option value="0">-Select-</option>
			<?php
				$query = "select * from tblstate";
				$res = mysql_query($query);
				
				while($rowstate = mysql_fetch_array($res))
				{
					if($row["statename"] == $rowstate["statename"])
					{
					echo "<option selected='selected' value='".$rowstate["stateid"]."'>".$rowstate["statename"]."</option>";
					}
					else
					{
						echo "<option value='".$rowstate["stateid"]."'>".$rowstate["statename"]."</option>";
						}
					
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
