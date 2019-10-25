<?php 
$conn=mysqli_connect("localhost","root","","login");
$error="";
if(isset($_POST['submit'])){
  if( $_POST['pwd']!=$_POST['confpwd']){
    $error="Not match the passwords. please try again.";
  }
  else{
    $username=$_POST['uname'];
    $password=$_POST['pwd'];
    $confpassword=$_POST['confpwd'];
    $email=$_POST['email'];
    $firstname=$_POST['first'];
    $lastname=$_POST['last'];
    $hashed_password=sha1($password);
    $sql="INSERT INTO signup (Username,Password,Email,First_name,Last_name) VALUES('$username','$hashed_password','$email','$firstname','$lastname') ";
    mysqli_query($conn,$sql);
    $error="sign up successfully";
    } 
  }
  if(isset($_POST['cancel'])){
      $error="sign up cancelled";
  }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Sign Up</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<style>
.error{
  font-size: 20px;
}
.account{font-size: 25px;}
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
<a href="aboutus.php" class="menu">About Us</a><img src="images/line_menu.jpg" align="left">
<a href="contactus.php" class="menu">Contact Us</a><img src="images/line_menu.jpg" align="left">
<a href="sitemap.php" class="menu">Site Map</a></div></td>
  </tr>
  <tr>
    <td width="1000" height="10" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="284" valign="top" class="header"><p>&nbsp;</p>
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
<table width="1000" height="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <td width="620" height="100" valign="top"><div class="blok">
       <p><span class="name">Sign Up for new users </span><br>
             <img src="images/line.jpg" class="line" width="620" height="2"><br>
         </p>
       <table>
      <form action="signup.php" method="POST">
       <tbody>
        
         <tr>
           <td align="right">*Username :</td>
           <td><input type="text" name="uname" style="width:240px;" required></td>
         </tr>
         <tr>
           <td align="right">*Password:</td>
           <td><input type="password" name="pwd" style="width:240px;" required></td>
         </tr>
         <tr>
           <td align="right">*Confirm Password:</td>
           <td><input type="password" name="confpwd" style="width:240px;" required></td>
         </tr>
         <tr>
           <td>*E-mail :</td>
           <td><input type="text" name="email" style="width:240px;" required></td>
         </tr>
         <tr>
           <td align="right">*First Name:</td>
           <td><input type="text" name="first" style="width:240px;" required></td>
         </tr>
         <tr>
           
         <tr>
           <td align="right">*Last Name:</td>
           <td><input type="text" name="last" style="width:240px;" required></td>
         </tr>

         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
               <label></label>
             <input name="submit" type="submit" style="padding:0px 10px;" value="Submit">
             <input type="submit" name="cancel" value="Cancel"></td>
         </tr>
        
         <tr>
           <td align="left" colspan="2">&nbsp;</td>
         </tr>
         
       </tbody>
     </form>
    
     </table>
      <div style="color:red;" class="error"><?php echo $error ?></div><br><br>

      <a href="index.php" class="account"><strong>login Here &gt;&gt;</strong></a> </p>
     </div></td>
<td width="380" height="100" valign="top" class="tab"><img src="images/y1.jpg" align="left"><img src="images/y2.jpg" align="right">
<div class="blok">Registration<br>
<img src="images/line1.jpg" class="line" width="300" height="2"><br>
<H2 style="display:inline;">REGISTRATION STEP 1</H2>
<H2 style="display:inline;">&nbsp;</H2>
<BR>
<BR>
Setting up an account is fast and simple. </div></td>
  </tr>
</table>
	</td>
  </tr>
  <tr>
    <td width="1000" height="53" valign="top" class="bottom"><img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
<div class="copyright"></div>
<div class="menu_bot">
<a href="index.php" class="menu_bottom">Home page</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="products.php" class="menu_bottom">Products</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-2.2.html" class="menu_bottom">Subscibes</a> &nbsp; &nbsp; | &nbsp; &nbsp;
<a href="aboutus.php" class="menu_bottom">About us</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="contactus.php" class="menu_bottom">Contact us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="sitemap.php" class="menu_bottom">Site Map </a>
</div>	
	</td>
  </tr>
  <tr>
    <td width="1000" height="20" valign="top"></td>
  </tr>
</table>
</body>
</html>