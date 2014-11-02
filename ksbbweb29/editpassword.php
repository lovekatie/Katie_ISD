<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
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
?>

<form action="edpw_process.php" method="POST">
		<legend><h3> Hello, &nbsp;<?php echo "$_SESSION[myusername]"; ?></h3>
  <h3> <p>You can change your password.</p> </h3>
		<table width="486" height="281" border="0"> 
		
			<tr><td width="182">Password:</td>
			<td width="294"><input type="password" name="pw1"  value="<?= $password?>" readonly ></td></tr>
			
			<tr><td>New Password:</td>
			<td><input type="password" name="pw2"></td></tr>
			
			<tr><td>Confrim password:</td>
			<td><input type="password" name="pw3" ></td></tr>
            <td><input type="submit" name="changepw" value="Update your password"></td> 
      </table>
</legend>
</button>
</form>
</fieldset>

<button onClick="location.href='index.php'">Back to main page 






</body>
</html>