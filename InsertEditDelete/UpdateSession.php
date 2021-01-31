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
<h2><a href="#"><center>UPDATE SESSION</center></a></h2>
<div class="articles">
<?
include('..\connection.php');
print "<table border=\"1\" align=center width='50%' cellspacing='2'>";
$result=mysql_query("SELECT * FROM  session order by `ses` ASC");
echo "<tr bgcolor='#336699'>
	 <th><font color='#fff'>Session</font></th>
	 <th><font color='#fff'>Status</font></th>
	 <th><font color='#fff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
	{
     $path1=$row['ses'];
	 $path2=$row['status'];
	 echo "<tr>";
	 echo "<td><center>$path1</center></td>";
	 echo "<td><center>$path2</center></td>";
     echo "<td><center><a href=UpdatedFromSession.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a></center></td></tr>";
    }
	echo "</table>";
	?>
		<center>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&Delete.php">Back</a></u></h3></td>
</tr>
</table>
</center>
</div>

