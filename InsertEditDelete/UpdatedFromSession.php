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
<h2><a href="#"><center>UPDATE SESSION</center></a></h2>
<center>
<div class="articles">
<?	  
	  
if (isset($_POST['index']))
{
$session="session";
$index=$_POST["index"];
$ses=$_POST['ses'];
$status=$_POST['status'];
       include('..\connection.php');
	  $sql = "UPDATE $session SET `ses`='$ses',`status`='$status' where `index`='$index'";
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
$sql = "SELECT * FROM  `session` where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	

?>
 <form action="<? $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form2" id="form2">
	<input type="hidden" name="index" value="<? print "$a[index]";?>"/>
    <table class="editor" border="0" cellspacing="13">
       <tr>
          <td class="label">Session:</td>
          <td><div class="field_container">
            <input class="inputtext" id="ses" name="ses" type="text" size="30" value="<? print "$a[ses]";?>"/>
          </div></td>
        </tr>
		
        <tr>
          <td class="label">Status :</td>
          <td><div class="field_container">
            <select class="select" name="status" id="status">
              <option selected="selected" value="<? print "$a[status]";?>"><? print "$a[status]";?></option>
              <option value="Student">Student</option>
              <option value="Alumni">Alumni</option>
            </select>
          </div></td>
        </tr>
         <tr>
   <td><div class="reg_btn clearfix">
      <label
 class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" 
value="Submit" />
      </label>
	  </td>
	  </tr>
	  </div>
	  </table>
	   </form>
	   <?
}
}
?>

<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p>
<p> <h3><u><a href="UpdateSession.php">Back</a></u></h3> </p>

</div>
</center>