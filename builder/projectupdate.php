<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

      <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	  <link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	  	  
</head>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["Submit"]))
{
	if($_FILES["flprojectimage"]["name"] == "")
	{
		$query = "update tblproject set  projecttitle='".$_REQUEST["txtprojecttitle"]."',address='".$_REQUEST["txtaddress"]."',projectdescription='".$_REQUEST["txtdescription"]."' where projectid=".$_REQUEST["txtprojectid"];
mysql_query($query);
echo "<script>alert('Project data update...');document.location='index.php?page=project.php';</script>";
	}
	else
	{
	$query = "update tblproject set  projecttitle='".$_REQUEST["txtprojecttitle"]."',address='".$_REQUEST["txtaddress"]."',projectimage='".$_FILES["flprojectimage"]["name"]."',projectdescription='".$_REQUEST["txtdescription"]."' where projectid=".$_REQUEST["txtprojectid"];
mysql_query($query);
move_uploaded_file($_FILES["flprojectimage"]["tmp_name"],"../projectimage/".$_FILES["flprojectimage"]["name"]);

echo "<script>alert('Project data updated...');document.location='index.php?page=project.php';</script>";
	}
	
}

$query = "select * from tblproject where projectid=".$_REQUEST["projectid"];
$res = mysql_query($query);
$rowproject = mysql_fetch_array($res);
?>

<body>
<h3 align="center">Property Detail...</h3><hr>
<form name="frmprojectupdate" method="post" action="" class="form-horizontal" onSubmit="return validate();" enctype="multipart/form-data">
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Project ID: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtprojectid" placeholder="Enter Title" required value="<?php echo $rowproject["projectid"]; ?>"/>
       </div>
	  </div>
<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Project Title: </label> 
	   <div class="col-sm-5"> 
         <input type="text" class="form-control" name="txtprojecttitle" placeholder="Enter Title" required value="<?php echo $rowproject["projecttitle"]; ?>"/>
       </div>
	  </div>
  <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Adress: </label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtaddress"  required><?php echo $rowproject["address"]; ?></textarea>
	   </div> 
  </div>
		<div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Images: </label> 
	   <div class="col-sm-5"> 
         <input type="file" class="form-control" name="flprojectimage" >
       </div>
	  </div>

   <div class="form-group has-success"> 
     <label for="lastname" class="col-md-4 control-label">Description:</label> 
	   <div class="col-sm-5"> 
         <textarea class="form-control" name="txtdescription"  required><?php echo $rowproject["projectdescription"]; ?></textarea>
	   </div> 
  </div>
  <div class="form-group"> 
     <div class="col-sm-offset-3 col-sm-4"> <br />
         <button type="submit" name="Submit" class="btn btn-success">Submit</button> 
         <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
  </div>
  </div>
	
	</form>
</body>
</html>
