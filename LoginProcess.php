<?php
session_start();
include('connection.php');
$login = mysql_query("select * from `alumni` where (`reg_no` = '" . $_POST['reg_no'] . "') and (`cgpa` = '" . $_POST['cgpa'] . "')");
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION['reg_no'] = $_POST['reg_no'];
$reg_no=$_POST['reg_no'];
print "<meta http-equiv=\"refresh\" content=\"0;URL=alumni/UpdateAlumniInformationByAlumni.php?reg_no=$reg_no\">";
}
else
{
print "<meta http-equiv=\"refresh\" content=\"0;URL=Alumni.php\">";
}
?>
