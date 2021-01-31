<?php
require_once('../classes/tc_calendar.php');
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
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link href="../calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../calendar.js"></script>
<link href="../calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../calendar.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
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
</style>
</head>
<body>
<div id="wrap">

<div id="header">
</div>
<div id="menu">
<ul id="nav">
<li><a href="../index.php">Home</a>
 <ul>
 <li><a href="../index.php">DESDM Home</a></li>
 </ul><div class="clear"></div></li>
 <li><a href="../Administration.php">Administration</a> 
 <ul>
 <li><a href="../DeansMessage.php">Dean's Message</a></li>
 </ul><div class="clear"></div></li>
<li><a href="../AboutDepartment.php">About Department</a></li>
<li><a href="../Facilities.php">Facilities</a>
<ul>
 <li>
<a href="../Facilities/DeansMeritList&Scholarship.php">Deans Merit List & Scholarship</a>
 </li>
  <li>
<a href="../Facilities/GeneralStipend.php">General Stipend</a>
 </li>
  <li>
 <a href="../Facilities/FieldVisit.php">Field Visit</a>
</li>
  <li>
<a href="../Facilities/Physical Training.php">Physical Training</a>
</li>
</ul>
 <div class="clear"></div>
</li>

<li><a href="../Gallery.php">Gallery</a></li>
<li><a href="../AdminLogin.php">Admin Login</a></li>
<li><a href="../Contact.php">Contact</a></li>
</ul>
</div>
<div id="menubottom"></div>
<div id="content">
<marquee  direction=horizontal height=10 scrollamount=3>
<?php
include('..\connection.php');
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

<h2><a href="#"><center>MAJOR & RECENT DISASTER</center></a></h2>
<div class="articles">
<?php
include('..\connection.php');
if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result = mysql_query("SELECT * FROM `disaster` where `index`='$fid' "); 
while($row1=mysql_fetch_array($result))
{
$ftitle=$row1['title'];
$fdate=$row1['date'];
$fsort_dis=$row1['sort_dis'];
$fsrt_ti=$row1['srt_ti'];	
echo " <center><font color='#663366' size='+1' face='Georgia'><h1> $ftitle</h1></font> </center><br/>";
echo " Date: $fdate <br/>";
echo " <p>$fsort_dis</p>";
}
}
mysql_close($con);
?> 
<br /><br />
<div id="slideshow">
<?php
include('..\connection.php');
if(isset($_GET['srt_ti']))
{
$fsrt_ti= $_GET['srt_ti'];
$result = mysql_query("SELECT *FROM `disaster`  where `srt_ti` LiKE '$fsrt_ti'"); 
while($row1=mysql_fetch_array($result))
{
echo"<img src='upload/$row1[srt_ti]_pic1.jpg' width='567' height='327'>";
echo"<img src='upload/$row1[srt_ti]_pic2.jpg' width='567' height='327'>";
echo"<img src='upload/$row1[srt_ti]_pic3.jpg' width='567' height='327'>";
echo"<img src='upload/$row1[srt_ti]_pic4.jpg' width='567' height='327'>";
echo"<img src='upload/$row1[srt_ti]_pic5.jpg' width='567' height='327'>";
}

}
?> 
	</div>
	<br />
<?php
include('..\connection.php');
if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result = mysql_query("SELECT *FROM `disaster` where `index`='$fid' "); 
while($row1=mysql_fetch_array($result))
{
$fdiscrip=$row1['discrip'];
echo " <p width='567' height='327'>$fdiscrip</p>";
}
}
mysql_close($con);
?> 


</div>
</div>

<div class="left"> 

<h2><center>Categories</center></h2>
<ul class="glossymenu" id="verticalmenu" >
<li><a href="../Faculty.php">Faculty</a></li> 
<li><a href="../CurrentStudents.php">Current Students</a></li> 
<li><a href="../CourseLayout.php">Course Layout</a></li>
<li><a href="../ClassNotes.php">Class Notes</a></li>
<li><a href="../Laboratories.php">Laboratories</a></li>
<li><a href="../NoticeBoard.php">Notice Board</a></li>
<li><a href="../Research&Journals.php">Research & Journals</a></li>
<li><a href="../Major&RecentDisaster.php" class="active">Major & Recent Disaster</a>
<ul>
<div class="foot"></div>
<li><a href="DisasterWorldBangladesh.php?status=world">World as Whole</a></li>
<li><a href="DisasterWorldBangladesh.php?status=Bangladesh">Bangladesh</a></li>
<div class="foot"></div>
</ul>
</li>
<li><a href="../AdmissionProcess.php">Admission Process</a></li>
<li><a href="../Alumni.php">Alumni</a></li> 
</ul>

<h2><center>News update<center></h2>
<ul>

<marquee direction=up height=100 scrollamount=2>
<?php
include('..\connection.php');
$result = mysql_query("SELECT * FROM un_edit"); 
while($row1=mysql_fetch_array($result))
{
$path1=$row1['txt'];
echo "<p><img src='../upload/news_up_pic1.jpg' width='16' height='16'>$path1</p>";
}
mysql_close($con);

?> 
</marquee>

</ul>
<h2><center>Calender</center></h2>
<ul>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
 <form name="form1" method="post" action="">
    <table border="0" cellspacing="0" cellpadding="2">
     <tr>
       <td valign="top"><?php
	     $myCalendar = new tc_calendar("date2");
	     $myCalendar->setIcon("images/iconCalendar.gif");
	     $myCalendar->setDate(date('d'), date('m'), date('Y'));
	     $myCalendar->setPath("./");
	     $myCalendar->setYearInterval(1970, 2090);
	     $myCalendar->dateAllow('2008-05-13', '2050-25-01', false);
	     $myCalendar->startMonday(true);
	     $myCalendar->writeScript();
	  ?>
      </tr>
    </table>
</ul>

</div>
</div>
</div>
</body>
</html>