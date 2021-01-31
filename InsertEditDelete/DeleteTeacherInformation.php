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
<h2><a href="#"><center>DELETE FACULTY INFORMATION</center></a></h2>
<center>
<div class="articles">

<?php   
					include('..\connection.php');
					if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `teacher` where `index`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
							<br /><br />
										<center>
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteTeacherInformation.php">Back</a></u></h3></td>
</tr>
</table>
</center>
</div>
</center>
