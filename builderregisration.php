<!DOCTYPE html>
<html>

<head>

<title>Builder Registration</title>
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />

<script type="text/javascript" src="jq/jquery.js"></script>
<script type="text/javascript">
function validate()
{
	var err = "";
	
	if(document.forms["frmbrokerregistration"]["txtfirstname"].value == "")
	{
		err += "\nRequired firstname.";
	}
	if(document.forms["frmbrokerregistration"]["txtlastname"].value == "")
	{
		err += "\nRequired lastname.";
	}
	if(document.forms["frmbrokerregistration"]["txtaddress"].value == "")
	{
		err += "\nRequired address.";
	}
	if(document.forms["frmbrokerregistration"]["txtpincode"].value == "")
	{
		err += "\nRequired pincode.";
	}
	if(document.forms["frmbrokerregistration"]["txtemail"].value == "")
	{
		err += "\nRequired email.";
	}
	if(document.forms["frmbrokerregistration"]["txtmobile"].value == "")
	{
		err += "\nRequired mobile.";
	}
	if(document.forms["frmbrokerregistration"]["txtfax"].value == "")
	{
		err += "\nRequired fax.";
	}
	if(document.forms["frmbrokerregistration"]["txtusername"].value == "")
	{
		err += "\nRequired username.";
	}
	if(document.forms["frmbrokerregistration"]["txtpassword"].value == "")
	{
		err += "\nRequired password.";
	}
	if(document.forms["frmbrokerregistration"]["txtsecurityquestion"].value == "")
	{
		err += "\nRequired security question.";
	}
	if(document.forms["frmbrokerregistration"]["txtsecurityanswer"].value == "")
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

</head>

<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

?>
<body>
<form name="frmbrokerregistration" method="post" action="index.php?page=builderregistrationconfirm.php" class="form-horizontal" role="form">
   <h3 align="center">Builder Registration</h3><hr />
    <div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-3 control-label" id="focusedInput">First Name:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtfirstname" placeholder="Enter First Name" required>
		  
	   </div> 
  </div> 
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-3 control-label">Last Name: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtlastname" placeholder="Enter Last Name" required>
	   </div> 
  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-3 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress" required></textarea>
	   </div> 
  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-3 control-label">Area: </label> 
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
     <label for="lastname" class="col-md-3 control-label">City : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drpcity" required>
	   <option value="0">Select City</option>
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
	 <div class="form-group has-success"> 
     <label for="lastname" class="col-md-3 control-label">State : </label> 
	   <div class="col-sm-5"> 
	   <select class="form-control"  name="drpstate" required>
	   <option value="0">Select State</option>
	   <?php
					$query = "select * from tblstate";
					$res = mysql_query($query);
					while($row = mysql_fetch_array($res))
					{
						echo "<option value='".$row["stateid"]."'>".$row["statename"]."</option>";
					}
				
				?> </select>
	     </div>  
	   </div>
	
	
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-3 control-label">Pincode: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpincode" placeholder="Enter Pincode" maxlength="6" required>
       </div>
	  </div>
	  <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Fax: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtfax" placeholder="Enter Fax" maxlength="10">
	       </div>
	   </div>
	   <!-- <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Gender:</label> 
	       <div class="col-sm-6"> 
		<input type="radio" name="txtgender" value="male" required/> Male
		<input type="radio" name="txtgender" value="female" required/> Female
	       </div>
	   </div> -->
	  
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Mobile: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtmobile" placeholder="Enter Mobile No " maxlength="10" required>
	       </div>
	   </div>
	  <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Email:</label> 
	       <div class="col-sm-5"> 
             <input type="email" class="form-control" name="txtemail" placeholder="Enter Email Adress " required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Website: </label> 
	       <div class="col-sm-5"> 
             <input type="url" class="form-control" name="txtwebsite" placeholder="Enter Website ">
	       </div>
	   </div>
    <h5>Login Details...</h5>
	    <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Username:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtusername" placeholder="Enter Username " required>
	       </div>
	   </div>	
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Password:</label> 
	       <div class="col-sm-5"> 
             <input type="password" class="form-control"  name="txtpassword" placeholder="Enter Password " required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Question:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control"  name="txtsecurityquestion" required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-3 control-label">Answer:</label> 
	       <div class="col-sm-5"> 
             <input type="answer" class="form-control"  name="txtsecurityanswer" placeholder="Answer" required>
	       </div>
	   </div>
	   <div class="form-group has-warning"> 
    <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox">
      <label> <input type="checkbox" required><a href="#"> I accept The Terms And Condition</a> </label><br /> 
	</div> 
  </div>
   <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-12"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Register</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  
</div>
</form>

</div>

</body>
</html>
