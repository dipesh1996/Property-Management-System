<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">
<script type="text/javascript">
function validate()
{
		var err = "";
	
	if(document.forms["frmpostproperty"]["txttitle"].value == "")
	{
		err += "\nRequired title.";
	}
	if(document.forms["frmpostproperty"]["txtaddress"].value == "")
	{
		err += "\nRequired address.";
	}
	if(document.forms["frmpostproperty"]["txtareaid"].value == "")
	{
		err += "\nRequired areaid.";
	}
	if(document.forms["frmpostproperty"]["txtpincode"].value == "")
	{
		err += "\nRequired pincode.";
	}
	if(document.forms["frmpostproperty"]["txtprice"].value == "")
	{
		err += "\nRequired price.";
	}
	if(document.forms["frmpostproperty"]["txtplotarea"].value == "")
	{
		err += "\nRequired plotarea.";
	}
	if(document.forms["frmpostproperty"]["txtcarpatarea"].value == "")
	{
		err += "\nRequired carpatarea.";
	}
	if(document.forms["frmpostproperty"]["txtbuilduparea"].value == "")
	{
		err += "\nRequired builduparea.";
	}
	if(document.forms["frmpostproperty"]["txttypeid"].value == "")
	{
		err += "\nRequired typeid.";
	}
	if(document.forms["frmpostproperty"]["txtfurniture"].value == "")
	{
		err += "\nRequired furniture.";
	}
	if(document.forms["frmpostproperty"]["txttotalbedroom"].value == "")
	{
		err += "\nRequired totalbedroom.";
	}
	if(document.forms["frmpostproperty"]["txttotalbathroom"].value == "")
	{
		err += "\nRequired totalbathroom.";
	}
	if(document.forms["frmpostproperty"]["txtimage"].value == "")
	{
		err += "\nRequired image.";
	}
	if(document.forms["frmpostproperty"]["txtstatus"].value == "")
	{
		err += "\nRequired status.";
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
<form class="form-horizontal" name="frmpostproperty" method="post" enctype="multipart/form-data" action="index.php?page=postpropertyinsert.php" onSubmit="return validate();">
	<h3 align="center">Property Detail...</h3><hr>
    <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Property For:</label> 
	       <div class="col-sm-5"> 
		   <input type="radio" name="rbfor" value="Sell"/>Sell
			<input type="radio" name="rbfor" value="Rent"/>Rent
		
	       </div>
	   </div>
	  	
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress"  required></textarea>
	   </div> 
  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Area: </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control" name="drparea" required>
	   <option value="0">Select Area</option>
	   <?php
					$query = "select * from tblarea";
					$res = mysql_query($query);
					while($row = mysql_fetch_array($res))
					{
						echo "<option value='".$row["areaid"]."'>".$row["areaname"]."</option>";
					}
				
				?>
	 </select>
	     </div>  
	   </div>
	
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Pincode: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpincode" placeholder="Enter Pincode (Only 6 Digits)" maxlength="6" required>
       </div>
	  </div>
 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Price: </label> 
	   <div class="col-sm-5"> 
         <input type="number" class="form-control" name="txtprice" placeholder="Enter Price" maxlength="6" required>
       </div>
	  </div>
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Plot Area: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtplotarea" placeholder="Enter Plot Area" maxlength="6" required>
       </div>
	  </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Carpat Area: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtcarpatarea" placeholder="Enter Carpat Area" maxlength="6" required>
       </div>
	  </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Buildup Area: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtbuilduparea" placeholder="Enter Buildup Area" maxlength="6" required>
       </div>
	  </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Property Type : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drptype" required>
	   <option value="0">Property Type</option>
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
     <label for="lastname" class="col-md-5 control-label">Furniture : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drpfurniture" required>
			<option value='0'>--</option>
			<option value='Furnish'>Furnish</option>
			<option value='Semi Furnish'>Semi Furnish</option>
			<option value='No Furnish'>No Furnish</option>
			</select>
		</div>
	</div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Bedroom: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txttotalbedroom" placeholder="Enter Bedroom" required>
       </div>
	  </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Bathroom: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txttotalbathroom" placeholder="Enter Bathroom" maxlength="6" required>
       </div>
	  </div>
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Images: </label> 
	   <div class="col-sm-5"> 
         <input type="file" class="form-control" name="flpropertyimage" required>
       </div>
	  </div>
  <div class="form-group"> 
     <div class="col-sm-offset-3 col-sm-4"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
	<?php include("postpropertygrid.php"); ?>
</form>
</body>
</html>
