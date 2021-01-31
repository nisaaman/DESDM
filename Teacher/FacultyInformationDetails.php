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
.style4 {
	color: #003300;
	font-family: "Courier New", Courier, monospace;
}
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

<h2><a href="#"><center>FACULTY INFORMATION DETAILS</center></a></h2>
<div class="articles">
<?php
include('..\connection.php');
if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result=mysql_query("SELECT * FROM `teacher` WHERE `index`='$fid'");
echo "<table border='0'>";

while($row=mysql_fetch_array($result))
	{
	echo "<tr> ";
	echo "<img src=upload/$row[email]$row[day].jpg height='200' width='200' ></img><br /><br />";
    echo "</tr>";
	}
		echo "</table>";
}
echo  "<table width='100%' height='200%' border='2'>";
echo  " <tr bgcolor='#99CCCC'>".
      "<td><center><font color='#fff' size='+1'>Basic Information</font></center></td>".
	  "</tr>";
echo "</table>";
if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result=mysql_query("SELECT * FROM `teacher` WHERE `index`='$fid'");
while($row=mysql_fetch_array($result))
	{
echo <<<EOT
	<table width="100%" height="200%" border="0">
	<tr bgcolor="white">
    <td>Name:</td>
	<td>{$row['name']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Father's Name:</td>
	<td>{$row['fname']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Mother's Name:</td>
	<td>{$row['mname']}</td>
  </tr>
  
  <tr bgcolor="lightgrey">
    <td>Designation:</td>
	<td>{$row['desig']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Faculty:</td>
	<td>{$row['fac']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Department:</td>
	<td>{$row['dep']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Mob. No.: </td>
	<td>{$row['mob']}</td>
  </tr>
  
  <tr bgcolor="lightgrey">
    <td>E-mail: </td>
	<td>{$row['email']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Nationality: </td>
	<td>{$row['nation']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Religion:</td>
	<td>{$row['region']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Present Address:</td>
	<td>{$row['pradd']}</td>
  </tr>
  
  <tr bgcolor="lightgrey">
    <td>Permanent Address:</td>
	<td>{$row['padd']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Sex:</td>
	<td>{$row['sex']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Date Of Birthday:</td>
	<td>{$row['day']}-{$row['mon']}-{$row['year']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Joining Date:</td>
	<td>{$row['jday']}-{$row['jmon']}-{$row['jyear']}</td>
  </tr>
  
</table>
EOT;
  }
		
	}
	mysql_close($con);
	
	?>	

     	 
	</div>

<div class="articles">

</div>
<div class="footer">

</div>
</div>

<div class="left"> 

<h2><center>Categories</center></h2>
<ul class="glossymenu" id="verticalmenu" >
<li><a href="../Faculty.php" class="active">Faculty</a>
<ul>
<div class="foot"></div>
<li><a href="Professors.php">Professors</a></li>
<li><a href="AssociateProfessor.php" >Associate Professor</a></li>
<li><a href="AssistantProfessor.php">Assistant Professor</a></li>
<li><a href="Lecturer.php">Lecturer</a></li>
<div class="foot"></div>
</ul> 
</li>
<li><a href="../CurrentStudents.php">Current Students</a></li> 
<li><a href="../CourseLayout.php">Course Layout</a></li>
<li><a href="../ClassNotes.php">Class Notes</a></li>
<li><a href="../Laboratories.php">Laboratories</a></li>
<li><a href="../NoticeBoard.php">Notice Board</a></li>
<li><a href="../Research&Journals.php">Research & Journals</a></li>
<li><a href="../Major&RecentDisaster.php">Major & Recent Disaster</a></li>
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

<div style="clear: both;"> </div>

</div>

</div>


</body>
</html>
	 