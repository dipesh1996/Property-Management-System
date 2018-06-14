<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="bootstrap-3.3.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body><br /><br />
<br /><h3 align="center">Login Area..</h3><hr />
<form class="form-horizontal" name="frmlogin" role="form" method="post" action="index.php?page=loginconfirm.php">
<div class="form-group has-success" align="center"> 
     <label class="col-md-4 control-label" >Login:</label> 
       <div class="col-sm-4"> 
         <input type="text" class="form-control" name="txtusername" placeholder="Enter User Name" required> 
	   </div> 
  </div> 
  <div class="form-group has-success"> 
     <label class="col-md-4 control-label">Password : </label> 
	   <div class="col-sm-2"> 
         <input type="password" class="form-control" name="txtpassword"  placeholder="Enter Password" required>
	   </div> 
  </div>
  <div class="form-group has-warning"> 
    <div class="col-sm-offset-3 col-sm-10"> <div class="checkbox">
      <label> <input type="checkbox"> Remember me </label> 
	  <label><a href="index.php?page=Forgotpassword.php">&nbsp;&nbsp;&nbsp;Forgot Password ?</a></label>
	</div> 
  </div> 
 </div> 
   <div class="form-group"> 
     <div class="col-sm-offset-4 col-sm-12"> 
         <button type="submit" name="Login" value="Login" class="btn btn-success">Sign in</button> 
         <button type="reset" class="btn btn-danger">Cancel</button>
  </div>
  
</div> 
</form>
</div>
</body>
</html>
