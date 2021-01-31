<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<title>DESDM</title>
<h2><a href="#"><center>UPDATE GALLERY PICTURE</center></a></h2>
<center>
<div class="articles">
<?
include('../connection.php');
print "<table border=\"1\" align=center width='80%' cellspacing='2'>";
$result=mysql_query("SELECT * FROM `gallery` order by `date` DESC");
echo "<tr bgcolor='#336699'>
	<th><font color='#ffffff'>Picture</font></th>
	<th><font color='#ffffff'>Title</font></th>
	<th><font color='#ffffff'>Date</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
{
	$path2=$row['srt_ti'];
	echo "<tr><td><img src='../upload/$path2.jpg' alt='$path2' height='50' width='50'/></td><td>$row[title]</td><td>$row[date]</td>";
	echo "<td><center><a href=UpdateFromGallery.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a></center></td></tr>";
}
	echo "</table>";
	?>
</div>
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="Update&Delete.php">Back</a></u></h3></p>
</center>
</html>