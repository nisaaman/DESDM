<?php
require_once('classes/tc_calendar.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DESDM</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link href="calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script language="javascript">
dg0 = new Image();dg0.src = "clock_digits/dg0.gif";
dg1 = new Image();dg1.src = "clock_digits/dg1.gif";
dg2 = new Image();dg2.src = "clock_digits/dg2.gif";
dg3 = new Image();dg3.src = "clock_digits/dg3.gif";
dg4 = new Image();dg4.src = "clock_digits/dg4.gif";
dg5 = new Image();dg5.src = "clock_digits/dg5.gif";
dg6 = new Image();dg6.src = "clock_digits/dg6.gif";
dg7 = new Image();dg7.src = "clock_digits/dg7.gif";
dg8 = new Image();dg8.src = "clock_digits/dg8.gif";
dg9 = new Image();dg9.src = "clock_digits/dg9.gif";
dgam= new Image();dgam.src= "clock_digits/dgam.gif";
dgpm= new Image();dgpm.src= "clock_digits/dgpm.gif";
dgc = new Image();dgc.src = "clock_digits/dgc.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours()+100;
mn= d.getMinutes()+100;
se= d.getSeconds()+100;
if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}
tot=''+hr+mn+se;
document.hr1.src = 'clock_digits/dg'+tot.substring(1,2)+'.gif';
document.hr2.src = 'clock_digits/dg'+tot.substring(2,3)+'.gif';
document.mn1.src = 'clock_digits/dg'+tot.substring(4,5)+'.gif';
document.mn2.src = 'clock_digits/dg'+tot.substring(5,6)+'.gif';
document.se1.src = 'clock_digits/dg'+tot.substring(7,8)+'.gif';
document.se2.src = 'clock_digits/dg'+tot.substring(8,9)+'.gif';
document.ampm.src= 'clock_digits/dg'+am_pm+'.gif';}
dotime();

</script>
		<script type="text/javascript">
$(document).ready(function () {	
	
	$('#nav li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);

		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);			
		}
	);
	
});
	</script>
<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
#Layer1 {
	position:absolute;
	width:200px;
	height:93px;
	z-index:1;
	left: 794px;
	top: 356px;
}
</style>
</head>
<body>
<div id="wrap">

<div id="header">
</div>
<div id="menu">
<ul id="nav">
<li><a href="index.php">Home</a>
 <ul>
 <li><a href="index.php">DESDM Home</a></li>
 </ul><div class="clear"></div></li>
 <li><a href="Administration.php">Administration</a> 
 <ul>
 <li><a href="DeansMessage.php">Dean's Message</a></li>
 </ul><div class="clear"></div></li>
<li><a href="AboutDepartment.php">About Department</a></li>
<li><a href="Facilities.php">Facilities</a>
<ul>
 <li>
<a href="Facilities/DeansMeritList&Scholarship.php">Deans Merit List & Scholarship</a>
 </li>
  <li>
<a href="Facilities/GeneralStipend.php">General Stipend</a>
 </li>
  <li>
 <a href="Facilities/FieldVisit.php">Field Visit</a>
</li>
  <li>
<a href="Facilities/PhysicalTraining.php">Physical Training</a>
</li>
</ul>
 <div class="clear"></div>
</li>

<li><a href="Gallery.php">Gallery</a></li>
<li><a href="AdminLogin.php">Admin Login</a></li>
<li><a href="Contact.php">Contact</a></li>
</ul>
</div>
<div id="menubottom"></div>
<div id="content">
<marquee  direction=horizontal height=10 scrollamount=3>
<?php
include('connection.php');
$result = mysql_query("SELECT * FROM nwup"); 
while($row1=mysql_fetch_array($result))
{
$path1=$row1['txt'];
echo "$path1";
}
mysql_close($con);

?> 
</marquee>
<div class="right"> 

