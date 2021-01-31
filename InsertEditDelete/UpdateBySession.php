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
<h2><a href="#"><center>Search with any of the folowing</center></a></h2>
<center>
<div class="articles">

<table width="50%"  border="12">
    <tr >
	  <form action="UpdateByName.php" method ="post">
      <th scope="row">1.&nbsp;&nbsp;Name</th>
      <td><input type="text" name="fu_name" size="80%" /></td>
      <td><input type="submit" value="Search" name="search" size="30"/></td>
	  </form>
    </tr>
    <tr>
	  <form id="form1" name="form1" method="post" action="UpdateMaterialsSelectSession.php">
      <th scope="row">2.&nbsp;&nbsp;Session</th>
      <td > 
<?php
	 include('..\connection.php');
	 print "<select name='materialsselect'>";
	 $sql = "SELECT * FROM  session WHERE status LIKE 'Alumni' order by ses DESC";
	 $s=mysql_query($sql);
	 while($a=mysql_fetch_array($s))
			{
				print "<option>$a[ses]</option>";
							
			}
							
      print"</select>";
						 ?></td>
      <td ><input type="submit" value="Search" name = "search"/></td>
	  </form>
    </tr>
    <tr> 
	 <form action="UpdateByRegNo.php" method ="post">
       <th scope="row">3.&nbsp;&nbsp;Reg No.</th>
      <td ><input type="text" name="reg_no" size="80%" /></td>
      <td><input type="submit" value="Search" name = "search" /></td>
	  </form>
    </tr>
  </table>
  
</div>
<div class="articles">
<font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">Search</font>
<?php
include('..\connection.php');
if(isset($_GET['sess']))
{
$fses = $_GET['sess'];
$result=mysql_query("SELECT * FROM alumni_b WHERE ses='$fses'");
echo "<table border='1' width='80%'>";
echo "<tr bgcolor='#336699'>
    <th><font color='#fff'>Student's Name</font></th>
	<th><font color='#fff'>Reg. NO</font></th>
	<th><font color='#fff'>Session</font></th>
	<th><font color='#fff'>Action</font></th>
    </tr>";
while($row=mysql_fetch_array($result))
 	{
	echo "<tr> ";
	echo "<td>{$row['fu_name']}</td>";
	echo "<td>{$row['reg_no']}</td>";	
	echo "<td>{$row['ses']}</td>";
	echo "<td><a href=UpdateAlumni.php?id=$row[index]><input type='submit' name='Submit' value='Update'/></a><a href=DeleteAlumni.php?id=$row[index]><input type='submit' name='Submit' value='Delete'/></a></td>";
	echo "</tr>";
	}
	echo "</table>";
	}
	mysql_close($con);
	
	?>	
</div>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteAlumniInformation.php">Back</a></u></h3></td>
</tr>
</table>
</center>