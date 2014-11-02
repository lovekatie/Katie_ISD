<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My profile</title>
</head>
<body>
<?php session_start();
	   include('connect_sql.php');
	   $sql="SELECT ID,Email,PhoneNumber,Birth,Address FROM membership WHERE username=
'$_SESSION[myusername]'";
		$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
	   while($row=mysql_fetch_array($result)){
			  $id  = $row['ID'];
			  $email=$row['Email'];
			  $phoneno=$row['PhoneNumber'];
			  $birth=$row['Birth'];
			  $address=$row['Address'];
			  }
?>
<table width="486" height="376" border="0"> 
	   
<form action="edit_profile.php" method="POST">
  
 <h3> Hello, <?php echo "$_SESSION[myusername]"; ?>!</h3>
 <h3> <p>You can update your information.</p> </h3>
	<tr> <td height="68">
    <p> Birth:<td width="313"> 
    <input type="text" name="birth"  value="<?= $birth?>" readonly>
    </p>
    </td>
    </tr> 
	<tr> <td height="78">
    <p>Email address:
    <td>
    <input name="email" type="text"  value="<?= $email?>" maxlength="25">
    </p>
    </td>
    </tr> 
	<tr> <td height="81"><p>Phone number:
    <td><input name="phoneno" type="text"  value="<?= $phoneno?>" maxlength="8">
    </p>
    </td>
    </tr> 
	<tr> <td> <p>Address:
    <td><input name="address" type="text"  value="<?= $address?>" maxlength="150" >
    </p>
    </td>
    </tr> </table>
      	
	&nbsp;&nbsp;&nbsp;
    <table border='1'>
    <tr>
    <td><input type="submit" name="submit" value="Update your profile"></td>
    </form> 
    
	 <td><button onClick="location.href='checkorder.php'">Check your order list</button></td>	
	 <td><button onClick="location.href='editpassword.php'">Change to password </button></td>	
    
    	<?php if($_SESSION['cart'][$id]=1){}; 
		?><td><button onClick="location.href='bill.php'">Continue bill page</button></td>
     
     
     <td><button onClick="location.href='index.php'">Back to MainPage</button> 	</td>		
    </tr>
      	 </fieldset>			
			<p>***please press continue bill page continue your payment.</p>
	
</body>
</html>