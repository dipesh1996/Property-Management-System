<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmarea"]["txtareaname"].value == "")
	{
		err += "\nRequired areaname.";
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

?>
<body>
<form  class="form-horizontal" name="frmarea" method="post" action="index.php?page=areainsert.php" onsubmit="return validate();">
<h3 align="center">Area Detail...</h3><hr />
   <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-4 control-label" >Area Name:</label> 
       <div class="col-sm-4"> 
         <input type="text" class="form-control" name="txtareaname" placeholder="Enter Area Name" required >
		  
	   </div> 
  </div> 
 <div class="form-group has-success" align="center">
  <label class="col-md-4 control-label" for="cityname" >City Name:</label>
    <div class="col-sm-4">
		<select name="drpcity" class="form-control">
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
	</div>
</div>

 <div class="form-group has-success" align="center">
  <label class="col-md-4 control-label" for="cityname" >State Name:</label>
    <div class="col-sm-4">
		<select name="drpstate" class="form-control">
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
	</div>
</div>
  <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-5"> 
         <button type="submit" value="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>

<?php include("areagrid.php"); ?>
</form>
</body>
</html>