<h2><a href="#"><center>ALUMNI</center></a></h2>
<div class="articles">
<font face="Forte, serif, fantasy, Tahoma" size="+3" color="#660066">&nbsp;&nbsp;&nbsp;Welcome to DESDM Alumni Corner</font><br /><br />
<p>DESDM graduates are requested to update their profile and keep their personal information up-to-date in the database. They are required to type their respective<font face="Arial Black, Georgia"> Student No</font>  as <font face="Arial Black, Georgia"> User ID</font> and <font face="Arial Black, Georgia"> Password</font> to update their profile. CGPA earned by a graduate is the password of the graduate concerned for the 1st login.</p><br />
For Example :
<p>
<center><table height="50" border="5" width="30%" cellspasing="15">
<tr><th>Student No.</th>
<th>User ID</th>
</tr>
<tr><td>01510</td><td>01510</td></tr></table>
<table height="50" border="5" width="30%">
<tr><th>CGPA</th><th>Password</th></tr>
<tr><td>3.46</td><td>3.46</td></tr></table></center></p>
<p>	However, there is a provision for change of password after 1st login. After successful login a graduate can modify / update any personal information. Student No. of a graduate may also be searched by using his/her name. The address given below may be contacted for any further query.
</p>
</div>
<div class="articles">
<center><a href="alumni/SearchForAlumniDetails.php"><font color="#660033" size="+2"><u>Search Alumni</u></font></a></center>
<center><img src="images/alumni.jpg" alt="alumni" width="300" height="176" /></center>

</div>
<div class="footer">
	<a href="contact.php">Contact the University</a> | <a href="http://www.pstu.ac.bd/">PSTU Home</a> | <a href="#">Privacy</a> | <a href="#">Accessibility</a>
       
</div>
</div>
<div class="left"> 

<h2><center>Categories </center></h2>
<ul class="glossymenu" id="verticalmenu" >
<li><a href="Faculty.php">Faculty</a></li> 
<li><a href="CurrentStudents.php">Current Students</a></li> 
<li><a href="CourseLayout.php">Course Layout</a></li>
<li><a href="ClassNotes.php">Class Notes</a></li>
<li><a href="Laboratories.php">Laboratories</a></li>
<li><a href="NoticeBoard.php">Notice Board</a></li>
<li><a href="Research&Journals.php">Research & Journals</a></li>
<li><a href="Major&RecentDisaster.php">Major & Recent Disaster</a></li>
<li><a href="AdmissionProcess.php">Admission Process</a></li>
<li><a href="Alumni.php" class="active">Alumni</a>
<ul>
<div class="foot"></div>
<li><a href="alumni/SearchForAlumniDetails.php">Search Alumni</a></li>
<div class="foot"></div>
</ul>
</li> 
</ul>
<h2><font face="Forte, serif, fantasy, Tahoma" size="+1" color="#660066"><center>Log in Directly</center></font></h2>
<div class="footer">
</div>
 <form action="LoginProcess.php" method ="POST" >
<font size="+1" face="Times New Roman, Times, serif">User ID :</font><input type="text" name="reg_no" size="30" /><br /><font size="+1" face="Times New Roman, Times, serif">Password :</font><input type="password" name="cgpa" size="30" /><br /><br /><input type="submit" value="Login" name"login" />

</form>
<h2><center>News update</center></h2>
<ul>

<marquee direction=up height=100 scrollamount=2>
<?php

include('connection.php');
$result = mysql_query("SELECT * FROM un_edit"); 
while($row1=mysql_fetch_array($result))
{
$path1=$row1['txt'];
echo "<p><img src='upload/news_up_pic1.jpg' width='16' height='16'>$path1</p>";
}
mysql_close($con);

?> 
</marquee>

</ul>
<h2><center>Time</center></h2>
<ul>
<table>
<td bgcolor="black" height="45">
<img src="clock_digits/dg8.gif" name="hr1"><img 
src="clock_digits/dg8.gif" name="hr2"><img 
src="clock_digits/dgc.gif" name="c"><img 
src="clock_digits/dg8.gif" name="mn1"><img 
src="clock_digits/dg8.gif" name="mn2"><img 
src="clock_digits/dgc.gif" name="c"><img 
src="clock_digits/dg8.gif" name="se1"><img 
src="clock_digits/dg8.gif" name="se2"><img 
src="clock_digits/dgpm.gif" name="ampm">
</td></table>
</ul>
<div class="footer">
</div>
</div>

<div style="clear: both;"> </div>

</div>

</div>


</body>
</html>
