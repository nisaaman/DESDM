<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<title>DESDM</title>
<script type="text/javascript" src="..js/jquery.min.js"></script>
<script type="text/javascript" src="..js/jquery.cycle.all.latest.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="js/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
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
	<center>
<h2><a href="#"><center>COURSE LAYOUT</center></a></h2>

<div class="articles">
<?php
	     $fsemester=$_GET["semester"];
	 

if($fsemester=='1st')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;1</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='2nd')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;2</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='3rd')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;1</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
      </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='4th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;2</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='5th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;1</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='6th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;2</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='7th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;1</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='8th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;2</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
if($fsemester=='9th')	
{
echo"<font face='Forte, serif, fantasy, Tahoma' size='+2' color='#660066'>LEVEL&nbsp;&nbsp;5 &nbsp;&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;1</font><br /><br />";
include('..\connection.php');
$result=mysql_query("SELECT * FROM `course` where `semester`='$fsemester'");
echo "<table border='1' width='100%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Course Code</font></th>
	<th><font color='#ffffff'>Course Title</font></th>
	<th><font color='#ffffff'>Credit Hour</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";

while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td>{$row['code']}</td>";
	echo "<td>{$row['title']}</td>";	
	echo "<td>{$row['hour']}</td>";
	echo "<td><a href=UpdateCourseInformation.php?id=$row[id]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteCourseInformation.php.php?id=$row[id]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	
	mysql_close($con);
	}
	?>	


</div>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteCourseInformation.php">Back</a></u></h3></td>
</tr>
</table>
</center>
