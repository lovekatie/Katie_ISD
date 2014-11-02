<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit profile</title>
</head>
<?php session_start();
?>
<?php
if (isset($_POST['submit'])){
include('connect_sql.php');

  			  $user = $_SESSION['myusername'];
			  $email=$_POST['email'];
			  $phoneno=$_POST['phoneno'];
			  $address=$_POST['address'];
$sql="SELECT ID,username,Email,PhoneNumber,Address FROM membership WHERE username='$user'";
		$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
	   while($row=mysql_fetch_array($result)){
    // update the description in the database       

$sql = mysql_query ('UPDATE membership SET email ="'.$email.'" WHERE username="'.$user.'"');
$sql = mysql_query ('UPDATE membership SET PhoneNumber="'.$phoneno.'" WHERE username="'.$user.'"');
$sql = mysql_query ('UPDATE membership SET Address ="'.$address.'" WHERE username="'.$user.'"');
    
echo "Update successful";
header('refresh:1; url=profile.php');
		}
		}
		else
		header('refresh:0;url=index.php');

?>


<body>
</body>
</html>