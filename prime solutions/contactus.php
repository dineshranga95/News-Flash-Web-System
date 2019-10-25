<?php $conn=mysqli_connect("localhost","root","","login");
$error="";
if(isset($_POST['submit'])){
  if(empty($_POST['name'])|| empty($_POST['email']) || empty($_POST['tele']) || empty($_POST['message'])){
        $error ="Every fields required, please try again.";
  }else{
         $name=$_POST['name'];
   
          $email=$_POST['email'];
         $telephone=$_POST['tele'];
          $message=$_POST['message'];
      
         $sql="INSERT INTO feedback (Name,Email,Telephone,Message) VALUES('$name','$email','$telephone','$message') ";
          
           mysqli_query($conn,$sql);
    


    $error="  Feedback send.";
  
  }
}
if(isset($_POST['clear'])){
 
        $error ="clear data.";
  }
    
  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Contact Us</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<style type="text/css">
<!--
.style7 {
	font-size: 16px;
	color: #004d8e;
}
.error{font-size: 25px;}
.sub{font-size: 25px;}
-->
</style>
</head>
<body>
<table width="1000" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="1000" height="21" valign="top"><img src="images/top.jpg" align="right"></td>
  </tr>
  <tr>
    <td width="1000" height="51" valign="top" class="men"><img src="images/menu_left.jpg" align="left"><img src="images/menu_right.jpg" align="right">
<div style="float:right; padding-top:10px;">
<a href="index.php" class="menu">Home page</a><img src="images/line_menu.jpg" align="left">
<a href="products.php" class="menu">Products</a><img src="images/line_menu.jpg" align="left">
<a href="index-2.2.php" class="menu">Subscribes</a><img src="images/line_menu.jpg" align="left">
<a href="aboutUs.php" class="menu">About Us</a><img src="images/line_menu.jpg" align="left">
<a href="contactus.php" class="menu">Contact Us</a><img src="images/line_menu.jpg" align="left">
<a href="sitemap.php" class="menu">Site Map</a></div></td>
  </tr>
  <tr>
    <td width="1000" height="10" valign="top"></td>
  </tr>
  
  <tr>
    <td width="1000" height="295" valign="top" class="header"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/pictures/cooltext512223740.png" width="341" height="133"></p></td>
  </tr>
  <tr>
    <td width="1000" height="15" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top">
<table width="660" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="660" height="100" valign="top"><div class="blok">
      <p><br>
        <img src="images/line.jpg" class="line" width="620" height="2"><br>
        <img src="images/im10.jpg" class="pictures">        </p>
      <p><strong>NewsFlash Agency</strong><br>
        No: 1234,         Colombo Road,<br>
        Gampaha, Sri Lanka <br>
        Telephone:      +94 33 2232324<br>
        Telephone: +94 33 2232325<br>
        Fax:                 +94 33 2232326<br>
        E-mail: <a href="mailto:mail@companyname.com" class="read">newsflash@news.com</a></p>
      <p><br>
        <span class="style6"><br>
        <span class="blok style17 style7"><strong>Feedback </strong></span><br>
        <img src="images/line.jpg" class="line" width="620" height="2"><br>
      </p><form action="contactus.php" method="POST">
      <table width="620" height="20" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="327" height="20" valign="top">
&nbsp;Name : 
<input name="name" type="text" class="input" id="feedname">
<br><br>
&nbsp;E-mail :
<input name="email" type="text" class="input" id="feedemail">
<br><br>
&nbsp;Telephone:
<input name="tele" type="text" class="input" id="feedtele">
<br></td>
    <td width="293" height="20" valign="top"> &nbsp;Message:
      <textarea name="message" class="message" id="feedmessage"></textarea>
	  <br>
	  <br>
                 
               <label>
               <input type="submit" name="clear" value="Clear" class="sub">
                 </label>
             <input name="submit" type="submit" style="padding:0px 10px;" value="Send" class="sub"></td>
         </tr>
         <tr>
           <td align="left" colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td align="right">     
           <td align="right">&nbsp;</td>
         </tr>
</table>
</form>
<div style="color:red;" class="error"><?php echo $error ?></div>
</div></td>
</tr>
</table>
	</td>
  </tr>
  <tr>
    <td width="1000" height="53" valign="top" class="bottom"><img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
<div class="copyright">Copyright &copy; 2019. All rights reserved.<br>Image from BigStockPhoto.com &copy; Hugo de Wolf.</div>
<!--div class="menu_bot">
<a href="indexx.html" class="menu_bottom"> Home page</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-1.html" class="menu_bottom">Products</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-2.html" class="menu_bottom">Subscibes</a> &nbsp; &nbsp; | &nbsp; &nbsp;
<a href="index-3.html" class="menu_bottom">About us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-5.html" class="menu_bottom">Contact us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-4.html" class="menu_bottom">Site Map </a>
</div-->	
	</td>
  </tr>
  <tr>
    <td width="1000" height="20" valign="top"></td>
  </tr>
</table>
</body>
</html>