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

<h2><a href="#"><center>Alumni Information</center></a></h2>
<div class="articles">
<?php
include('..\connection.php');
if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result=mysql_query("SELECT * FROM `alumni_b` WHERE `index`='$fid'");
echo "<table border='1'>";

while($row=mysql_fetch_array($result))
	{
	echo "<tr> ";
	echo "<img height='200' width='200' src=upload/$row[reg_no].jpg></img><br /><br />";
    echo "</tr>";
	}
		echo "</table>";
}
echo "<table width='60%' height='200%' border='1'>";
echo  " <tr bgcolor='#336699'>".
      "<td><font color='#fff'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Basic Information</font></td>".
	  "</tr>";

if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result=mysql_query("SELECT * FROM `alumni_b` WHERE `index`='$fid'");
while($row=mysql_fetch_array($result))
	{
echo <<<EOT
	
	<table width="60%" height="200%" border="1">
	
    <tr bgcolor="white">
    <td>Full Name  </td>
	<td>{$row['fu_name']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Father's Name  </td>
	<td>{$row['fname']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Mother's Name  </td>
	<td>{$row['mname']}</td>
  </tr>
  <tr bgcolor="lightgrey">
    <td>Date of Birth  </td>
	<td>{$row['day']}-{$row['mon']}-{$row['year']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Reg. No : </td>
	<td>{$row['reg_no']}</td>
  </tr>
  
  <tr bgcolor="lightgrey">
    <td>Session : </td>
	<td>{$row['ses']}</td>
  </tr>
  <tr bgcolor="white">
    <td>Country of Residence:</td>
	<td>{$row['con']}</td>
  </tr>
  
</table>
EOT;
  }
		
	}
echo "<table width='60%' height='200%' border='1'>";
echo  " <tr bgcolor='#336699'>".
      "<td><font color='#fff'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education</font></td>".
	  "</tr>";

if(isset($_GET['id']))
{
$fid = $_GET['id'];
$result=mysql_query("SELECT * FROM `alumni_e` WHERE `index`='$fid'");
while($row=mysql_fetch_array($result))
	{
echo <<<EOT
	
	<table width="60%" height="200%" border="1">
	
    <tr bgcolor="white">
    <td>School</td>
	<td>{$row['sch']}</td>
    </tr>
  
  <tr bgcolor="lightgrey">
    <td>Passing Year</td>
	<td>{$row['spas_y']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>College</td>
	<td>{$row['coll']}</td>
  </tr>
  <tr bgcolor="lightgrey">
    <td>Passing Year</td>
	<td>{$row['cpas_y']}</td>
  </tr>
  
  <tr bgcolor="white">
    <td>Highest Degree</td>
	<td>{$row['high_d']}</td>
  </tr>
  
  <tr bgcolor="lightgrey">
    <td>Name of University</td>
	<td>{$row['n-uni']}</td>
	
   <tr bgcolor="white">
    <td>Passing Year</td>
	<td>{$row['pass_y']}</td>
  </tr>
  </tr
</table>
EOT;
  }
	}

	mysql_close($con);
	
	?>	 
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p><br/>
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
<li><a href="../Major&RecentDisaster.php">Major & Recent Disaster</a></li>
<li><a href="../AdmissionProcess.php">Admission Process</a></li>
<li><a href="../Alumni.php" class="active">Alumni</a></li> 
</ul>
<h2><center>News update</center></h2>
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

<h2><center>Academic Calender</center></h2>
<ul>
<p>
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
	  //$myCalendar->autoSubmit(true, "", "test.php");
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?>
                </tr>
              </table>
              
	  
<p>
</ul>

</div>


<div style="clear: both;"> </div>

</div>


</div>


</body>
</html> 