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

<h2><a href="#"><center>Search with any of the folowing</center></a></h2> <br/><br/>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>UPDATE & DELETE ALUMNI INFORMATION</b></font></marquee></p><br/><br/>

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
  <table>
  	  <tr>
		 <td class="label">
		<h3><u><a href=logout.php>Log out</a></u></h3> 
		 </td>
		 <td>
		<h3><u><a href="Update&Delete.php">Back</a></u></h3>
         </td>
		  </tr>
		  </table>
</div>
</center>