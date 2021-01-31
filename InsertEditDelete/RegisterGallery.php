<?php
include('..\connection.php');
$srt_ti=$_POST[srt_ti];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../upload\\$srt_ti".".jpg"))
		print "";
		else
		print "Error occur";
	}


$sql="INSERT INTO gallery (date,title,srt_ti)
VALUES
('$_POST[date]','$_POST[title]','$srt_ti')";

mysql_query($sql,$con);
mysql_close($con);
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertGalleryInformation.php\">";
?>