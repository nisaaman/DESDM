<?php
$fses=$_POST["ses"];
$fstatus=$_POST["status"];
include('..\connection.php');
if(($fses!=NULL)&&($fstatus!=NULL)){
mysql_query("INSERT INTO `session`(`ses`,`status`) VALUES('$fses','$fstatus')");
header("location:InsertStudentSession.php");
}
else
{
print "Please Entry Session & Status";
}
mysql_close($con);
?>