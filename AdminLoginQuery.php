<?php
session_start();
$password=$_POST['password'];
$encrypt_password=md5($password);
include('connection.php');
$login = mysql_query("select * from `admin` where (username = '" . $_POST['username'] . "') and (password = '$encrypt_password')");
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION['username'] = $_POST['username'];
print "<meta http-equiv=\"refresh\" content=\"0;URL=InsertEditDelete/AdministratorPage.php\">";
}
else
{
print "<meta http-equiv=\"refresh\" content=\"0;URL=AdminLogin.php?id=fail\">";
}
?>
