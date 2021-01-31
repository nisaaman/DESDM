<?php
session_start();
include('..\connection.php');
$login = mysql_query("select * from course where (code = '" . $_POST['code'] . "') and (pass = '" . $_POST['pass'] . "')");
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION['code'] = $_POST['code'];
$code=$_POST['code'];
print "<meta http-equiv=\"refresh\" content=\"0;URL=UploadModifyClassNotes.php?code=$code\">";
							
}
else
{
print "<meta http-equiv=\"refresh\" content=\"0;URL=UnderGraduatesClassNotes.php\">";
}
?>
