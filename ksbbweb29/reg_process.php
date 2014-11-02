<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Authenticating registration</title>
</head>
<?php
// phone birth gender likepet edu job
include('connect_sql.php');



$username = mysql_real_escape_string($_POST['username']); 
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['pass']);  
$phone = $_POST['phone'];

$address = $_POST['address'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sqlDate = date('Y-m-d H:i:s');




if($username == ''){
	echo "username field is empty.";header('refresh:1;url=register.php');
	}else if($username == '0'){ 
	echo "This is not a valid username.Please enter the valid name";header('refresh:2;url=register.php');
	}else if(strlen($username)<4){ 
	echo "This is not a maxlength username.Please enter the valid name";header('refresh:2;url=register.php');
	}else if ($password == ''){
		echo "Password cannot be empty.Please type password.";header('refresh:2;url=register.php');
	}else if ($password <> $_POST['cpass']){
		echo "Password and confirm password did not match.Please type the password on both column.";header('refresh:2;url=register.php');
		}else if(strlen($password)<4){ 
	echo "This is not a maxlength password.Please enter the valid name";header('refresh:2;url=register.php');
	}else if ($email == ''){
		echo "Email address cannot be empty.Please type the email address.";header('refresh:2;url=register.php');
	}else if ($phone == ''){ 
		echo "Phone number cannot be empty.Please fill the phone number.";header('refresh:2;url=register.php');
	}else if (!is_numeric($phone)){
		echo"Phone number XXXXX";
	}else if ($firstname ==''){
		echo "Please enter the firstname. Please enter again.";header('refresh:2;url=register.php');	
	}else if ($lastname==''){
		echo "Please enter the lastname. Please enter again.";header('refresh:2;url=register.php');	
	}else if ($address==''){
		echo "Please enter address agin.";header('refresh:2;url=register.php');	
	}else if (empty($_POST["sex"])){
		echo "You must choose the gender first.Please select your gender.";header('refresh:2;url=register.php');		
	}else{
$sql = mysql_query("SELECT username FROM membership WHERE username = '".$username."'");
if (mysql_num_rows($sql)>0) { 
echo "Username taken.Please try again.";
header("refresh:2;url=register.php");
} 
	
mysql_query("INSERT INTO membership (Lastname,Firstname, username, password, Address,Email,PhoneNumber,Birth,
			sex) VALUES ( '$_POST[lastname]','$_POST[firstname]','$username', '$password', '$email','$_POST[address]','$_POST[phone]','$_POST[bday]',
			'$_POST[sex]')") or die (mysql_error()); 
		echo "Account created. You can try login later.";header('refresh:2;url=register.php');	
}




?>
<body>
</body>
</html>