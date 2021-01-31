<?php
$ftxt=$_POST["txt"];
include('..\connection.php');
if(($ftxt!=NULL)){
mysql_query("INSERT INTO gs(`txt`) VALUES('$ftxt')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertGeneralStipendInformation.php\">";
}
else
{
print "Please Entry TEXT !!!!!!!!";
}
mysql_close($con);
?>