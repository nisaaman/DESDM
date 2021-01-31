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
<h2><a href="#"><center>UPDATE & DELETE ADMIN INFORMATION</center></a></h2>

<p><marquee><font color="#9966CC" size="+2" face="Forte, serif, fantasy, Tahoma"><b>UPDATE & DELETE ADMIN INFORMATION</b></font></marquee></p>
<center>
<div class="articles">
<?
include('..\connection.php');
print "<table border=\"1\" align=center width='80%' cellspacing='2'>";
$result=mysql_query("SELECT * FROM  `admin` order by `index` ASC");
echo "<tr bgcolor='#336699'>
    <th><font color='#fff'>Full Name</font></th>
	<th><font color='#fff'>Email</font></th>
	<th><font color='#fff'>User Name</font></th>
	<th><font color='#fff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
	{
     $path1=$row['txt'];
	 echo "<tr><td><font color='#663366' face='Arial'>$row[name]</font></td>"	;
	 echo "<td>$row[email]</td>";
	 echo "<td>$row[username]</td>";
     echo "<td><center><a href=UpdateAdminInformation.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteAdminInformation.php?id=$row[index]><input type='submit' name='Submit' value='Delete'/></a></center></td></tr>";
    }
	echo "</table>";
	?>
	
</div>
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="AdministratorPage.php">Back</a></u></h3> </p>

	
</center>

