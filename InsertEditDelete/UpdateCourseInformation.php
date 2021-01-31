<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DESDM</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "syl",
		theme : "advanced",
		skin : "o2k7",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});

	
</script>
<h2><a href="#"><center>UPDATE COURSE LAYOUT</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>COURSE LAYOUT UPDATE</b></font></marquee></p><br />
           <?
	  if (isset($_POST['id']))
{
include('..\connection.php');
$course="course";
$id=$_POST['id'];
$code=$_POST['code'];
$title=$_POST['title'];
$hour=$_POST['hour'];
$semester=$_POST['semester'];
$level=$_POST['level'];
$sem=$_POST['sem'];
$syl=$_POST['syl'];
$pass=$_POST['pass'];
	  $sql = "UPDATE $course SET `code`='$code',`title`='$title',`hour`='$hour', `semester`='$semester', `level`='$level', `sem`='$sem', `syl`='$syl',`pass`='$pass' where `id`='$id' ";
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
$sql = "SELECT * FROM  `course` where `id`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	

?> 
	 
	<form action="<? $_SERVER['PHP_SELF'];?>"  method="post"  enctype="multipart/form-data"  name="form2"  id="form2">
	 <input type="hidden" name="id" value="<? print "$a[id]";?>"/> 
	  <table class="editor" border="0" cellspacing="10" >
      <tbody>
        <tr>
          <td class="label">Course Code:</td>
          <td><div class="field_container">
              <input class="inputtext" id="code" name="code" type="text" value="<? print "$a[code]";?>"/>
          </div></td>
        </tr>
        <tr>
          <td class="label">Course Title:</td>
          <td><div class="field_container">
              <input class="inputtext" id="title" name="title" type="text"  size ="30" value="<? print "$a[title]";?>" />
          </div></td>
        </tr>
        <tr>
          <td class="label">Credit Hour:</td>
          <td><div class="field_container">
              <input class="inputtext" id="hour" name="hour" type="text" value="<? print "$a[hour]";?>"/>
          </div></td>
        </tr>
		<tr>
		<td class="label">Semester:</td>
		<td><select name="semester" id="semester">
						<option selected="selected"><? print "$a[semester]";?></option>
						<option>1st</option>
						<option>2nd</option>
						<option>3rd</option>
						<option>4th</option>
						<option>5th</option>
						<option>6th</option>
						<option>7th</option>
						<option>8th</option>
						<option>9th</option>
						</select></td>
					
		</tr>
        <tr>
          <td class="label">Level:</td>
          <td ><div class="field_container">
             <select name="level" id="level">
						<option selected="selected"><? print "$a[level]";?></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						</select>
          </div></td>
       <td class="label">Semester:</td>
          <td><div class="field_container">
             <select name="sem" id="sem">
						<option selected="selected"><? print "$a[sem]";?></option>
						<option>1</option>
						<option>2</option>
						</select>
          </div></td>
        </tr>
			<tr> 
          <td class="label">Password:</td>
          <td><div class="field_container">
              <input class="inputtext" id="pass" name="pass" type="text" value="<? print "$a[pass]";?>"/>
          </div></td>
        </tr>
		<tr> 
		<td class="label">Syllabus Update:</td>
        </tr> 
            </tbody>
    </table>
          
          <div class="field_container">
              <textarea name="syl" id="syl" name="syl" rows="15" cols="10" style="width: 80%" ><? print "$a[syl]";?></textarea>
          </div>
<br /> <br />
      
   <div class="reg_btn clearfix">
      <label class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" value="Submit" />
      </label>
	   </div>
	  </form> 
	  <?
	  
	
}
}
	  ?>
		
	<table border="0" cellspacing="10">
<tr>
<td><h3><u><a href=logout.php>Log out</a></u></h3></td>
<td><h3><u><a href="Update&DeleteCourseInformation.php">Back</a></u></h3></td>
</tr>
</table>
