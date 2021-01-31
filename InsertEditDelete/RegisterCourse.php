<?php
$fcode=$_POST["code"];
$ftitle=$_POST["title"];
$fhour=$_POST["hour"];
$fsemester=$_POST["semester"];
$flevel=$_POST["level"];
$fsem=$_POST["sem"];
$fsyl=$_POST["syl"];
$fpass=$_POST["pass"];
include('..\connection.php');
if(($fcode!=NULL)&&($fpass!=NULL)){
mysql_query("INSERT INTO course(`code`, `title`, `hour`,`semester`,`level`,`sem`,`syl`,`pass`) VALUES('$fcode','$ftitle','$fhour','$fsemester','$flevel','$fsem','$fsyl','$fpass')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertCourseInformation.php\">";
}
else
{
print "Please Entry Code , Semester , Password";
}
mysql_close($con);
?>