<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="ks"; // Database name 
$tbl_name="membership"; // Table name 

if(isset($_POST['Submit'])){
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

if(mysql_num_rows($result) == 1){

	
echo "Login Successful. You are login to main page.";
header("refresh:2 ; url=index.php");
echo $myusername;
$_SESSION['myusername']=$myusername;
}

else{
echo "Wrong Username or Password. Please login again!";
header("refresh:2 ; url=main_login.php");

}
}
ob_end_flush();
?>
