<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<title>DESDM</title>
<h2><a href="#"><center>DELETE COURSE INFORMATION</center></a></h2>
<center>
<div class="articles">

<?php   
					include('..\connection.php');
                          if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `course` where `id`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
								<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteCourseInformation.php">Back</a></u></h3></td>
</tr>
</table>
</center>
</div>


						

