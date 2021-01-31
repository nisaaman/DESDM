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
<h2><a href="#"><center>DELETE ADMIN INFORMATION</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>DELETE ADMIN INFORMATION</</b></font></marquee></p>
<center>
<center><img src="../images/delete.jpg" width="450" height="331" alt="registration" /></center>

<div class="articles">

<?php   
					include('..\connection.php');
					if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `admin` where `index`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
							<br /><br />
<h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="Update&DeleteAdminInformation.php">Back</a></u></h3> </p>
</div>
</center>
</html>
						

