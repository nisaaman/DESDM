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
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.cycle.all.latest.js"></script><script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "eml",
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

<h2><a href="#"><center>UPDATE SPARSO</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>UPDATE SPARSO</b></font></marquee></p>
<?
 if (isset($_POST['index']))
{
include('..\connection.php');
$sparso="sparso";
$index=$_POST['index'];
$txt=$_POST['txt'];
	  $sql = "UPDATE $sparso SET `txt`='$txt' where `index` LIKE '$index'";
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
$sql = "SELECT * FROM  `sparso` where `index` LIKE '$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	
?>   
<form action="<? $_SERVER['PHP_SELF'];?>"  method="post" enctype="multipart/form-data" name="form2" id="form2">
  <input type="hidden" name="index" value="<? print "$a[index]";?>"/>
       Context text:
 <div class="field_container">
              <textarea name="txt" id="eml" name="eml" rows="15" cols="10" style="width: 80%"><? print "$a[txt]";?>
	
	</textarea>
          </div>
<br />
      
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
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="Update&DeleteSPARSO.php">Back</a></u></h3> </p>

	
</body>
</html>