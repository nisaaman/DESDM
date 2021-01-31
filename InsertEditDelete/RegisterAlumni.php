<?php
$ffu_name=$_POST["fu_name"];
$ffname=$_POST["fname"];
$fmname=$_POST["mname"];
$bday=$_POST["day"];
$bmonth=$_POST["mon"];
$byear=$_POST["year"];
$freg_no=$_POST["reg_no"];
$fses=$_POST["ses"];
$fcgpa=$_POST["cgpa"];
$fcon=$_POST["con"];
$fmail_a=$_POST["mail_a"];
$fper_add=$_POST["per_add"];
$femail=$_POST["email"];
$fphone=$_POST["phone"];
$fmob=$_POST["mob"];
$fweb=$_POST["web"];
$fsch=$_POST["sch"];
$fspas_y=$_POST["spas_y"];
$fcol=$_POST["col"];
$fcpas_y=$_POST["cpas_y"];
$fhigh_d=$_POST["high_d"];
$fn_uni=$_POST["n_uni"];
$fpass_y=$_POST["pass_y"];
$fpre_nam=$_POST["pre_nam"];
$fpre_w_p=$_POST["pre_w_p"];
$fmarid=$_POST["marid"];
$fspos=$_POST["spos"];

if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../Alumni/upload\\$freg_no".".jpg"))
		print "";
		else
		print "";
	}
include('..\connection.php');
if(($ffu_name!=NULL)&&($freg_no!=NULL)&&($fses!=NULL)&&($fcgpa!=NULL)){
mysql_query("INSERT INTO alumni_b(`fu_name`, `fname`, `mname`, `day`, `mon`, `year`,`reg_no`,`ses`,`cgpa`,`con`) VALUES('$ffu_name','$ffname','$fmname','$bday','$bmonth','$byear','$freg_no','$fses','$fcgpa','$fcon')");
mysql_query("INSERT INTO alumni_c(`mail_a`, `per_add`, `email`, `phone`, `mob`,`web`) VALUES('$fmail_a','$fper_add','$femail','$fphone','$fmob','$fweb')");
mysql_query("INSERT INTO alumni_e(`sch`, `spas_y`, `coll`, `cpas_y`, `high_d`,`n_uni`,`pass_y`) VALUES('$fsch','$fspas_y','$fcoll','$fcpas_y','$fhigh_d','$fn_uni','$fpass_y')");
mysql_query("INSERT INTO alumni_a(`pre_nam`, `pre_w_p`, `marid`, `spos`) VALUES('$fpre_nam','$fpre_w_p','$fmarid','$fspos')");
mysql_query("INSERT INTO alumni(`reg_no`, `cgpa`) VALUES('$freg_no','$fcgpa')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertAlumniInformation.php\">";

}
else
{
print "Please Entry Name , Reg No. ,Session & Cgpa";
}
mysql_close($con);
?>