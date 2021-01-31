<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<title>DESDM</title>
<h2><a href="#"><center>UPDATE/DELETE MAJOR & RECENT DISASTER</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>UPDATE & DELETE MAJOR & RECENT DISASTER</b></font></marquee></p><br/><br/>

<center>

<div class="articles">
<?
include('..\connection.php');
if(isset($_GET['status']))
{
$fstatus = $_GET['status'];
print "<table border=\"1\" align=center width='50%' cellspacing='5'>";
$result=mysql_query("SELECT * FROM `disaster` WHERE `status` LIKE '$fstatus' order by `date` DESC");
echo "<tr bgcolor='#336699'>
    <th><font color='#ffffff'>Disaster Name</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
	{
	echo "<tr><td><font color='#663366' size='+1' face='Georgia'>$row[title]</font></td>"	;
    echo "<td><a href=UpdateRecentDisasterInformation.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteRecentDisasterInformation.php?id=$row[index]><input type='submit' name='Submit' value='Delete'/></a></td></tr>";
    }
	echo "</table>";
	}
	?>
	
</div>
</center>
