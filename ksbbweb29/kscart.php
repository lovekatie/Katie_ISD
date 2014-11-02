<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
</head>
<?php session_start(); ?>

<?php

if (isset($_GET['id']))
	$id=$_GET['id'];
 else
 	$id=1;
	
if (isset($_GET['action']))
	$action=$_GET['action'];
 else
 	$action="empty";
	

switch($action){

case "add":
error_reporting(0);
if($_SESSION['cart'][$id])
	$_SESSION['cart'][$id]++;
else
	$_SESSION['cart'][$id]=1;

break;	

case "remove":
error_reporting(0);
if($_SESSION['cart'][$id]){
		$_SESSION['cart'][$id]--;
		
		if($_SESSION['cart'][$id]==0)
		unset($_SESSION['cart'][$id]);
}

break;	

case "empty":
;
break;	
}
?>
<?php
if(isset($_SESSION['cart'])){
echo "<p style='margin-left:400px;'>

<div align='center'><a style='color:Red ; text-decoration:none'>Shopping Cart<br></br></a>

<table  style='padding:1px;'  align='center' border='10' bgcolor='CCCCFF' cellpadding='10' width='600'>";

	echo "<tr>";
	echo "<tr bgcolor='#ffccff'>";
	echo "<th>Product Name  </th>";
	echo "<th>Qty  </th>";
	echo "<th>Price (HKD) </th>";
	echo "</tr>";

$total=0;
foreach($_SESSION['cart'] as $id => $x)
{
include("connect_sql.php");
$result=mysql_query("select P_Name,Price from pet WHERE P_no = $id");
$myrow=mysql_fetch_array($result);

$name=$myrow['P_Name'];
$price=$myrow['Price'];
$line_cost=$price*$x;
$total= $total+$line_cost;

	
	echo "<tr>";
	echo "<td>".$name."</td>";
	echo "<td align='right'> $x <a href='kscart.php?id=".$id."&action=remove'>- </br></a><a href='kscart.php?id=".$id."&action=add'>+</a></td>";
	echo"<td align='right'>= $$line_cost</td>";
	echo "</tr>";
} 
	echo"<tr >";
	echo "<td align='right'><br/><b> Total </b></td>";
	echo "<td></td>";
	echo "<td align='right'><br/><b> $total </b></td>";
	echo "</tr>";

	echo"<tr>";
	echo "<th><a href='index.php'; style='color:Red; text-decoration:none;'>Continue shopping<th>";	
	echo "<th><a href='bill.php'style='color:blue; text-decoration:none;'>Payment</th>";
	echo "</tr>";

	echo "</table>";
	echo "</br>";
}
else{
	
	echo" your shopping cart is empty </br></br>";
}	
	
?>
<?php include('U2.php');?>



<body>
</body>
</html>