
<?php
include('..\connection.php');
$alumni_b="alumni_b";
if (isset($_POST['materialsselect']))
{
    $materials=$_POST['materialsselect'];
    print "<meta http-equiv=\"refresh\" content=\"0;URL=SearchBySession.php?sess=$materials\">";
}
?>