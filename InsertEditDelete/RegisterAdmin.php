<?php
$name=$_POST['name'];
$email=$_POST['email'];
$user=$_POST['username'];
$password=$_POST['password'];
$pass=$_POST['pass'];
if($password==$pass)
{
$pass=md5($password);
include('../connection\database.php');
mysql_query("INSERT INTO admin(`name`,`email`,`username`,`password`) VALUES('$name','$email','$user','$pass')");
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertNewAdminInformation.php\">";
}
else
{
	print "Password & Re-Password not Same";
    print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertNewAdminInformation.php\">";
}
	mysql_close($con);
?>
