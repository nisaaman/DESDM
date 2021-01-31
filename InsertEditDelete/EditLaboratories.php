<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DESDM</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "elm",
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


</head>
<body>

<h2>Laboratories Page Text & Image Edit</h2>

<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>Edit Laboratories Page</b></font></marquee></p><br />
<?
if (isset($_POST['id']))
{
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'], "../upload\\lb"."_pic1".".jpg"))
		print "";
		else
		print "";
	}
include('..\connection.php');
$sql="UPDATE `AdmissionProsessResearch&JournalsLaboratoriesNoticeBoard&Contact` SET `LaboratoriesTxt`='$_POST[txt]'";
$check=mysql_query($sql);
         if($check)
         {
         print "Update Success";
         }
	}
?>
<?
include('..\connection.php');
$sql = "SELECT * FROM  `AdmissionProsessResearch&JournalsLaboratoriesNoticeBoard&Contact`";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{
	?>
<form action="<? $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"   method="POST">
<input type="hidden" name="id" value="<? print "$a[id]";?>"/> 
   <Label for="file">Picture:</label> 
   <input type="file" name="fupload" id="fupload" />
    <br /><br />
	
	 	  <font color="#9966CC" size="+1" face="Georgia">Context text: </font>
	  <br />
     <br />

	<textarea name="txt" id="elm" name="elm" rows="15" cols="80" style="width: 80%"><? print "$a[LaboratoriesTxt]";?>
	
	</textarea>

	<br />
	<input type="submit" name="save" value="Submit" />
	<input type="reset" name="reset" value="Reset" />


</form>
<?
}
?>
<table border="0" cellspacing="5">
<tr>
<td>
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p></td>
<td>
<p><h3><u><a href=back.php>Back</a></u></h3> </p></td>
</tr>
</table>
</body>
</html>