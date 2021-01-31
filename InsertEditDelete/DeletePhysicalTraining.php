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
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link href="calendar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script language="javascript" src="calendar.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#slideshow').cycle({
		fx: 'fade' 
	});
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
<ul>
<li><a href="../index.php">Home</a></li>
<li><a href="../adl.php">Admin Login</a></li>
<li><a href="../adminpro.php">Adminssion Process</a></li>
<li><a href="../fl.php">Facilities</a></li>
<li><a href="../gallery.php">Gallery</a></li>
<li><a href="../ad.php">About Department</a></li>
<li><a href="../ct.php">Contact</a></li>
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

<h2><a href="#"><center>DELETE PHYSICAL TRAINING</center></a></h2>
<div class="articles">

<?php   
					include('..\connection.php');
					if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `phy_trn` where `index`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
							<br /><br />
							<p> <h1><u><a href="../fl/up_pt.php">Back</a></u></h1> </p>
</div>

<div class="articles">

</div>

</div>

<div class="left"> 

<h2><center>Categories</center></h2>
<ul>
<li><a href="../fc.php">Faculty</a></li> 
<li><a href="../cs.php">Current Students</a></li> 
<li><a href="../cd.php">Course Layout</a></li>
<li><a href="../cn.php">Class Notes</a></li>
<li><a href="../lab.php">Laboratories</a></li>
<li><a href="../nb.php">Notice Board</a></li>
<li><a href="../rj.php">Research & Journals</a></li>
<li><a href="../mrd.php">Major & Recent Disaster</a></li>
<li><a href="../al.php">Alumni</a></li> 
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
						

