<?php
include('..\connection.php');
$course="course";
if (isset($_POST['materialsselect']))
{
    $materials=$_POST['materialsselect'];
	  $sql = "SELECT * FROM  course where title LIKE '%$materials'  ";
	   $s=mysql_query($sql);
	   while($a=mysql_fetch_array($s))
    print "<meta http-equiv=\"refresh\" content=\"0;URL=SearchByCourseTitle.php?id=$a[id]\">";
}
?>