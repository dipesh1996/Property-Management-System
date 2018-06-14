<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">

<title>Project Detail...</title>
</head>
<body>
<h3 align="center">Property Detail...</h3><hr>
<form name="frmproject" method="post" action="index.php?page=projectinsert.php" class="form-horizontal" onSubmit="return validate();" enctype="multipart/form-data">
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Project Title: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtprojecttitle" placeholder="Enter Title" required>
       </div>
	  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress"  required></textarea>
	   </div> 
  </div>
		<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Images: </label> 
	   <div class="col-sm-5"> 
         <input type="file" class="form-control" name="flprojectimage" required>
       </div>
	  </div>

   <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Description:</label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtdescription"  required></textarea>
	   </div> 
  </div>
  <div class="form-group"> 
     <div class="col-sm-offset-3 col-sm-4"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
			<?php
				include("projectgrid.php");
				?>
	</form>
</body>
</html>
