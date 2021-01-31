<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<title>DESDM</title>
<h2><a href="#"><center>CURRENT STUDENT INFORMATION UPDATE</center></a></h2>
<p><marquee><font color="#9966CC" size="+2" face="Forte, serif, fantasy, Tahoma"><b>UPDATE & DELETE STUDENT INFORMATION</b></font></marquee></p><br />
<center>
<div class="articles">
<?php   
							include('..\connection.php');
							
							
							$sql = "SELECT * FROM  session WHERE status LIKE 'Student' order by ses DESC";
							$s=mysql_query($sql);
							print "<font color='#996666' size='+2' face='Forte, serif, fantasy, Tahoma'>Session :</font><br><br>";
							print "<table border=\"0\" align=center> ";
							while($a=mysql_fetch_array($s))
							{
							   print " <tr><td><img src='../images/grey_caret.gif'><a href ='Update&DeleteFromStudentInformation.php?ses=$a[ses]'>$a[ses]</a></img></td></tr>";
							
							}
							print "</table>";
						?>
</div>
</center>
				<center>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&Delete.php">Back</a></u></h3></td>
</tr>
</table>
</center>
