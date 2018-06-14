<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmpropertytype"]["txtpropertytypename"].value == "")
	{
		err += "\nRequired PropertytypeName.";
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
<form class="form-horizontal" name="frmpropertytype" action="index.php?page=propertytypeinsert.php" onsubmit="return validate();" method="post">
<h3 align="center">Property Type Detail...</h3><hr />  <tr>
     <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-5 control-label" >Property Type Name:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpropertytypename" placeholder="Enter Property Type Name" required >
		  
	   </div> 
  </div> 
 <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-4"> 
         <button type="submit" value="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
 <?php include("propertytypegrid.php"); ?>
</form>
</body>
</html>
