<?php
include('..\connection.php');
$lecture_table="lecture_table";
if (isset($_POST['materialsselect']))
{
    $materials=$_POST['materialsselect'];
    print "<meta http-equiv=\"refresh\" content=\"0;URL=DownloadSearchByCourseCode.php?code=$materials\">";
}
?>