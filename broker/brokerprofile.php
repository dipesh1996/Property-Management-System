<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

      <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	  <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	  	  
<title>Broker Registration</title>
</head>
<?php


$query = "select * from tblbroker inner join tblarea on tblbroker.areaid=tblarea.areaid inner join tblcity on tblbroker.cityid=tblcity.cityid inner join tblstate on tblbroker.stateid=tblstate.stateid inner join tbllogin on tblbroker.loginid=tbllogin.loginid where tblbroker.loginid=".$_SESSION["loginid"];
$res = mysql_query($query);
$rowuser = mysql_fetch_array($res);

?>
<body>
<form class="form-horizontal" role="form" name="frmbrokerregistration" method="post" action="index.php?page=brokerprofileupdate.php" >
   <h4 align="center">Broker Registration</h4><hr />
    <div class="form-group has-success" align="center"> 
     <label for="firstname" class="col-md-5 control-label" id="focusedInput">First Name:</label> 
       <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtfirstname" value="<?php echo $rowuser["firstname"]; ?>" placeholder="Enter First Name" required>
		  
	   </div> 
  </div> 
   <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Last Name: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtlastname" value="<?php echo $rowuser["lastname"]; ?>" placeholder="Enter Last Name" required>
	   </div> 
  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress"  required><?php echo $rowuser["address"]; ?></textarea>
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
     <label for="lastname" class="col-md-5 control-label">City : </label> 
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
     <label for="lastname" class="col-md-5 control-label">State : </label> 
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
					}
				
				?> </select>
	     </div>  
	   </div>
	
	
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-5 control-label">Pincode: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtpincode" placeholder="Enter Pincode (Only 6 Digits)" maxlength="6" value="<?php echo $rowuser["pincode"]; ?>" required>
       </div>
	  </div>
	  <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Email:</label> 
	       <div class="col-sm-5"> 
             <input type="email" class="form-control" name="txtemail" value="<?php echo $rowuser["email"]; ?>" placeholder="Enter Email Adress " required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Mobile: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtmobile" value="<?php echo $rowuser["mobile"]; ?>" placeholder="Enter Mobile No" maxlength="10" required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Fax: </label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtfax" value="<?php echo $rowuser["fax"]; ?>" placeholder="Enter Fax" maxlength="10" required>
	       </div>
	   </div>
	    <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Gender:</label> 
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
          <label for="lastname" class="col-md-5 control-label">Username:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtusername" value="<?php echo $rowuser["username"]; ?>" placeholder="Enter Username " required>
	       </div>
	   </div>	
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Security Question:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control"  name="txtsecurityquestion" value="<?php echo $rowuser["securityquestion"]; ?>" required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Security Answer:</label> 
	       <div class="col-sm-5"> 
             <input type="answer" class="form-control"  name="txtsecurityanswer" value="<?php echo $rowuser["securityanswer"]; ?>" placeholder="Answer" required>
	       </div>
	   </div>
	   <div class="form-group has-warning">
        <div class="col-sm-offset-4 col-sm-10"> <div class="checkbox">
      <label> <input type="checkbox"><a href="#"> I accept The Terms And Condition</a> </label><br /> 
	</div> 
  </div>
   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
</form>
</div>
</body>
</html>
