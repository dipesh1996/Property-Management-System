<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
	 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">

<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmbrokerprofile"]["txtfirstname"].value == "")
	{
		err += "\nRequired firstname.";
	}
	if(document.forms["frmbrokerprofile"]["txtlastname"].value == "")
	{
		err += "\nRequired lastname.";
	}
	if(document.forms["frmbrokerprofile"]["txtaddress"].value == "")
	{
		err += "\nRequired address.";
	}
	if(document.forms["frmbrokerprofile"]["txtpincode"].value == "")
	{
		err += "\nRequired pincode.";
	}
	if(document.forms["frmbrokerprofile"]["txtemail"].value == "")
	{
		err += "\nRequired email.";
	}
	if(document.forms["frmbrokerprofile"]["txtmobile"].value == "")
	{
		err += "\nRequired mobile.";
	}
	if(document.forms["frmbrokerprofile"]["txtfax"].value == "")
	{
		err += "\nRequired fax.";
	}
	if(document.forms["frmbrokerprofile"]["txtusername"].value == "")
	{
		err += "\nRequired username.";
	}

	if(document.forms["frmbrokerprofile"]["txtsecurityquestion"].value == "")
	{
		err += "\nRequired security question.";
	}
	if(document.forms["frmbrokerprofile"]["txtsecurityanswer"].value == "")
	{
		err += "\nRequired securityanswer.";
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


$query = "select * from tblseller inner join tblarea on tblseller.areaid=tblarea.areaid inner join tblcity on tblseller.cityid=tblcity.cityid inner join tblstate on tblseller.stateid=tblstate.stateid inner join tbllogin on tblseller.loginid=tbllogin.loginid where tblseller.loginid=".$_SESSION["loginid"];
$res = mysql_query($query);
$rowuser = mysql_fetch_array($res);

?>
<body>
<form class="form-horizontal" name="frmprofile" method="post" action="index.php?page=profileupdate.php" onSubmit="return validate();">

<h4 align="center">Seller Profile</h4><hr />	
<div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-4 control-label" id="focusedInput">First Name:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtfirstname" value="<?php echo $rowuser["firstname"]; ?>" >		  
	   </div> 
 </div>
	<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Last Name: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtlastname" value="<?php echo $rowuser["lastname"]; ?>" >
	   </div> 
  </div>
 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress"  ><?php echo $rowuser["address"]; ?></textarea>
	   </div> 
  </div>	
   <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Area: </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control" name="drparea" required>
	   <option value="0">Select Area</option>
	   <?php
					$query = "select * from tblarea";
					$res = mysql_query($query);
					while($rowarea = mysql_fetch_array($res))
					{
						if($rowuser["areaname"] == $rowarea["areaname"])
						{
						echo "<option value='".$rowarea["areaid"]."' selected='selected'>".$rowarea["areaname"]."</option>";
						}
						else
						{
						echo "<option value='".$rowarea["areaid"]."' >".$rowarea["areaname"]."</option>";
						}
					}
				
				?>
	 </select>
	     </div>  
	   </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">City : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drpcity" required>
	   <option value="0">Select City</option>
	
				<?php
					$query = "select * from tblcity";
					$res = mysql_query($query);
					while($rowcity = mysql_fetch_array($res))
					{
						if($rowuser["cityname"] == $rowcity["cityname"])
						{
						echo "<option value='".$rowcity["cityid"]."' selected='selected'>".$rowcity["cityname"]."</option>";
						}
						else
						{
						echo "<option value='".$rowcity["cityid"]."' >".$rowcity["cityname"]."</option>";
						}
					}
				
				?>	
			</select>
	</div>
	</div>
	 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">State : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drpstate" required>
	   <option value="0">Select State</option>
				<?php
					$query = "select * from tblstate";
					$res = mysql_query($query);
					while($rowstate = mysql_fetch_array($res))
					{
						if($rowuser["statename"] == $rowstate["statename"])
						{
						echo "<option value='".$rowstate["stateid"]."' selected='selected'>".$rowstate["statename"]."</option>";
						}
						else
						{
						echo "<option value='".$rowstate["stateid"]."' >".$rowstate["statename"]."</option>";
						}
						echo "<option value='".$row["stateid"]."'>".$row["statename"]."</option>";
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
          <label for="lastname" class="col-md-4 control-label">Email:</label> 
	       <div class="col-sm-5"> 
             <input type="email" class="form-control" name="txtemail" value="<?php echo $rowuser["email"]; ?>" >
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Mobile: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtmobile" value="<?php echo $rowuser["mobile"]; ?>" >
	       </div>
	   </div>
	   
		<div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Gender:</label> 
	       <div class="col-sm-5"> 
	<?php
			if($rowuser["gender"] == "male")
			{
				echo "<input type='radio' name='rbgender' checked='checked' value='male'/>Male";
				echo "<input type='radio' name='rbgender' value='female'/>Female";		
		}
		else
		{
				echo "<input type='radio' name='rbgender' value='male'/>Male";
				echo "<input type='radio' name='rbgender' checked='checked' value='female'/>Female";
		}
		?>

	</div>
</div>	  
    <h5>Login Details...</h5>
	    <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Username:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtusername" value="<?php echo $rowuser["username"]; ?>">
	       </div>
	   </div>	
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Question:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control"  name="txtsecurityquestion" value="<?php echo $rowuser["securityquestion"]; ?>" >
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Answer:</label> 
	       <div class="col-sm-5"> 
             <input type="answer" class="form-control"  name="txtsecurityanswer" value="<?php echo $rowuser["securityanswer"]; ?>" >
	       </div>
	   </div>
   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
 
</form>



</body>
</html>
