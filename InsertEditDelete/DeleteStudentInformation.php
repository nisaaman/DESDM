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
<h2><a href="#"><center>DELETE CURRENT STUDENT INFORMATION</center></a></h2>
<center>
<div class="articles">

<?php   
					include('..\connection.php');
					if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `student` where `index`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteStudentInformation.php">Back</a></u></h3></td>
</tr>
</table>
</div>
</center>
</html>
						

