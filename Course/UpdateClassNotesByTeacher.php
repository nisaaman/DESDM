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

<h2><a href="#"><center>UPDATE CLASS NOTES</center></a></h2>
<div class="articles">
 <?
if (isset($_POST['index']))
{
$lecture_table="lecture_table";
$index=$_POST['index'];
$lec_no=$_POST['lec_no'];
$name=$_POST['name'];
$date=$_POST['date'];
$pdf=$_POST["pdf"];
$ppt=$_POST["ppt"];
$wrd=$_POST["wrd"];
$img=$_POST["img"];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "upload\\$pdf".".pdf"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload1'])) {
	$file_name = $_FILES['fupload1']['name'];
	$file_type = $_FILES['fupload1']['type'];
if(copy($_FILES['fupload1']['tmp_name'], "upload\\$ppt".".ppt"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload2'])) {
	$file_name = $_FILES['fupload2']['name'];
	$file_type = $_FILES['fupload2']['type'];
if(copy($_FILES['fupload2']['tmp_name'], "upload\\$wrd".".docx"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload3'])) {
	$file_name = $_FILES['fupload3']['name'];
	$file_type = $_FILES['fupload3']['type'];
if(copy($_FILES['fupload3']['tmp_name'], "upload\\$img".".jpg"))
		print "";
		else
		print "";
	}

include('..\connection.php');
	  
	  $sql = "UPDATE $lecture_table SET `lec_no`='$lec_no',`date`='$date',`name`='$name',`pdf`='$pdf', `ppt`='$ppt',`wrd`='$wrd',`img`='$img' where `index`='$index' ";
      $check=mysql_query($sql);
         if($check)
         {
         print "Update Success";
         }
	}
?>
<?
if(isset($_GET['id'])){
	  $id=$_GET['id'];
include('..\connection.php');
$sql = "SELECT * FROM  `lecture_table` where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	
?> 
<form action="<? $_SERVER['PHP_SELF'];?>"  method="post"  enctype="multipart/form-data"  name="form2"  id="form2">
    <input type="hidden" name="index" value="<? print "$a[index]";?>"/> 
<center>
<p> <h1><u><font color="#663366" size="+2">Update Upload Lecture</font></u></h1></p><br />
<table border="0" cellspacing="30">
     <tr><td>
	  Lecture No.: </td><td<input type='text'  name="lec_no" value="<? print "$a[lec_no]";?>"/>
	  </td></tr>
  <tr><td>
  <Label for="file">PDF File:</label> 
  </td>
	 <td>
    <input type="file" name="fupload" id="fupload">
      </td>
	  </tr>
	    <tr><td>
        <Label for="file">PowerPoint File:</label> 
       </td>
	    <td><input type="file" name="fupload1" id="fupload1">
      </td>
	  </tr>
	  	  <tr><td>
         <Label for="file">Word File:</label> 
        </td>
	   <td>
    <input type="file" name="fupload2" id="fupload2">
      </td>
	  </tr>
	  	  <tr><td>
         <Label for="file">Image(.jpg) :</label> 
        </td>
	   <td>
    <input type="file" name="fupload3" id="fupload3">
      </td>
	  </tr>
	  <tr><td>
	  PDF File Name: </td><td<input type='text'  name="pdf" value="<? print "$a[pdf]";?>"/>
	  </td></tr>
	    <tr><td>
	  PowerPoint File Name: </td><td<input type='text'  name="ppt" value="<? print "$a[ppt]";?>"/>
	  </td></tr>
	   <tr><td>
	  Word File Name: </td><td<input type='text'  name="wrd" value="<? print "$a[wrd]";?>"/>
	  </td></tr>
	   <tr><td>
	  Image File Name: </td><td<input type='text'  name="img" value="<? print "$a[img]";?>"/>
	  </td></tr>
	   <tr><td>
	  Date: </td><td><input type='text'  name="date" id="inputField" value="<? print "$a[date]";?>" />
	</td>
	  </tr>
	   <tr><td>
	  Course Code:</td><td><input type='varchar'   name="name"  value="<? print "$a[name]";?>"/>
	  </td>
	  </tr>
	   <tr><td></td><td>
      <input type="submit" name="submit" value="Upload Now" />
	 </td>
	  </tr>
	  </table>
	  <p> <h3><u><a href="ModifyClassNoteByTeacher.php?code=<? print "$a[name]";?>">Back</a></u></h3> </p>
	  </center>
</form>

<?
}
}
?>
</div>

<div class="articles"> <center>
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p></td><td> </center>
</div>

</div>

<div class="left"> 

<h2><center>Categories</center></h2>
<ul class="glossymenu" id="verticalmenu" >
<li><a href="../Faculty.php">Faculty</a></li> 
<li><a href="../CurrentStudents.php">Current Students</a></li> 
<li><a href="../CourseLayout.php" >Course Layout</a></li>
<li><a href="../ClassNotes.php" >Class Notes</a>
<ul>
<div class="foot"></div>
<li><a href="UploadClassNote.php">Upload Class Notes</a>
<ul>
<div class="foot"></div>
<li><a href="UploadUnderGraduatesClassNotes.php" class="active">Under Graduates</a></li>
<li><a href="UploadPostGraduatesClassNotes.php">Post Graduates</a></li>
<li><a href="UploadDiplomaClassNotes.php">Diploma</a></li>
</ul>
<div class="foot"></div>
</li>
<li><a href="DownloadClassNote.php">Download Class Notes</a></li>
<div class="foot"></div>
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
	 </form>
</ul>

</div>

<div style="clear: both;"> </div>

</div>

</div>


</body>
</html>
