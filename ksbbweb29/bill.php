<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopping Cart </title>
<style type="text/css">
body {
	background-color: #CCCCFF;
	text-align: center;
}
</style>
<!-- The Billing page for shopping cart -->
<meta charset="utf-8">
</head>
<body>
<?php include('connect_sql.php');?>
<?php session_start(); 

  $sql="SELECT ID,username, Email,PhoneNumber,Birth,Address FROM membership WHERE username=
'$_SESSION[myusername]'";
		$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
	   while($row=mysql_fetch_array($result)){
			  $id  = $row['ID'];
			  $email=$row['Email'];
			  $phoneno=$row['PhoneNumber'];
			  $address=$row['Address'];
			  }?>

<?php 
if(isset($_SESSION['cart']) )
{
	
	if(empty($_REQUEST['submit'])){
?>

<div align="center">

<h1>  <p>Payment</p></h1>
<h2>  <p>Please check the information. It will be send out the product by this information. </p>
</h2>
<table width="496" height="287" border="0" bgcolor='CCCCFF' style="padding:100px;">
  <td width="203"><tr>
    <td>Name</td>
    <td><form id="form1" name="form1" >
      <label for="name"></label>
      <input type="text" name="name" id="name" value="<?= $_SESSION['myusername']; ?>" readonly/>
    </td>
  </tr>
  <tr>
    <td>Email</td>
    <td width="220"><label for="email"></label>
    <input type="text" name="email" id="email" value="<?= $email?>" readonly/></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <label for="address"></label>
      <input type="text" name="address" id="address" value="<?= $address?>"readonly></textarea>
    </td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><label for="phone"></label>
    <input type="text" name="phone" id="phone" maxlength="8"value="<?= $phoneno?>"readonly/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <table border='1'>
    <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" id="submit" value="Submit" /> </form></td>
  </tr>
  <td><button onClick="location.href='index.php'">Back to main page</button><button onClick="location.href='profile.php'">edit your iniformation</button> </td>	
  <?php }}
else
	{
		print "<script>";
		print " self.location='bill.php';";
		print "</script>";
	}
?>
  
  
 <?php
if(!empty($_REQUEST['submit'])){
	
 		$username=$_REQUEST['name'];
		
		include("connect_sql.php");
		
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$username')");
		$orderid=mysql_insert_id();
		
		
		
		$total=0;
		foreach($_SESSION['cart'] as $id => $x){
			include("connect_sql.php");
            $result=mysql_query("select P_no,P_Name,Price from pet  WHERE P_no =$id");
			$myrow=mysql_fetch_array($result);
			$pname=$myrow['P_Name'];
			$price=$myrow['Price'];
			
			$line_cost=$price*$x;
			$total= $total+$line_cost;
			
			mysql_query("insert into order_detail values ($orderid,$id,$x,$price)");
			
			

}
		
	echo"<span style='color:blue'>Thank you ".$username." for placing an order.</br>You can view your own order in your profile page.</span></div>";
	unset($_SESSION['cart']);
	header('refresh:5;url=profile.php');
		
}

?>
  
  
  
</table>
<p>***If need to edit yourinformtion, please press edit profile information.</p>
</div>
</body>
</html>
