<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Love Pet Care.com</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<?php session_start();?>
<style type="text/css">
body,td,th {
	text-align: center;
}
text{
	color: #9900FF;
}
body {
	background-color: #C9F;
	text-align: center;
}
body {
	text-align: center;
}
</style>


  
</head>
<body> 


<p> <a href="index.php"><div align="center"><img src="PIC/SY_.jpg" width="202" height="123" /></a></p>
<p></p>
<p></p>
<p></p>
<p></p>
<div align="right"> 
  <form method="post" action="search.php">
    <p>
      <input type="text" name="P_Name" />
      <input type="submit" name="submit" value="Search" />
    </p>
  </form>
   <a href="https://www.facebook.com/pages/Pet-Care-Company/831909490183503" target="_new"><img src="PIC/fb_page.png" alt="fb_page" width="25" height="24" align="right" /></a>
  <a href="https://twitter.com/" target="_new"><img src="PIC/twitter2.png" alt="twitter_page" width="25" height="24" align="right" /></a>
  <a href="https://www.youtube.com/" target="_new"><img src="PIC/YouTube.png" alt="YouTube_page" width="25" height="24" align="right" /></a>
<p>&nbsp;</p>
<div class="fb-like" data-href="https://www.facebook.com/pages/Pet-Care-Company/831909490183503" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
<p>&nbsp;</p>
<p>
  <?php if(!isset($_SESSION['myusername'])){
	  
echo "<div align='right'><p><a href='main_login.php' target='_self'><strong>Sign in</strong></a><strong> | <strong><a href='register.php'>Register</a></strong><strong></strong></p>";
echo "Member please login, if not please join us now!";
}
?>
  <?php if(isset($_SESSION['myusername'])){
echo "$_SESSION[myusername]";

}if(isset($_SESSION['myusername'])){
   echo "  |   <hidden><a href='profile.php'>Your profile</a></hidden>";
   echo "  |   <hidden><a href='Signout.php'>Logout</a></hidden>";}
    ?>
</p>
<p>&nbsp; </p>
</div>
 <?php if(!isset($_SESSION['myusername'])){
echo "<div align='left'><h3><hidden><p><a href='productlist.php' target='_new'>Product</a>&nbsp;&nbsp;&nbsp;&nbsp;</hidden><hidden><a href='ContactUs.php' target='_new'>ContactUs</a>&nbsp;&nbsp;&nbsp;&nbsp;</hidden><hidden><a href='aim.php' target='_new'>Love Pet Care Aim</a>&nbsp;&nbsp;&nbsp;&nbsp;</hidden><hidden><a href='shoppinginfo.php' target='_new'>Pet Care Shopping Information</a>&nbsp;&nbsp;&nbsp;&nbsp;</hidden></h3>";

}
?>
  <?php
if(isset($_SESSION['myusername'])){
?>    
</p>
<p>&nbsp;</p>
<hidden><ul id="MenuBar1" class="MenuBarHorizontal">
  <li><hidden><a class="MenuBarItemSubmenu" href="#">Products</a></hidden>
    <ul>
      <li><a href="catpet.php">Cat Product </a></li>
      <li><a href="pet.php">Dog Product </a></li>
      <li><a href="otherspet.php">Others Product </a></li>
    </ul>
  </li>
  <li><a href="aim.php">Pet Care Aim</a></li>
  <li><a href="kscart.php">Cart</a></li>
</ul>
<ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a href="ContactUs.php">Contact Us</a></li>
</ul>
</ul></hidden>


<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>
<p>&nbsp; </p>

<?php } ?>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=190741033319&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div align='left'><img src='PIC/image13.jpg' width="300" height="168" />
					<img src='PIC/IMG1.jpg' width="300" height="168" />
                    <img src='PIC/IMG2.jpg' width="300" height="168" />
                    <img src='PIC/IMG3.jpg' width="300" height="168" /><p><a href="https://www.google.com.hk/search?ion=1&espv=2&es_th=1&q=dog%20and%20cat&bav=on.2,or.r_cp.&bvm=bv.78677474,d.dGc&biw=1366&bih=628&dpr=1&um=1&ie=UTF-8&hl=zh-TW&tbm=isch&source=og&sa=N&tab=wi&ei=2_VVVKW6BMTe8AWLo4DoDA" target="_new">more pictures</a></p>
                    
<?php include('footer.php');?>
</body>
</html>