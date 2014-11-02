<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
include('connect_sql.php');


$user = $_SESSION['myusername']; 
$sql="SELECT password FROM membership WHERE username='$user'";
		$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
	   while($row=mysql_fetch_array($result)){
			  $password  = $row['password'];
	   }

if($_POST['pw2'] == ''){
		echo "password is empty.Please enter the new password";
		header('refresh:2;url=editpassword.php');
	}else if($_POST['pw3']==''){ 
	echo "confirm password is empty.Please enter the password.";
			header('refresh:2;url=editpassword.php');	
	
	}else if($_POST['pw2'] != $_POST['pw3']){
	echo "New password and Confirm password not match. Pleas type again.";
	header('refresh:2;url=editpassword.php');
	}else if($_POST["pw1"] == $password){
mysql_query("UPDATE membership set password='" . $_POST["pw2"] . "' WHERE username='" . $user . "'"); 
echo "Password change"; header('refresh:2;url=index.php');}


?>

<body>
</body>
</html>