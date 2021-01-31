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
<h2><a href="#"><center>DELETE CIVIL DEFENC</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>DELETE CIVIL DEFENC</b></font></marquee></p>
<center>
<div class="articles">

<?php   
					include('..\connection.php');
					if(isset($_GET['id']))
		                    {
							$dtext=$_GET['id'];
							$sql = "DELETE  FROM  `civil_def` where `index`='$dtext'";
							$s=mysql_query($sql);
						if($s)
		                print "Delete success";
		                }
							
						
						?>
							<br /><br />
							<p><h3><u><a href=logout.php>Log out</a></u></h3></p>
							
							<p> <h1><u><a href="Update&DeletePhysicalTraining.php">Back</a></u></h1> </p>
</div>
</center>
</body>
</html>
