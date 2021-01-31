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
<script type="text/javascript" src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="../js/jsDatePick_ltr.min.css" />
<!-- 
	OR if you want to use the calendar in a right-to-left website
	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!
	
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
-->
<script type="text/javascript" src="../js/jsDatePick.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    The first example of Javascript snippet is for the most basic use , as a popup calendar
    for a text field input.
-->
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
<h2><a href="#"><center>GALLERY PICTURE</center></a></h2>
<center>
<div class="articles">
<p><marquee><font color="#87CEEB" size="+1" face="Georgia"><b>INSERT GALLERY PICTURE DETAILS</b></font></marquee></p><br/>
<form action="RegisterGallery.php" enctype="multipart/form-data" method="post"> 
   <Label for="file">Upload Image:</label> 
	<input type="file" name="fupload" id="fupload" />   
	<table class="editor" border="0" cellspacing="20" >
      <tbody>
         <tr>
          <td class="label">Date:</td>
          <td>
		   <input type="text"  name="date" id="date" />
          </td>
        </tr> 
        <tr>
          <td class="label">Picture Short Discription :</td>
          <td><div class="field_container">
             <input class="inputtext" id="title" name="title" type="text" />
          </div></td>
        </tr>
	       <tr>
          <td class="label">Picture Short Title:</td>
          <td><div class="field_container">
             <input class="inputtext" id="srt_ti" name="srt_ti" type="text" />
          </div></td>
        </tr>
	
        <tr>
          <td ></td><td>
	    <div class="reg_btn clearfix">
      <label class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" value="Submit" />
      </label>
	  </div>
	  </td>
        </tr>
	
	      </tbody>
    </table>
	   </form>
<p><h3><u><a href=logout.php>Log out</a></u></h3></p>	  
<p><h3><u><a href="InsertInformation.php">Back</a></u></h3> </p>
</div>
</center>