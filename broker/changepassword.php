<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

      <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	  <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	  	  
<title>Change Password</title>
</head>

<body>
 <h3 align="center">Change Password</h3><hr />
<form class="form-horizontal" name="frmchangepassword" method="post" action="index.php?page=changepasswordconfirm.php">

	<div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Old Password:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtopassword" placeholder="Enter Old Password " required>
	       </div>
	   </div>	
  
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">New Password:</label> 
	       <div class="col-sm-5"> 
             <input type="password" class="form-control"  name="txtnpassword" placeholder="Enter New Password " required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-5 control-label">Confirm Password:</label> 
	       <div class="col-sm-5"> 
             <input type="password" class="form-control"  name="txtcpassword"  required>
	       </div>
	   </div>
	   
   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> <br />
         <button type="submit" name="Submit" value="submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
  </form>
</body>
</html>
