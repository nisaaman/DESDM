<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<title>DESDM</title>
<h2><a href="#"><center>UPDATE ADMIN INFORMATION</center></a></h2>
<center>

<?	  
if (isset($_POST['index']))
{
$admin="admin";
$index=$_POST["index"];
$name=$_POST['name'];
$email=$_POST['email'];
$user=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
include('..\connection.php');
$sql = "UPDATE `$admin` SET `name`='$name', `email`='$email', `username`='$user', `password`='$pass' where `index`='$index'";
$check=mysql_query($sql);
  if($check)
     {
       print "Update Success";
     }	 
}
?>
<?
if(isset($_GET['id'])){
	  $id=$_GET['id'];
include('..\connection.php');
$sql = "SELECT * FROM  `admin` where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{
?>
<center><img src="../images/update.jpg" width="375" height="321" alt="registration" /></center>
<form action="<? $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form2" id="form2">
	<input type="hidden" name="index" value="<? print "$a[index]";?>"/>
	       	  <table width="490" border="0" align="center">
						    <tr>
                              <td width="159"><font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">Name:</font></td>
                              <td width="159">
                                <input name="name" type="text"  size="30" value="<? print "$a[name]";?>"/>
                              </td>
                            </tr>
                            <tr>
                              <td><font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">E-mail Id:</font></td>
                              <td>
                                <input name="email" type="text"  size="30" value="<? print "$a[email]";?>"/>
                              </td>
                            </tr>
                            <tr>
                              <td width="159"><font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">User Name:</font></td>
                              <td width="159">
                                <input name="username" type="text"  size="30" value="<? print "$a[username]";?>"/>
                              </td>
                            </tr>
                                 <tr>
                              <td><font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">Password:</font></td>
                              <td>
                                <input name="password" type="password"  size="30"/>
                              </td>
                            </tr>
							  <tr>
                              <td><font face="Forte, serif, fantasy, Tahoma" size="+2" color="#660066">Re-Password:</font></td>
                              <td>
                                <input name="pass" type="password"  size="30"/>
                              </td>
                             </tr>
						
                            <tr>
							<td></td>
                            <td><input type="submit" name="Submit" value="Update" /></td>
                            </tr>
                          </table>
						  </form>
						  <?
}
}
?>
	<p><h3><u><a href=logout.php>Log out</a></u></h3>  
<h3><u><a href="Update&DeleteAdminInformation.php">Back</a></u></h3> </p>
</center>