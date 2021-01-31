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
<h2><a href="#"><center>DELETE ALUMNI INFORMATION</center></a></h2>
<div class="articles">

<?php   
		include('..\connection.php');
						   if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `alumni_b` where `index`='$dtext'";
							$sql1 = "DELETE  FROM  `alumni_c` where `index`='$dtext'";
							$sql2 = "DELETE  FROM  `alumni_e` where `index`='$dtext'";
							$sql3 = "DELETE  FROM  `alumni_a` where `index`='$dtext'";
							$s=mysql_query($sql);
							$s1=mysql_query($sql1);
							$s2=mysql_query($sql2);
							$s3=mysql_query($sql3);
						if($s && $s1 && $s2 && $s3)
		                print "Delete success";
		                }
							
						
						?>
							<p> <h1><u><a href="Update&DeleteAlumniInformation.php">Back</a></u></h1> </p>
</div>

