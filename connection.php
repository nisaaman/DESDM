<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "DESDM";
$con=mysql_connect("$server","$username","$password");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("$db_name",$con);
?>