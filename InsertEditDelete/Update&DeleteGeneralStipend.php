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
</head>
<body>
<h2><a href="#"><center>UPDATE & DELETE GENERAL STIPEND</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>UPDATE & DELETE GENERAL STIPEND</b></font></marquee></p>

<center>
<div class="articles">
<?
include('..\connection.php');
print "<table border=\"1\" align=center width='80%' cellspacing='2'>";
$result=mysql_query("SELECT * FROM  gs order by `index` DESC");
echo "<tr bgcolor='#336699'>
	 <th><font color='#ffffff'>Text</font></th>
	<th><font color='#ffffff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
	{
     $path1=$row['txt'];
	 echo "<td width='80%'>$path1</td>";
     echo "<td><a href=UpdateGeneralStipend.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteGeneralStipend.php?id=$row[index]><input type='submit' name='Submit' value='Delete'/></a></td></tr>";
    }
	echo "</table>";
	?>
	
</div>
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="Update&Delete.php">Back</a></u></h3> </p>

	
<center>
</html>
