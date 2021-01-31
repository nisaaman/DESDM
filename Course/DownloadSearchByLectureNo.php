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
<link rel="stylesheet" type="text/css" media="all" href="../js/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="../js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
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

<h2><a href="#"><center>Search with any of the folowing</center></a></h2>
<div class="articles">



<table width="100%"  border="1">
    <tr>
	  <form action="DownloadSearchByLectureNo.php" method ="post">
      <th scope="row" width="50%">1.&nbsp;&nbsp;Lecture No.:</th>
      <td width="50%"><input type="text" name="lec_no" size="50%" /></td>
      <td width="50%"><input type="submit" value="Search" name"search" size="30"/></td>
	  </form>
    </tr>
    <tr>
	  <form id="form1" name="form1" method="post" action="DownloadSearchingByCourseCode.php">
      <th scope="row">2.&nbsp;&nbsp;Course Code</th>
      <td width="50%"> 
<?php
	   include('..\connection.php');
	   print "<select name='materialsselect'>";
	   $sql = "SELECT * FROM course order by semester ASC";
	   $s=mysql_query($sql);
	   while($a=mysql_fetch_array($s))
							{
							   print "<option>$a[code]</option>";
							
							}
							
                         print"</select>";
						 ?></td>
      <td width="50%"><input type="submit" value="Search" name"search"/></td>
	  </form>
    </tr>
    <tr> 
	 <form action="DownloadSearchByDate.php" method ="post">
       <th scope="row">3.&nbsp;&nbsp;Date</th>
      <td width="50%"><input type="text" name="date" size="50%" id="inputField"/></td>
      <td width="50%"><input type="submit" value="Search" name"search"/></td>
	  </form>
    </tr>
  </table>

  
</div>
<div class="articles">
<font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">Search</font>
<?php
		 $lec_no=$_POST["lec_no"];
include('..\connection.php');

$result=mysql_query("SELECT * FROM lecture_table WHERE lec_no LIKE '$lec_no'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#fff'>Lecture No.</font></th>
	<th><font color='#fff'>Date</font></th>
	<th><font color='#fff'>Course Code</font></th>
	<th><font color='#fff'>File Name</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
 	{
	echo "<tr> ";
	echo "<td>{$row['lec_no']}</td>";
	echo "<td>{$row['date']}</td>";	
	echo "<td>{$row['name']}</td>";
	echo "<td><a href='upload/$row[pdf].pdf' alt=\"Clic Here\" target=\"_blank\"><blink>{$row['pdf']}</blink></a>";
    echo "<a href='upload/$row[ppt].ppt' alt=\"Clic Here\" target=\"_blank\"><blink>{$row['ppt']}</blink></a>";
    echo "<a href='upload/$row[wrd].docx' alt=\"Clic Here\" target=\"_blank\"><blink>{$row['wrd']}</blink></a>";
    echo "<a href='upload/$row[img].jpg' alt=\"Clic Here\" target=\"_blank\"><blink>{$row['img']}</blink></a></td>";	
    echo "</tr>";
	}
	echo "</table>";
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
<li><a href="../ClassNotes.php" >Class Notes</a>
<ul>
<div class="foot"></div>
<li><a href="DownloadClassNote.php" >Download Class Notes</a>
<ul>
<div class="foot"></div>
<li><a href="DownloadUnderGradutesClassNotes.php">Under Graduates</a></li>
<li><a href="DownloadPostGraduatesClassNotes.php">Post Graduates</a></li>
<li><a href="DownloadDiplomaClassNotes.php">Diploma</a></li>
<li><a href="ShowAllDownloadLink.php">Show All Download Link</a></li>
<li><a href="SearchAllDownloadLink.php" class="active">Search All Download Link</a></li>
<div class="foot"></div>
</ul>
</li>
</ul>
</li>
<li><a href="../Laboratories.php">Laboratories</a></li>
<li><a href="../NoticeBoard.php">Notice Board</a></li>
<li><a href="../Research&Journals.php">Research & Journals</a></li>
<li><a href="../Major&RecentDisaster.php">Major & Recent Disaster</a></li>
<li><a href="../AdmissionProcess.php">Admission Process</a></li>
<li><a href="../Alumni.php">Alumni</a></li> 
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

<div class="footer">
</div>
<div class="footer">
</div>
</div>

<div style="clear: both;"> </div>

</div>

</div>


</body>
</html>
