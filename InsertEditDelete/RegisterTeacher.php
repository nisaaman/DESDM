<?php
$fname=$_POST["name"];
$ffname=$_POST["fname"];
$fmname=$_POST["mname"];
$fdesig=$_POST["desig"];
$ffac=$_POST["fac"];
$fdep=$_POST["dep"];
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
$fjmon=$_POST["jmon"];
$fjday=$_POST["jday"];
$fjyear=$_POST["jyear"];
$ftxt=$_POST["txt"];

if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../Teacher/upload\\$femail$bday".".jpg"))
		print "";
		else
		print "Error occur";
	}

include('..\connection.php');
if(($fname!=NULL)&&($fdesig!=NULL)&&($ftxt!=NULL)){
mysql_query("INSERT INTO teacher(`name`, `fname`,`mname`,  `desig`, `fac`, `dep`, `mob` , `email`,`nation`,`region`, `pradd`,`padd`, `sex`, `mon`, `day`, `year`,`jmon`,`jday`,`jyear`,`txt`) VALUES('$fname','$ffname','$fmname','$fdesig','$ffac','$fdep','$fmob','$femail','$fnation','$fregion','$fpradd','$fpadd','$fsex','$bmonth','$bday','$byear','$fjmon','$fjday','$fjyear','$ftxt')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertTeacherInformation.php\">";

}
else
{
print "Please Entry Name , Designation  & CV !!!!!!!!!!!1";
}
mysql_close($con);
?>