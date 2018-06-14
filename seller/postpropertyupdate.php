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
<?php

if(isset($_REQUEST["Submit"]))
{
	if($_FILES["flpropertyimage"]["name"] == "")
	{
	$query = "update tblproperty set propertyfor='".$_REQUEST["rbfor"]."',address='".$_REQUEST["txtaddress"]."',areaid=".$_REQUEST["drparea"].",pincode=".$_REQUEST["txtpincode"].",loginid=".$_SESSION["loginid"].",postdate='".date("Y/m/d")."',price=".$_REQUEST["txtprice"].",plotarea=".$_REQUEST["txtplotarea"].",carpetarea=".$_REQUEST["txtcarpatarea"].",builduparea=".$_REQUEST["txtbuilduparea"].",typeid=".$_REQUEST["drptype"].",furniture='".$_REQUEST["drpfurniture"]."',totalbedroom=".$_REQUEST["txttotalbedroom"].",totalbathroom=".$_REQUEST["txttotalbathroom"].",status='confirm' where propertyid=".$_REQUEST["propertyid"];
mysql_query($query);
echo "<script>alert('updated...');document.location='index.php?page=postproperty.php';</script>";
	}
	else
	{
	$query = "update tblproperty set propertyfor='".$_REQUEST["rbfor"]."',address='".$_REQUEST["txtaddress"]."',areaid=".$_REQUEST["drparea"].",pincode=".$_REQUEST["txtpincode"].",loginid=".$_SESSION["loginid"].",postdate='".date("Y/m/d")."',price=".$_REQUEST["txtprice"].",plotarea=".$_REQUEST["txtplotarea"].",carpetarea=".$_REQUEST["txtcarpatarea"].",builduparea=".$_REQUEST["txtbuilduparea"].",typeid=".$_REQUEST["drptype"].",furniture='".$_REQUEST["drpfurniture"]."',totalbedroom=".$_REQUEST["txttotalbedroom"].",totalbathroom=".$_REQUEST["txttotalbathroom"].",images='".$_FILES["flpropertyimage"]["name"]."',status='confirm' where propertyid=".$_REQUEST["propertyid"];
mysql_query($query);
move_uploaded_file($_FILES["flpropertyimage"]["tmp_name"],"../propertyimage/".$_FILES["flpropertyimage"]["name"]);
echo "<script>alert('Inserted...');document.location='index.php?page=postproperty.php';</script>";
	}
}

$query = "select * from tblproperty p inner join tblpropertytype pt on p.typeid=pt.propertytypeid inner join tblarea a on p.areaid=a.areaid";
$res = mysql_query($query);
$row = mysql_fetch_array($res);
?>
<body>
<form name="frmpostproperty" class="form-horizontal" method="post" enctype="multipart/form-data" action="" onSubmit="return validate();">
<h3 align="center">Property Update Details...</h3><hr />

<div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-4 control-label" >I D:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpropertyid" value="<?php echo $row["propertyid"];  ?>" readonly="readonly" >  
	   </div> 
 </div>
 <div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-4 control-label" >Property For:</label> 
       <div class="col-sm-5"> 
		<?php
			if($row["propertyfor"] == "Sell")
			{
				echo "<input type='radio' name='rbfor' checked='checked' value='Sell'/>Sell";
				echo "<input type='radio' name='rbfor' value='Rent'/>Rent";
			}
			else	
			{
				echo "<input type='radio' name='rbfor'  value='Sell'/>Sell";
				echo "<input type='radio' name='rbfor' checked='checked' value='Rent'/>Rent";
			}
			?>
		</div>
	</div>
	<div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-4 control-label" >Address:</label> 
       <div class="col-sm-5"> 
         <textarea name="txtaddress" rows="4" class="form-control"><?php echo $row["address"];  ?></textarea> 
	   </div> 
 </div>
	   <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Area Name: </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control" name="drparea" required>
	   <option value="0">Select Area</option>
		<?php
				$query = "select * from tblarea";
				$resarea = mysql_query($query);
				while($rowarea = mysql_fetch_array($resarea))
				{
					if($row["areaname"] == $rowarea["areaname"])
					{
						echo "<option value='".$rowarea["areaid"]."' selected='selected'>".$rowarea["areaname"]."</option>";
					}
					else
					{
						echo "<option value='".$rowarea["areaid"]."'>".$rowarea["areaname"]."</option>";
					}
				}
				
			?>
			</select>
		</div>
	</div>
	
	  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Pincode: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpincode" value="<?php echo $row["pincode"];  ?>">
       </div>
	  </div>
 	
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Price: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtprice" value="<?php echo $row["price"];  ?>" >
	       </div>
	   </div>
	 	
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Plotarea: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtplotarea" value="<?php echo $row["plotarea"];  ?>">
	       </div>
	   </div>
  	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Carpatarea: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtcarpatarea" value="<?php echo $row["carpetarea"];  ?>">
	       </div>
	   </div>
	 	
		<div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Builduparea: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtbuilduparea" value="<?php echo $row["builduparea"];  ?>">
	       </div>
	   </div>
	 	
		<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Property Type: </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control" name="drptype" >
	   <option value="0">--Select Type--</option>
			<?php
				$query = "select * from tblpropertytype";
				$restype = mysql_query($query);
				while($rowtype = mysql_fetch_array($restype))
				{
					if($row["propertytypename"] == $rowtype["propertytypename"])
					{
						echo "<option value='".$rowtype["propertytypeid"]."' selected='selected'>".$rowtype["propertytypename"]."</option>";
					}
					else
					{
						echo "<option value='".$rowtype["propertytypeid"]."'>".$rowtype["propertytypename"]."</option>";
					}
				}
				
			?>
			</select>
	  </div>
	 </div>
	 	 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Furniture: </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control" name="drpfurniture" >
	  	<option value="0">-Select Furniture-</option>
			<?php
				if($row["Furnish"] == "Furnish")
				{
						echo "<option value='Furnish' selected='selected'>Furnish</option>";
						echo "<option value='Semi Furnish'>Semi Furnish</option>";
						echo "<option value='No Furnish'>No Furnish</option>";
				}
				else if($row["Semi Furnish"] == "Semi Furnish")
				{
				echo "<option value='Furnish'>Furnish</option>";
						echo "<option value='Semi Furnish' selected='selected'>Semi Furnish</option>";
						echo "<option value='No Furnish'>No Furnish</option>";
				}
				else if($row["No Furnish"] == "No Furnish")
				{echo "<option value='Furnish'>Furnish</option>";
						echo "<option value='Semi Furnish'>Semi Furnish</option>";
						echo "<option value='No Furnish' selected='selected'>No Furnish</option>";
				}
				
			?>

			</select>
	  </div>
	 </div>
	
	
		<div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Total bedroom: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txttotalbedroom" value="<?php echo $row["totalbedroom"];  ?>">
	       </div>
	   </div>
	 	
		<div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Total bathroom: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txttotalbathroom" value="<?php echo $row["totalbathroom"];  ?>">
	       </div>
	   </div>
	 
	 <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Images : </label> 
	       <div class="col-sm-5"> 
             <input type="file" name="flpropertyimage" class="form-control" >
	       </div>
	   </div>
	   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Update</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  
</div>


<?php include("postpropertygrid.php"); ?>
</form>
</body>
</html>
