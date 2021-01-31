<?php
$fdate=$_POST["date"];
$ftxt=$_POST["txt"];

include('..\connection.php');
if(($ftxt!=NULL)){
mysql_query("INSERT INTO ws(`txt`,`date`) VALUES('$ftxt','$fdate')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertWeatherStatusInformation.php\">";
}
else
{
print "Please Entry TEXT !!!!!!!!";
}
mysql_close($con);
?>