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
<h2><a href="#"><center>UPDATE STUDENT INFORMATION</center></a></h2>
<center>
<div class="articles">
<?php
		 $fses=$_GET["ses"];
include('..\connection.php');
$result=mysql_query("SELECT * FROM `student` WHERE `ses`='$fses'");
echo "<table border='1' width='80%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#fff'>Student's Name</font></th>
	<th><font color='#fff'>Email</font></th>
	<th><font color='#fff'>Image</font></th>
	<th><font color='#fff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
 	{
    echo "<tr> ";
	echo "<td><center>{$row['name']}</center></td>";
	echo "<td><center>{$row['email']}</center></td>";	
	echo "<td><center><img src=../Student/upload/$row[id].jpg height='30' width='30' ></img></center></td>";
	echo "<td><center><a href=UpdateStudentInformation.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteStudentInformation.php?id=$row[index]><input type='submit' name='Submit' value='Delete'/></a></center></td>";
	echo "</tr>";
	
	}
	echo "</table>";
	mysql_close($con);
	
	?>	
				<center>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteStudentInformation.php">Back</a></u></h3></td>
</tr>
</table>
</center>
		
	</div>
</center>