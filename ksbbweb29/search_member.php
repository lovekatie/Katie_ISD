<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Search Contacts</title>
<style type="text/css" media="screen">
ul li{
  list-style-type:none;
}
</style>
</head>

<body>
<h3>Search Contacts Details</h3>

<script>
function goBack() {
    window.history.back()
}

</script>
<?php

if(isset($_POST['submit'])){
if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
$name=$_POST['name'];

//connect to the database
 $db=mysql_connect('127.0.0.1', 'root', 'root')or die("cannot select DB");

//-select the database to use
$mydb=mysql_select_db('ks');

//-query the database table
$sql="SELECT id, username,password FROM membership WHERE username LIKE '%" . $name . "%' ";

//-run the query against the mysql query function
$result=mysql_query($sql);

//-count results

$numrows=mysql_num_rows($result);

echo "<p>" .$numrows . " results found for " . stripslashes($name) . "</p>"; 

//-create while loop and loop through result set
while($row=mysql_fetch_array($result)){

	$FirstName =$row['username'];
	$ID=$row['id'];
	$pass = $row['password'];
//-display the result of the array

echo "<ul>\n"; 
	echo  "<li>"."Your ID:" . $ID .  "</li><br />"; 
    echo  "<li>"."Your username:" . $FirstName .  "</li><br />"; 
   echo  "<li>"."Your password:" . $pass .  "</li><br />"; 
echo "</ul>";
}
}
else{
echo "<p>Please enter a search query</p>";
}
}


?>

<Button onClick="goBack()">Back to main page</Button>
</body>
</html>
