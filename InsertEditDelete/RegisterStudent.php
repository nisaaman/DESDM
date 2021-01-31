<?php
$fname=$_POST["name"];
$ffname=$_POST["fname"];
$fmname=$_POST["mname"];
$fid=$_POST["id"];
$ffac=$_POST["fac"];
$fses=$_POST["ses"];
$fmob=$_POST["mob"];
$femail=$_POST["email"];
$fnation=$_POST["nation"];
$fregion=$_POST["region"];
$fpadd=$_POST["pradd"];
$fpradd=$_POST["padd"];
$fsex=$_POST["sex"];
$bmonth=$_POST["mon"];
$bday=$_POST["day"];
$byear=$_POST["year"];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../Student/upload\\$fid".".jpg"))
		print "";
		else
		print "";
	}
include('..\connection.php');
if(($fname!=NULL)&&($fid!=NULL)&&($fses!=NULL)){
mysql_query("INSERT INTO student(`name`, `fname`,`mname`, `id`, `fac`, `ses`, `mob` , `email`,`nation`,`region`, `pradd`,`padd`, `sex`, `mon`, `day`, `year`) VALUES('$fname','$ffname','$fmname','$fid','$ffac','$fses','$fmob','$femail','$fnation','$fregion','$fpradd','$fpadd','$fsex','$bmonth','$bday','$byear')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertStudentInformation.php\">";
}

else
{
print "Please Entry Name , Reg No. & Session";
}
mysql_close($con);
?>