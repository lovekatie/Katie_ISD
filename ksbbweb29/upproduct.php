<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete order</title>
</head>
<?php include('connect_sql.php');
$mydb=mysql_select_db('ks');
$sql="SELECT P_no,P_Name,Price, P_info, image FROM pet";
$result=mysql_query($sql);

$sql="DELETE FROM pet when ";

?>
<button onClick=location.href='delorder.php'></button>
<body>
</body>
</html>