
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","login");
$error="";
if(isset($_POST['login'])){
	if(empty($_POST['uname'])||empty($_POST['pwd'])){
		$error="Both fields required";
	}
	else{
		$username=$_POST['uname'];
		$password=$_POST['pwd'];

		$sql="SELECT * FROM signup WHERE Username='".$username."' AND Password='".$password."' ";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			header("location:login.php");
 			
		}
			else{
				$error="Incorrect username or password";
			
			}

	}

}
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>NewsFlash - Home Page</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
<style type="text/css">
<!--
.style9 {color: #0033FF}
.style10 {color: #D4D0C8}
.style11 {color: #000000}
.style13 {color: #003399}
.style16 {font-size: 12px}
.style17 {
	font-size: 14px;
	color: #003399; 
}
.error{color:red;}
.style18 {color: #000066}
.style19 {color: #0033CC}
.error{font-size:20px; }
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
<a href="aboutus.php" class="menu">About Us</a><img src="images/line_menu.jpg" align="left">
<a href="contactus.php" class="menu">Contact Us</a><img src="images/line_menu.jpg" align="left">
<a href="sitemap.php" class="menu">Site Map</a></div></td>
  </tr>
  <tr>
    <td width="1000" height="6" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="280" valign="top" class="header"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/pictures/cooltext512223740.png" width="341" height="133"></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="1000" height="15" valign="top"></td>
  </tr>
  <tr>
    <td width="1000" height="100" valign="top"><table width="1000" height="100" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="340" height="100" valign="top"><div class="blok">
          <p><span class="name style18">WELCOME to NewsFlash!</span><br>
              <img src="images/line.jpg" class="line" width="620" height="2"><br>
              <img src="images/im01.jpg" class="pictures"><br>
            NewsFlash is one of the leading agencies in Sri Lanka which provides daily news updates.NewsFlash  produces specialty publications, online interactive content, magazines and provide an easy way to read news papers. <br>
            <img src="images/read.gif" align="absmiddle" class="read_im"><a href="index-2.html" class="read"><strong>read more</strong></a></p>
          <p>&nbsp;</p>
        </div>
          <table width="658" height="306" border="0" cellpadding="3">
            <tr>
              <td width="310" height="27"><span class="style13 style16 blok"><strong>Subscription services</strong></span><span class="name style11"><img src="images/line1.jpg" class="line" width="300" height="2"> </span><br>              </td>
              <td width="324"><span class="style13 blok"><strong>NewsFlash publications </strong></span><br>
                  <img src="images/line1.jpg" class="line" width="300" height="2"></td>
            </tr>
            <tr>
              <td height="269"><p>Managing your account online is fast and simple. In a few steps you&rsquo;re ready to take full advantage of these subscription services: </p>
                  <ul>
                    <li>Make a payment</li>
                    <li>Start a new subscription</li>
                    <li>Report delivery problems</li>
                  </ul>
                <p><span class="style9">Register Today </span><img src="images/arrow.jpg" width="25" height="15"> <a href="newsubscription.html"><img src="images/newspaper.gif" width="108" height="91"></a></p></td>
              <td><p>Top stories about the latest news events and the latest updates of the NewsFlash agency...... </p>
                  <p><a href="index-1.html"><img src="images/excl_zeusbox_aprbatch_17.jpg" width="166" height="188" border="0"></a></p></td>
            </tr>
          </table>          <span class="style10"><strong><img src="images/y1.jpg" align="left"><img src="images/y2.jpg" align="right">
            </strong>
          </span></td>
        <td width="660" height="50" valign="top" class="tab"><div class="blok">
      
          <div class="blok"><br>
              
                <label><span class="blok style17"><strong>User Login</strong></span><img src="images/line1.jpg" class="line" width="300" height="2"> </label><br>
                <br>
                <form action="index.php" method="POST" name="form1" class="style11">
                
                  User Name:
                  <input type="text" name="uname" >
               
                <br>
                Password &nbsp;:
                <input type="password" name="pwd" >                
                
                                                        <label>
                                                        <input type="submit" name="login"     value="Login">
                                                        </label>
              </form>
              <br><br>
              <div style="color:red;" class="error"><?php echo $error ?></div>
           
               

              <p>New to NewsFlash? It's free and easy.<br>
                  <a href="signup.php" class="account style19"><strong>Signup Here &gt;&gt;</strong></a> </p>
              <p><img src="images/line1.jpg" class="line" width="300" height="2"></p>
          </div>
          <table width="330" border="0" cellpadding="3">
            <tr>
              <td><span class="style13 style16 blok"><strong>Best Services</strong></span><br>
                  <img src="images/line.jpg" class="line" width="290" height="2"><br>
                  <ul class="li">
                    <li><a href="index-1.2.html" class="read">Provide Magazines </a></li>
                    <li><a href="index-9.html" class="read">Online payment services</a></li>
                    <li><a href="index-AC Summary.html" class="read">Latest publications</a></li>
                    <!--li><a href="#" class="read">Advertising</a></li>
                    <li><a href="#" class="read">Submit delivery problems </a></li-->
                    <li><a href="index-8.html" class="read">Setup Vaction holds </a></li>
                  </ul></td>
              <td>&nbsp;</td>
            </t r> 
          </table>
          <p>&nbsp;</p>
        </div>          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="1000" height="53" valign="top" class="bottom"><img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
       <img src="images/bot1.jpg" align="left"><img src="images/bot2.jpg" align="right">
<div class="copyright">Copyright &copy; 2019. All rights reserved.<br>Image from BigStockPhoto.com &copy; Hugo de Wolf.</div>
<div class="copyright"></div>
<div class="menu_bot">
<a href="index.php" class="menu_bottom">Home page</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="products.php" class="menu_bottom">Products</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="index-2.2.html" class="menu_bottom">Subscibes</a> &nbsp; &nbsp; | &nbsp; &nbsp;
<a href="aboutus.php" class="menu_bottom">About us</a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="contactus.php" class="menu_bottom">Contact us </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
<a href="sitemap.php" class="menu_bottom">Site Map </a>
	
	  </td>
  </tr>
  <tr>
    <td width="1000" height="20" valign="top"></td>
  </tr>
</table>
</body>
</html>