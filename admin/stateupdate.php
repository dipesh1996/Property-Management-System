<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmstate"]["txtstateid"].value == "")
	{
		err += "\nRequired Stateid.";
	}
	if(document.forms["frmstate"]["txtstatename"].value == "")
	{
		err += "\nRequired Statename.";
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
	$query = "update tblstate set statename='".$_REQUEST["txtstatename"]."' where stateid=".$_REQUEST["txtstateid"];
	mysql_query($query);
	echo "<script>alert('record updated.');document.location='index.php?page=state.php';</script>";

}


$query = "select * from tblstate where stateid=".$_REQUEST["stateid"];
$res = mysql_query($query);
$row = mysql_fetch_array($res);

?>
<body>
<form name="frmstateupdate" action="#" method="post" onsubmit="return validate();">
<table border="1px">
  <tr>
    <td colspan="2"><div align="left">State Update Detail...</div></td>
    
  </tr>
  <tr>
    <td><div align="left">State ID </div></td>
    <td><input type="text" name="txtstateid" value="<?php echo $row["stateid"]; ?>"/></td>
  </tr>
    <tr>
    <td><div align="left">State Name </div></td>
    <td><input type="text" name="txtstatename" value="<?php echo $row["statename"]; ?>"/></td>
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
