<?php
$fsrt_ti=$_POST["srt_ti"];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../RecentDisaster/upload\\$fsrt_ti"."_pic1".".jpg"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload1'])) {
	$file_name = $_FILES['fupload1']['name'];
	$file_type = $_FILES['fupload1']['type'];
if(copy($_FILES['fupload1']['tmp_name'], "../RecentDisaster/upload\\$fsrt_ti"."_pic2".".jpg"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload2'])) {
	$file_name = $_FILES['fupload2']['name'];
	$file_type = $_FILES['fupload2']['type'];
if(copy($_FILES['fupload2']['tmp_name'], "../RecentDisaster/upload\\$fsrt_ti"."_pic3".".jpg"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload3'])) {
	$file_name = $_FILES['fupload3']['name'];
	$file_type = $_FILES['fupload3']['type'];
if(copy($_FILES['fupload3']['tmp_name'], "../RecentDisaster/upload\\$fsrt_ti"."_pic4".".jpg"))
		print "";
		else
		print "";
	}
if ( isset($_FILES['fupload4'])) {
	$file_name = $_FILES['fupload4']['name'];
	$file_type = $_FILES['fupload4']['type'];
if(copy($_FILES['fupload4']['tmp_name'], "../RecentDisaster/upload\\$fsrt_ti"."_pic5".".jpg"))
		print "";
		else
		print "";
	}
include('..\connection.php');

$sql="INSERT INTO disaster (date,title,status,srt_ti,sort_dis,discrip)
VALUES
('$_POST[date]','$_POST[title]','$_POST[status]','$fsrt_ti','$_POST[sort_dis]','$_POST[discrip]')";

mysql_query($sql,$con);
mysql_close($con);
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertDisasterInformation.php\">";
?>






















