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

<h2><a href="#"><center>Alumni Edit Information</center></a></h2>
<div class="articles">
 <?
if (isset($_POST['index']))
{
include('..\connection.php');
$alumni_c="alumni_c";
$alumni_a="alumni_a";
$index=$_POST['index'];
$mail_a=$_POST['mail_a'];
$per_add=$_POST['per_add'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mob=$_POST['mob'];
$web=$_POST['web'];
$pre_nam=$_POST['pre_nam'];
$pre_w_p=$_POST['pre_w_p'];
$marid=$_POST['marid'];
$spos=$_POST['spos'];

	  $sql = "UPDATE $alumni_c SET `mail_a`='$mail_a',`per_add`='$per_add',`email`='$email',`phone`='$phone',`mob`='$mob',`web`='$web' where `index`='$index'";    
      $sql1 = "UPDATE $alumni_a SET `pre_nam`='$pre_nam',`pre_w_p`='$pre_w_p',`marid`='$marid',`spos`='$spos' where `index`='$index'";  
	  $s=mysql_query($sql);
	  $s1=mysql_query($sql1);
      if($s && $s1)
	  {
		  print "Update success";
	  }
}
?>
<?
if(isset($_GET['id'])){
	  $id=$_GET['id'];
include('..\connection.php');
$alumni_c="alumni_c";
$alumni_a="alumni_a";
$alumni_b="alumni_b";
$sql = "SELECT * FROM  $alumni_c where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	
?>
	<form action="<? $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form2" id="form2">
        <input type="hidden" name="index" value="<? print "$a[index]";?>"/>
		<table width="60%" height="200%" border="0" cellspacing="10">
	<td class="label">Mailing Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="mail_a" name="mail_a" type="text" size="30" value="<? print "$a[mail_a]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Permanent Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="per_add" name="per_add" type="text"size="30" value="<? print "$a[per_add]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">E-mail:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="email" name="email" type="text" size="30" value="<? print "$a[email]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Phone:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="phone" name="phone" type="text" size="30" value="<? print "$a[phone]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Mobile:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="mob" name="mob" type="text" size="30" value="<? print "$a[mob]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Website:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="web" name="web" type="text" size="30" value="<? print "$a[web]";?>"/>
          </div></td>
        </tr>
		
	  <?
}
$sql = "SELECT * FROM  $alumni_a where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	
?>
	<td class="label">Present Designation with Name of Organization :  </td>
          <td><div class="field_container">
            <input class="inputtext" id="pre_nam" name="pre_nam" type="text" size="30" value="<? print "$a[pre_nam]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Present Work Place with Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="pre_w_p" name="pre_w_p" type="text" size="30" value="<? print "$a[pre_w_p]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Maried Status  </td>
          <td><div class="field_container">
            <input class="inputtext" id="marid" name="marid" type="text" size="30" value="<? print "$a[marid]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Name of Spouse if Maried :  </td>
          <td><div class="field_container">
            <input class="inputtext" id="spos" name="spos" type="text" size="30" value="<? print "$a[spos]";?>"/>
          </div></td>
        </tr>
		<tr>
		 <td class="label"></td>
		      <td><div class="field_container">
          <input type="submit" name="Submit2" value="Update" />
		  </div></td>
		  </tr>
		  </table>
      </form>
	  <?
}
$sql = "SELECT * FROM  $alumni_b where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
  echo "<p><h3><u><a href='UpdateAlumniInformationByAlumni.php?reg_no=$a[reg_no]'>Back</a></u></h3> </p>";

}
?>
	<br/><br/>
	<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p>


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


</ul>

</div>

<div style="clear: both;"> </div>

</div>

</div>


</body>
</html> 

