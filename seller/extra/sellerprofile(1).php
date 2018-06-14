<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmsellerprofile"]["txtfirstname"].value == "")
	{
		err += "\nRequired firstname.";
	}
	if(document.forms["frmsellerprofile"]["txtlastname"].value == "")
	{
		err += "\nRequired lastname.";
	}
	if(document.forms["frmsellerprofile"]["txtaddress"].value == "")
	{
		err += "\nRequired address.";
	}
	if(document.forms["frmsellerprofile"]["txtpincode"].value == "")
	{
		err += "\nRequired pincode.";
	}
	if(document.forms["frmsellerprofile"]["txtmobile"].value == "")
	{
		err += "\nRequired mobile.";
	}
	if(document.forms["frmsellerprofile"]["txtemail"].value == "")
	{
		err += "\nRequired email.";
	}
	if(document.forms["frmsellerprofile"]["txtusername"].value == "")
	{
		err += "\nRequired username.";
	}
	if(document.forms["frmsellerprofile"]["txtpassword"].value == "")
	{
		err += "\nRequired password.";
	}
	if(document.forms["frmsellerprofile"]["txtsecurityquestion"].value == "")
	{
		err += "\nRequired security question.";
	}
	if(document.forms["frmsellerprofile"]["txtsecureanswer"].value == "")
	{
		err += "\nRequired secureanswer.";
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
<title>Seller Registration</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "select * from tblseller inner join tblarea on tblseller.areaid=tblarea.areaid inner join tblcity on tblseller.cityid=tblcity.cityid inner join tblstate on tblseller.stateid=tblstate.stateid where loginid=10";
$res = mysql_query($query);
$rowuser = mysql_fetch_array($res);

?>
<body>
<form name="frmsellerregistration" method="post" action="index.php?page=sellerregistrationconfirm.php" onSubmit="return validate();">
<table border="1px">
	<tr>
		<td colspan="2"><div align="center">Registration Detail....</div></td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="txtfirstname" value="<?php echo $rowuser["firstname"]; ?>"/></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="txtlastname" value="<?php echo $rowuser["lastname"]; ?>"/></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><textarea name="txtaddress" rows="5" cols="40"><?php echo $rowuser["address"]; ?></textarea></td>
	</tr>
	<tr>
		<td>Area:</td>
		<td>
			<select name="drparea">
				<option value="0">-Select Area-</option>
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
		<td>City:</td>
		<td>
			<select name="drpcity">
				<option value="0">-Select City-</option>
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
		<td>State:</td>
		<td>
			<select name="drpstate">
				<option value="0">-Select State-</option>
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
		<td>Pincode:</td>
		<td><input type="text" name="txtpincode" value="<?php echo $rowuser["pincode"]; ?>"/></td>
	</tr>
	<tr>
		<td>Mobile:</td>
		<td><input type="text" name="txtmobile" value="<?php echo $rowuser["mobile"]; ?>"/></td>
	</tr>
	<tr>
		<td>E-Mail:</td>
		<td><input type="text" name="txtemail" value="<?php echo $rowuser["email"]; ?>"/></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td>
		<input type="radio" name="rbgender" value="male"/>Male
		<input type="radio" name="rbgender" value="female"/>Female
		</td>
	</tr>
	<tr>
		<td>Login Detail...</td>
		<td></td>
	</tr>
	<tr>
		<td>User name:</td>
		<td><input type="text" name="txtusername" /></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="text" name="txtpassword" /></td>
	</tr>

	<tr>
		<td>security question:</td>
		<td><input type="text" name="txtsecurityquestion" /></td>
	</tr>
	<tr>
		<td>secure answer:</td>
		<td><input type="text" name="txtsecureanswer"/></td>
	</tr>
	
	<tr>
		<td></td>
		<td>
			<input type="submit" name="Submit" value="Submit"/>
			<input type="reset" name="Reset" value="Reset"/>
		</td>
	</tr>
</table>
</form>
</body>
</html>
