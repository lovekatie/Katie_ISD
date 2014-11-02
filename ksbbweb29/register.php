<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Register Form</title>
</head>

<body id="body-color"> 
<div id="Sign-Up"> 

<h1>Registration Form </h1>
<table width="486" height="460" border="0"> 
  
  <form method="POST" action="reg_process.php">
   
    <h3>Please enter your personal information.</h3>
 <td>Last name:</td>
 <td> <input type="text" name="lastname"  maxlength="10"></td> 
  
 
     <tr>
 <td>First name:</td>
 <td><input name="firstname" type="text" value=""  maxlength="10"/></td> 
 </tr> 
  
 <tr>

 <td>UserName:</td>
 <td> <input type="text" name="username"  maxlength="10"></td> 
 </tr> 
 

  <tr> 
  <td>Password:</td>
  <td> <input type="password" name="pass"  maxlength="15"></td>
   </tr>
   
   <tr> <td>Re-enter Password :</td>
   <td><input type="password" name="cpass"  maxlength="15"></td> 
   </tr>
   
   <tr> <td>Your address:</td>
 	<td><input name="address" type="text" maxlength="30" /></td> 
 	</tr>   
    
  	<tr> <td>Email:</td>
 	<td> 
 	<input type="text" name="email" maxlength="20"></td> 
 	</tr>   
   
    <tr> <td>Phone Number:</td>
	<td> 
 	<input type="text" name="phone" maxlength="8"></td> 
	</tr> 
 
<tr> <td><p>BDate:</p>
 	   <p>&nbsp;</p></td>
 	 <td> 
	   <p>
<input type="date" name="bday" placeholder="(DD/MM/YYYY)"><br>
 </tr>

  <tr> <td><p>  Sex:</p>
<td><input type="radio" name="sex" value="Male" />Male
	<input type="radio" name="sex" value="Female"/>Female
    </td></tr>
	</td>
    </tr> 
   </tr> 

    <tr> <td><input id="button" type="submit" name="submit" value="Submit the form"> 
 
  <td> <input type= "button" onClick="location.href='index.php'" value='Back to Main Page'> </td></tr> 
    
</table>     
</form> 
  
</fieldset>
</div>

<body>
</body>
</html>