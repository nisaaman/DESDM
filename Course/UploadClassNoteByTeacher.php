<?php
$pdf=$_POST["pdf"];
$ppt=$_POST["ppt"];
$wrd=$_POST["wrd"];
$img=$_POST["img"];
$name=$_POST["name"];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "upload\\$pdf".".pdf"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload1'])) {
	$file_name = $_FILES['fupload1']['name'];
	$file_type = $_FILES['fupload1']['type'];
if(copy($_FILES['fupload1']['tmp_name'], "upload\\$ppt".".ppt"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload2'])) {
	$file_name = $_FILES['fupload2']['name'];
	$file_type = $_FILES['fupload2']['type'];
if(copy($_FILES['fupload2']['tmp_name'], "upload\\$wrd".".docx"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload3'])) {
	$file_name = $_FILES['fupload3']['name'];
	$file_type = $_FILES['fupload3']['type'];
if(copy($_FILES['fupload3']['tmp_name'], "upload\\$img".".jpg"))
		print "";
		else
		print "";
	}

include('..\connection.php');

$sql="INSERT INTO lecture_table (lec_no,date,name,pdf,ppt,wrd,img)
VALUES
('$_POST[lec_no]','$_POST[date]','$name','$pdf','$ppt','$wrd','$img')";

print "<meta http-equiv=\"refresh\" content=\"0;URL=UploadModifyClassNotes.php?code=$name\">";		
mysql_query($sql,$con);
mysql_close($con);

?>


