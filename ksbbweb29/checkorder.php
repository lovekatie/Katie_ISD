<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>order detail</title>
</head>
<?php session_start(); ?>

<?php include('connect_sql.php');?>

<?php
echo "<br/> Here is your order , &nbsp;".$user = $_SESSION['myusername']; 

$sql="SELECT  orders.orderid,username,order_detail.orderid,order_detail.quantity,order_detail.price,orders.date,pet.P_no,pet.P_Name 
from order_detail,orders,pet WHERE username = '$user' AND    order_detail.P_No = pet.P_no AND    order_detail.orderid = orders.orderid order by order_detail.orderid desc ";
		$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
	echo "<table border=1> 
	<tr>
		<th>order id </th></br>	
		<th>Product name</th>
		<th>Quantity &nbsp;&nbsp;</th>
		<th>Cost &nbsp;&nbsp;</th>
		<th>Date &nbsp;&nbsp;</th>
		</tr>";

		   while($row=mysql_fetch_array($result)){
			 
			  $cname = $row['username'];
			  $oid  = $row['orderid'];
			  $pid  = $row['P_no'];
			  $pname = $row['P_Name'];
			  $oquan=$row['quantity'];
			  $price=$row['price'];
			  $orddate = $row['date'];
			  
	echo "<tr>";  
	echo "<td>".$oid ."</td>"; 
	echo "<td>&nbsp;".$pname."</td>";
	echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$oquan. "</td>&nbsp;" ; 
	echo "<td>&nbsp;"."$".$price ."</td>"; 
	echo "<td>&nbsp;".$orddate ."</td>";
	

	echo "</tr>";
	} 
	
	echo"</tr>";
		

?>	
    
	<?php echo "</table>";?>

	<button onClick=location.href='profile.php'>Back to profile page</button>

<body>
</body>
</html>