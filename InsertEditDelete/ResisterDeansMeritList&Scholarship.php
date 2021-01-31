<?php
$fdate=$_POST["date"];
$ftxt=$_POST["txt"];
include('..\connection.php');
if(($ftxt!=NULL)){
mysql_query("INSERT INTO den_marit(`txt`,`date`) VALUES('$ftxt','$fdate')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertDeansMeritLis&ScholarshipInformation.php\">";
}
else
{
print "Please Entry TEXT !!!!!!!!";
}
mysql_close($con);
?>