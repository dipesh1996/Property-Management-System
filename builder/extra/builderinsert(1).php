<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);

$query = "insert into tblbuilder
(username,firstname,lastname,address,area,city,state,pincode,fax,mobile,landline,email,website,logo) values ('".$_REQUEST["txtusername"]."',
                              '".$_REQUEST["txtfirstname"]."',
							  '".$_REQUEST["txtlastname"]."',
							  '".$_REQUEST["txtaddress"]."',
							  '".$_REQUEST["drparea"]."',  
                              '".$_REQUEST["drpcity"]."',
							  '".$_REQUEST["drpstate"]."',
							  ".$_REQUEST["txtpincode"].",
							  ".$_REQUEST["txtfax"].",
							  ".$_REQUEST["txtmobile"].",
							  ".$_REQUEST["txtlandline"].",
							  '".$_REQUEST["txtemail"]."',
							  '".$_REQUEST["txtwebsite"]."',
							  '".$_REQUEST["txtlogo"]."')";
		
							   
mysql_query($query);

?>

</body>
</html>
