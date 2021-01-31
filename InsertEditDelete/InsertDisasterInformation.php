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
<script type="text/javascript" src="../js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "discrip",
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

	<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "sort_dis",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "black",
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
	
	
<link rel="stylesheet" type="text/css" media="all" href="../js/jsDatePick_ltr.min.css" />

<script type="text/javascript" src="../js/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"date",
			dateFormat:"%Y-%m-%d"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
</head>
<body>
<h2><a href="#"><center>RECENT DISASTER</center></a></h2>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>INSERT RECENT DISASTER DETAILS</b></font></marquee></p>
<form action="RegisterDisaster.php" enctype="multipart/form-data" method="post"> 
    <table class="editor" border="0" cellspacing="10" >
      <tbody>
         <tr>
          <td class="label">Date:</td>
          <td>
		   <input type="text"  name="date" id="date" />
          </td>
        </tr> 
        <tr>
          <td class="label">Disaster Title :</td>
          <td><div class="field_container">
             <input class="inputtext" id="title" name="title" type="text" />
          </div></td>
        </tr>
        
		 <tr>
          <td class="label">Status :</td>
          <td><div class="field_container">
            <select class="select" name="status" id="status">
              <option selected="selected" value="none">Select:</option>
              <option value="World">World</option>
              <option value="Bangladesh">Bangladesh</option>
            </select>
          </div></td>
        </tr>
        <tr>
          <td class="label">Short Discription:</td>
          <td><div class="field_container">
                       <textarea name="sort_dis" id="sort_dis" name="sort_dis" rows="15" cols="10" style="width: 80%">
	
	</textarea>
          </div></td>
        </tr>
	<tr> 
          <td class="label">Full Discription:</td>
        </tr>
		
        </tbody>
    </table>
          
          <div class="field_container">
              <textarea name="discrip" id="discrip" name="discrip" rows="15" cols="10" style="width: 80%">
	
	</textarea>
          </div>
<br />
     <table class="editor" border="0" cellspacing="10" >
   	<tr>
          <td class="label">Short Picture Title :</td>
          <td><div class="field_container">
             <input class="inputtext" id="srt_ti" name="srt_ti" type="text" value="<? print "$a[srt_ti]";?>"/>
          </div></td>
        </tr>
        <tr>   
	</table>    
	   
	   <Label for="file">Upload Image:</label> 
	   <input type="file" name="fupload" id="fupload" />
	   <br/>
       <Label for="file">Upload Image:</label> 
	   <input type="file" name="fupload1" id="fupload1" />
	     <br/>
       <Label for="file">Upload Image:</label> 
	   <input type="file" name="fupload2" id="fupload2" />
	     <br/>
       <Label for="file">Upload Image:</label> 
	   <input type="file" name="fupload3" id="fupload3" />
	     <br/>
       <Label for="file">Upload Image:</label> 
	   <input type="file" name="fupload4" id="fupload4" />
	
   <div class="reg_btn clearfix">
      <label class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" value="Submit" />
      </label>
	  </div>
	   </form>
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="InsertInformation.php">Back</a></u></h3> </p>

	
</body>
</html>

