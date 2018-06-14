<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php

if(isset($_REQUEST["Submit"]))
{
	$query = "update tblpropertyrequirement set  minimumarea=".$_REQUEST["txtminimumarea"].",maximumarea=".$_REQUEST["txtmaximumarea"].",minimumprice=".$_REQUEST["txtminimumprice"].",maximumprice=".$_REQUEST["txtmaximumprice"].",furniture='".$_REQUEST["txtfurniture"]."',requirementfor='".$_REQUEST["rbfor"]."',typeid=".$_REQUEST["drptype"].",totalbedroom=".$_REQUEST["txttotalbedroom"].",totalbathroom=".$_REQUEST["txttotalbathroom"]." where requirementid=".$_REQUEST["txtrequirementid"];
		mysql_query($query);
		echo "<script>alert('Rquirement updated');document.location='index.php?page=propertyrequirement.php';</script>";
}


$query = "select * from tblpropertyrequirement pr inner join tblpropertytype pt on pr.typeid=pt.propertytypeid where pr.requirementid=".$_REQUEST["reqid"];
$res = mysql_query($query);
$row = mysql_fetch_array($res);
?>
<body>
<form name="frmpropertyrequirementupdate" action="#" method="post" class="form-horizontal">
<h3 align="Center">Property Requirement Update Detail...</h3><hr/>    
  
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Requirement Id:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtrequirementid" value="<?php echo $row["requirementid"] ?>" readonly="readonly" >  
	   </div> 
 </div>
   
   
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Minimum Area:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtminimumarea" value="<?php echo $row["minimumarea"] ?>">  
	   </div> 
 </div>
   
	
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Maximum Area:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtmaximumarea" value="<?php echo $row["maximumarea"] ?>">  
	   </div> 
 </div>
   
   
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Minimum Price:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtminimumprice" value="<?php echo $row["minimumprice"] ?>">  
	   </div> 
 </div>
   
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Maximum Price:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtmaximumprice" value="<?php echo $row["maximumprice"] ?>">  
	   </div> 
 </div>
 
   
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Furniture:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtfurniture" value="<?php echo $row["furniture"] ?>">  
	  </div>
	 </div>
	
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Requirement For:</label> 
       <div class="col-sm-5"> 
        	<?php
				if($row["requirementfor"] == "buy")
				{
					echo "<input type='radio' name='rbfor' checked='checked' value='buy'/>buy";
					echo '<input type="radio" name="rbfor" value="Rent"/>Rent';
				}
				else
				{
					echo "<input type='radio' name='rbfor'  value='buy'/>buy";
					echo '<input type="radio" name="rbfor" checked="checked" value="Rent"/>Rent';
				}
			?>
</div>
</div>		
	
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Type:</label> 
       <div class="col-sm-5">
		<select name="drptype" class="form-control">
			<option value='0'></option>
			<?php
				$query = "select * from tblpropertytype";
				$restype = mysql_query($query);
				while($rowtype = mysql_fetch_array($restype))
				{
					if($rowtype["propertytypename"] == $row["propertytypename"])
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
	
	   
   
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Total bedroom:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txttotalbedroom" value="<?php echo $row["totalbedroom"] ?>">  
	  </div>
	 </div>
	
	 
<div class="form-group has-success" align="center"> 
     <label for="requirementid" class="col-md-5 control-label" >Total bathroom:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txttotalbathroom" value="<?php echo $row["totalbathroom"] ?>">  
	  </div>
	 </div>
	
	   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Update</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  
</div>

	</form>
</body>
</html>
