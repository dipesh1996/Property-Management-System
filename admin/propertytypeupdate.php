<?php
	session_start();
	$con = mysql_connect("localhost","root","");
	mysql_select_db("dbproperty",$con);

if(isset($_REQUEST["ptuid"]))
{
	$query_get = "select * from tblpropertytype where propertytypeid=".$_REQUEST["ptuid"];
	$res_get = mysql_query($query_get);
	$row_get = mysql_fetch_array($res_get);
}

if(isset($_REQUEST["Submit"]))
{

$query = "update tblpropertytype set propertytypename='".$_REQUEST["txtpropertytypename"]."' where propertytypeid=".$_REQUEST["txtpropertytypeid"];
mysql_query($query);
echo "<script>alert('updated...');document.location='index.php?page=propertytype.php';</script>";	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/BrightSide.css" type="text/css" />
	<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.css" />
	<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css" />
	<link rel="shortcut icon" type="image/x-icon" href="images/kp.ico" />
	<title>Bright Side of Life</title>
	<script type="text/javascript">
	function validate()
	{
		var err = "";
		
		if(document.forms["frmpropertytypeupdate"]["txtpropertytypeid"].value == "")
		{
			err += "\nRequired propertytypeid.";
		}
		if(document.forms["frmpropertytypeupdate"]["txtpropertytypename"].value == "")
		{
			err += "\nRequired propertytypename.";
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
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div id="wrap">
				<div id="header">
					<h1 id="logo">Property<span class="green">Management</span></h1>
					<h2 id="slogan">view...sell...rent...buy...</h2>

					<!-- Menu Tabs -->
					<?php
						if(isset($_SESSION["username"]))
						{
					?>
					<ul>
						<li id="current"><a href="index.php?page=home.php"><span>Home</span></a></li>
						<li><a href="../index.php?page=logout.php"><span>Logout</span></a></li>
					</ul>
					<?php
						}
					?>
				</div>
				<!-- content-wrap starts here -->
				<div id="content-wrap"> <img src="images/headerphoto.jpg" alt="headerphoto" class="no-border" height="180" width="1020" />
					<div id="sidebar">
						<?php
							if(isset($_SESSION["username"]))
							{
						?>
						<h3 align="center">Admin Control</h3>
						<ul class="sidemenu">
							<li><a href="index.php?page=home.php">Home</a></li>
							<li><a href="index.php?page=area.php">Area</a></li>
							<li><a href="index.php?page=city.php">City</a></li>
							<li><a href="index.php?page=state.php">State</a></li>
							<li><a href="index.php?page=Propertytype.php">Propertytype</a></li>
							<li><a href="index.php?page=changepassword.php">changepassword</a></li>
							<li><a href="../index.php?page=logout.php">Logout</a></li>
						</ul>
						<?php
							}
						?>
						<br /><br />
					</div>
					<!--<div id="main"> <a name="TemplateInfo"></a>-->
					<div class="container-fluid">
						<div class="col-sm-3 col-md-6 col-lg-8" >
						
<form class="form-horizontal" name= "frmpropertytypeupdate"  method="post" enctype="multipart/form-data" action="" onsubmit="return validate();">
	<h3 align="center">Propertytype Update Detail...</h3><hr />
	
	<div class="form-group has-success" align="center"> 
	<label for="areaname" class="col-md-5 control-label" >Propertytype ID</label> 
		<div class="col-sm-5"> 
		 <input type="text" class="form-control" name="txtpropertytypeid" value="<?php echo $row_get['propertytypeid'];?>" readonly>
		  
		  
		</div> 
	</div>

	<div class="form-group has-success" align="center"> 
	<label for="areaname" class="col-md-5 control-label" >Property Type Name</label> 
		<div class="col-sm-5"> 
		 <input type="text" class="form-control" name="txtpropertytypename" value="<?php echo $row_get['propertytypename'];?>" required >
		  
		</div> 
	</div>

	<!-- <div class="form-group has-success" align="center"> 
	<label for="areaname" class="col-md-5 control-label" >Area Name</label> 
		<div class="col-sm-5"> 
			<select name="drparea">
				<option value="0">-Select-</option>
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
	</div> -->

	<!-- <div class="form-group has-success" align="center"> 
	<label for="areaname" class="col-md-5 control-label" >City Name</label> 
		<div class="col-sm-5"> 
			<select name="drpcity">
				<option value="0">-Select-</option>
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
	</div> -->

	<!-- <div class="form-group has-success" align="center"> 
	<label for="areaname" class="col-md-5 control-label" >State Name</label> 
		<div class="col-sm-5"> 
			<select name="drpstate">
				<option value="0">-Select-</option>
				<?php
					$query = "select * from tblstate";
					$res = mysql_query($query);
					
					while($row = mysql_fetch_array($res))
					{
						echo "<option value='".$row["stateid"]."'>".$row["statename"]."</option>";
					}
				?>
			</select>
		</div> 
	</div> --> 
	
	<div class="form-group"> 
		<div class="col-sm-offset-4 col-sm-4"> 
			<button type="submit" value="Submit" name="Submit" class="btn btn-success">Update</button> 
			<button type="reset" name="Reset" value="Reset" class="btn btn-danger">Reset</button>
		</div>
	</div>

</form>

	<?php include("propertytypegrid.php"); ?>

						</div>
					</div>
				</div>
			</div>
			<!-- footer starts here -->
			<div id="footer">
				<div class="footer-left">
				<p class="align-left"> © 2015 <strong>Softweb Technology</strong></p>
				</div>
			</div>
			<!-- footer ends here --><!-- wrap ends here --> 
		</div>
	</div>
</body>
</html>