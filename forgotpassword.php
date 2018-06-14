<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h3 align="center">Forgot Password</h3><hr />
<form class="form-horizontal" method="post"name="frmforgotpassword" action="index.php?page=forgotpasswordconfirmValidate.php">
	<div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Username:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control" name="txtusername" placeholder="Enter Username " required>
	       </div>
	   </div>	
  
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Question:</label> 
	       <div class="col-sm-5"> 
             <input type="text" class="form-control"  name="txtsecurityquestion" required>
	       </div>
	   </div>
	   <div class="form-group has-success"> 
          <label for="lastname" class="col-md-4 control-label">Answer:</label> 
	       <div class="col-sm-5"> 
             <input type="answer" class="form-control"  name="txtsecureanswer" placeholder="Answer" required>
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
