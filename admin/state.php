<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmstate"]["txtstatename"].value == "")
	{
		err += "\nRequired statename.";
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

<body>
<form class="form-horizontal" name="frmstate" action="index.php?page=stateinsert.php" method="post" onsubmit="return validate();">
<h3 align="center">State Detail...</h3><hr />
   <div class="form-group has-success" align="center"> 
     <label for="areaname" class="col-md-4 control-label" >State Name:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtstatename" placeholder="Enter State Name" required autofocus>
	   </div> 
  </div> 
  <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-5"> 
         <button type="submit" value="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
  <?php include("stategrid.php"); ?></td>
  </form>
</body>
</html>
