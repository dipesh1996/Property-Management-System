<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmareaupdate"]["txtareaid"].value == "")
	{
		err += "\nRequired AreaId.";
	}
	if(document.forms["frmareaupdate"]["txtareaname"].value == "")
	{
		err += "\nRequired AreaName.";
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
<link href="bootstrap-3.3.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);


if(isset($_REQUEST["Submit"]))
{
	$query = "update tblarea set areaname='".$_REQUEST["txtareaname"]."',cityid=".$_REQUEST["drpcity"]." where areaid=".$_REQUEST["txtareaid"];
	mysql_query($query);
	echo "<script>alert('record update.');document.location='index.php?page=area.php';</script>";

}


$query = "select * from tblarea a inner join tblcity c on a.cityid=c.cityid where areaid=".$_REQUEST["areaid"];
$res = mysql_query($query);
$row = mysql_fetch_array($res);
?>
<body>
<form name="frmareaupdate" class="form-horizontal"  onsubmit="return validate();" method="post">
<h3 align="center">Area Update Detail...</h3><hr />
   <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-4 control-label" >Area ID:</label> 
       <div class="col-sm-2"> 
         <input type="number" class="form-control" name="txtareaid" placeholder="Enter Area Id" required value="<?php echo $row["areaid"]; ?>">
	   </div> 
  </div>  
   <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-4 control-label" >Area Name:</label> 
       <div class="col-sm-2"> 
         <input type="text" class="form-control" name="txtareaname" placeholder="Enter Area Name" required value="<?php echo $row["areaname"]; ?>">
	   </div> 
  </div>  
   <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-4 control-label" >City Name:</label> 
       <div class="col-sm-2"> 
   		<select name="drpcity" class="form-control">
			<option value="0">-Select-</option>
			<?php
				$query = "select * from tblcity";
				$res = mysql_query($query);
				
				while($rowcity = mysql_fetch_array($res))
				{
					if($row["cityname"] == $rowcity["cityname"])
					{
					echo "<option selected='selected' value='".$rowcity["cityid"]."'>".$rowcity["cityname"]."</option>";
					}
					else
					{
						echo "<option value='".$rowcity["cityid"]."'>".$rowcity["cityname"]."</option>";
						}

				}
			?>
		</select>
	</div>
</div>
	<div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-4"> 
         <button type="submit" value="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>

</form>
</body>
</html>
