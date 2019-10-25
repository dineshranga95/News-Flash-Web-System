<?php 
$conn=mysqli_connect("localhost","root","","login");
$error="";
if(isset($_POST['submit'])){
    $username=$_POST['uname'];
    $password=$_POST['pwd'];
    $newspaper=$_POST['news'];
    $magazine=$_POST['mag'];
    $address=$_POST['address'];
    $province=$_POST['province'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $hashed_password=sha1($password);
    $sql="INSERT INTO subscribe (Username,Password,Newspaper,Magazine,Address,Province,City,Phone) VALUES('$username','$hashed_password','$newspaper','$magazine','$address','$province','$city','$phone') ";
    mysqli_query($conn,$sql);
    


    $error=" subscribe successfully";
  
  }
  if(isset($_POST['cancel'])){
    $error="cancelled";
  }

 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Subscribes</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<style type="text/css">
  .error{font-size: 20px;}
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
       <p><span class="name">New Subscription </span><br>
             <img src="images/line.jpg" class="line" width="620" height="2"><br>
         </p>
         <form action="index-2.2.php" method="POST">
       <table>
       <tbody>
        <tr>
           <td align="right">*user name : </td>
           <td>
             <label>
               <input type="text" name="uname" style="width:240px;" required>
               </label>           </td>
         </tr>
         <tr>
           <td align="right">*password : </td>
           <td>
             <label>
               <input type="password" name="pwd" style="width:240px;" required>
               </label>           </td>
         </tr>
         <tr>
           <td align="right">*Newspaper </td>
           <td><select name="news" style="width:240px;" required>
              <option>The New York Times</option>
			  <option>Hindustan Times</option>
              <option>USA Today</option>
			  <option>Daily Mail</option>
              <option>Daily Mirror</option>
			  <option>The Economist Times</option>
              <option>The Sun</option>
			  
              <option selected>None</option>
			  
          </select>&nbsp;</td>
         </tr>

         <tr>
           <td align="right">*Magazine</td>
           <td><select name="mag" style="width:240px;" required>
                <option>The Economist</option>
                <option>Brides of Srilanka</option>
                <option>Vogue</option>
                <option>InStyle</option>
                <option>BusinessWeek</option>
                <option>CookingLight</option>
                <option>People</option>
                <option selected>None</option>
              </select>                &nbsp;&nbsp;</td>
         </tr>
         <tr>
           <td align="right">*Address : </td>
           <td><label>
             <textarea name="address" style="width:240px;" required></textarea>
             </label>           </td>
         </tr>
         <tr>
           <td height="32" align="right">*Province : </td>
           <td><label>
             <input type="text" name="province" style="width:240px;" required>
             </label></td>
         </tr>
         <tr>
           <td align="right">*City : </td>
           <td>
             <label>
               <input type="text" name="city" style="width:240px;" required>
               </label>           </td>
         </tr>
         <tr>
           <td align="right">*Phone:</td>
           <td><input type="number"  name="phone" style="width:240px;" required></td>
         </tr>
         <tr>
           
           
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td colspan="2" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
               <label>
               <input type="submit" name="cancel" value="Cancel">
                 </label>
             <input name="submit" type="submit" style="padding:0px 10px;" value="Submit"></td>
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
       </tbody>
     </table>
     </form>
     <div style="color:red;" class="error"><?php echo $error ?></div>
           
               
     </div></td>
<td width="380" height="100" valign="top" class="tab"><img src="images/y1.jpg" align="left"><img src="images/y2.jpg" align="right">
<div class="blok">Registration<br>
<img src="images/line1.jpg" class="line" width="300" height="2"><br>
<H2 style="display:inline;">REGISTRATION STEP 1</H2>
<H2 style="display:inline;">&nbsp;</H2>
Account Information<BR>
<BR>
Setting up an account is fast and simple. In a few steps you&rsquo;re ready to take full advantage of the online subscription services: <BR>
<BR>
<UL>
  <LI>Make payments</LI>
  <LI>Start a new subscription</LI>
  <LI>Setup vacation holds</LI>
  <LI>Access the e-edition (digital newspaper)</LI>
  <LI>Submit delivery problems</LI>
  <LI>Manage your subscriptions online</LI>
</UL>
</div>	</td>
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