<?php 

$con = mysql_connect("localhost","root","");
mysql_select_db("dbproperty",$con);


$query_id = "select max(loginid) from tbllogin";
			$res = mysql_query($query_id);
			$row = mysql_fetch_array($res);


			$query_add = "insert into tblbuyer (firstname,lastname,address,areaid,cityid,stateid,pincode,email,mobile,gender,loginid) values ('".$_REQUEST["txtfirstname"]."','".$_REQUEST["txtlastname"]."','".$_REQUEST["txtaddress"]."',".$_REQUEST["drparea"].",".$_REQUEST["drpcity"].",".$_REQUEST["drpstate"].",".$_REQUEST["txtpincode"].",'".$_REQUEST["txtemail"]."','".$_REQUEST["txtmobile"]."','".$_REQUEST["txtgender"]."','".$row[0]."')";
			mysql_query($query_add);


			if (mysql_affected_rows() == 0) {
			 	echo mysql_error();

			 	echo "<br> success.";
			 } else {
			 	echo mysql_error();
			 }
// 			echo $row[0];

// 			echo "<br>";

// printf(mysql_affected_rows());



// $get_users = mysql_query("SELECT username FROM tbllogin WHERE username='".$_REQUEST['txtusername']."' ");

// if (mysql_num_rows($get_users) != 0)
//   {
//       echo "Username already exists";
//   }

//   else
//   {
//     echo "available";
//   }

// $res_users = mysql_query($get_users);
// while ($row_users = mysql_fetch_array($res_users)) {
// 	if ($row_users['username'] == $_) {
// 		echo "done<br>";
// 	} else {
// 		echo "congo<br>";
// 	}
// }


?>