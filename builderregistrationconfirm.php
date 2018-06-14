<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap-3.3.2/css/bootstrap.min.css">

<title>Property Consultancy</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

if (isset($_REQUEST['txtusername']) && isset($_REQUEST['txtpassword'])) {
	if (!empty($_REQUEST['txtusername']) && !empty($_REQUEST['txtpassword'])) {

		$get_users = mysql_query("SELECT username FROM tbllogin WHERE username='".$_REQUEST['txtusername']."' ");

		if (mysql_num_rows($get_users) != 0) {
			echo "<script>alert('Username already exists, Please select other Username.');document.location='index.php?page=builderregisration.php';</script>";
		}

		else {
			
			$query_login = "insert into tbllogin (username,password,securityquestion,securityanswer,usertype) values ('".$_REQUEST["txtusername"]."','".$_REQUEST["txtpassword"]."','".$_REQUEST["txtsecurityquestion"]."','".$_REQUEST["txtsecurityanswer"]."','builder')";
			mysql_query($query_login);

			$query_id = "select max(loginid) from tbllogin";
			$res = mysql_query($query_id);
			$row = mysql_fetch_array($res);


			$query_add = "insert into tblbuilder (username,firstname,lastname,address,areaid,cityid,stateid,pincode,fax,mobile,email,website,loginid) values ('".$_REQUEST["txtusername"]."','".$_REQUEST["txtfirstname"]."','".$_REQUEST["txtlastname"]."','".$_REQUEST["txtaddress"]."',".$_REQUEST["drparea"].",".$_REQUEST["drpcity"].",".$_REQUEST["drpstate"].",".$_REQUEST["txtpincode"].",'".$_REQUEST["txtfax"]."','".$_REQUEST["txtmobile"]."','".$_REQUEST["txtemail"]."','".$_REQUEST["txtwebsite"]."','".$row[0]."')";
			mysql_query($query_add);

			// if (mysql_affected_rows() == 0) {
			//  	echo mysql_error();
			//  	echo "success.";
			//  } else {
			//  	echo mysql_error();
			//  }
			
			echo "<script>alert('Registration confirm.');document.location='index.php?page=login.php';</script>";
		}


		
	}
}


?>

</body>
</html>
