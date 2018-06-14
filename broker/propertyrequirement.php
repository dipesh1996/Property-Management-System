<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
<script type="text/javascript">
function validate()
{
		var err = "";
	
	if(document.forms["frmpropertyrequirement"]["txtrequirementid"].value == "")
	{
		err += "\nRequired requirementid.";
	}
	if(document.forms["frmpropertyrequirement"]["txtpostdate"].value == "")
	{
		err += "\nRequired postdate.";
	}
	if(document.forms["frmpropertyrequirement"]["txtloginid"].value == "")
	{
		err += "\nRequired loginid.";
	}
	if(document.forms["frmpropertyrequirement"]["txtminimumarea"].value == "")
	{
		err += "\nRequired minimumarea.";
	}
	if(document.forms["frmpropertyrequirement"]["txtmaximumarea"].value == "")
	{
		err += "\nRequired maximumarea.";
	}
	if(document.forms["frmpropertyrequirement"]["txtminimumprice"].value == "")
	{
		err += "\nRequired minimumprice.";
	}
	if(document.forms["frmpropertyrequirement"]["txtmaximumprice"].value == "")
	{
		err += "\nRequired maximumprice.";
	}
	if(document.forms["frmpropertyrequirement"]["txtfurniture"].value == "")
	{
		err += "\nRequired furniture.";
	}
	if(document.forms["frmpropertyrequirement"]["txtrequirementfor"].value == "")
	{
		err += "\nRequired requirementfor.";
	}
	if(document.forms["frmpropertyrequirement"]["txttypeid"].value == "")
	{
		err += "\nRequired typeid.";
	}
	if(document.forms["frmpropertyrequirement"]["txttotalbedroom"].value == "")
	{
		err += "\nRequired totalbedroom.";
	}
	if(document.forms["frmpropertyrequirement"]["txttotalbathroom"].value == "")
	{
		err += "\nRequired totalbathroom.";
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
<title>Broker Registration</title>
</head>
<body>
<form name="frmpropertyrequirement" class="form-horizontal" method="post" action="index.php?page=propertyrequirementinsert.php" onSubmit="return validate();">
<h3 align="center">Requirement Detail...</h3><hr>

	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Minimum Area: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txtminimumarea" placeholder="Enter Minimum Area" maxlength="6" required>
       </div>
	  </div>
	
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Maximum Area: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txtmaximumarea" placeholder="Enter Maximum Area" maxlength="6" required>
       </div>
	  </div>
	
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Minimum Price: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txtminimumprice" placeholder="Enter Minimum Price" maxlength="6" required>
       </div>
	  </div>
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Maximum Price: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txtmaximumprice" placeholder="Enter Maximum Price" maxlength="6" required>
       </div>
	  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Furniture: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtfurniture" placeholder="Furniture" maxlength="6" required>
       </div>
	  </div>
  <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Requirement For:</label> 
	       <div class="col-sm-3"> 
		<input type="radio" name="rbfor" value="sell"/> Buy
		<input type="radio" name="rbfor" value="rent"/> Rent
	       </div>
	   </div>
	
	<div class="form-group has-success">
     <label for="lastname" class="col-md-5 control-label">Type: </label> 
	   <div class="col-sm-5">
	   <select class="form-control" name="drptype" required>
	   <option value="0">Select Type</option>
	<?php
				$query = "select * from tblpropertytype";
				$restype = mysql_query($query);
				while($rowtype = mysql_fetch_array($restype))
				{
					echo "<option value='".$rowtype["propertytypeid"]."'>".$rowtype["propertytypename"]."</option>";
				}
				
			?>
			</select>
        </div>
     </div>	
	 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Total bedroom: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txttotalbedroom" placeholder="Total Bedroom" maxlength="6" required>
       </div>
	  </div>
   	 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Total bathroom: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txttotalbathroom" placeholder="Total Bathroom" maxlength="6" required>
       </div>
	  </div>  
   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-4"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
     </div>
  </div>
	   	<?php include("propertyrequirementgrid.php"); ?>
       
</form>
</body>
</html>
