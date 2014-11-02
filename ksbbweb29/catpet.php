<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cat food</title>
</head>
<?php session_start();?>

<? echo count($_SESSION['cart']); ?>
<?php include('connect_sql.php');
$mydb=mysql_select_db('ks');
$sql="SELECT P_no,P_Name,Price, P_info, image FROM pet WHERE P_Name LIKE '%" . 'Cat' . "%' ";;
$result=mysql_query($sql);
	   	$numrows=mysql_num_rows($result);
		echo "<table border='1'> 
		<tr>
		<th>Product Image</th></br>	
		<th>Name</th>
		<th>Information</th>		
		<th>Price</th>
		

		</tr>";	
	   while($row=mysql_fetch_array($result)){
		       echo "<tr>";
			   $pno= $row['P_no'];
			   $image=$row['image'];
			  echo "<td>"."<img src=PIC/$image />"."</td>";	  
			 echo "<td>".$row['P_Name']."</td>"; 
			 echo "<td>".$row['P_info']."</td>";
			  echo "<td>"."$".$row['Price']."</td>";
			echo "</tr>";


include('U1.php'); } 
echo"</tr>";
		?>
		<?php echo "</table>";?>
        
        <?php include('U2.php');?>
       
       
<body>
</body>
</html>