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
<script type="text/javascript" src="../js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	// O2k7 skin
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "txt",
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
<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
#Layer1 {
	position:absolute;
	width:200px;
	height:93px;
	z-index:1;
	left: 794px;
	top: 356px;
}
</style></head>
<body>
<h1><center>UPDATE TEACHER INFORMATION</center></h1>
<p><marquee><font color="#87CEEB" size="+2" face="Georgia"><b>UPDATE TEACHER INFORMATION</b></font></marquee></p>

<?
 if (isset($_POST['index']))
{
$teacher="teacher";
$index=$_POST['index'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$desig=$_POST['desig'];
$fac=$_POST['fac'];
$dep=$_POST['dep'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$nation=$_POST['nation'];
$region=$_POST['region'];
$pradd=$_POST['pradd'];
$padd=$_POST['padd'];
$sex=$_POST['sex'];
$mon=$_POST['mon'];
$day=$_POST['day'];
$year=$_POST['year'];
$jmon=$_POST['jmon'];
$jday=$_POST['jday'];
$jyear=$_POST['jyear'];
$txt=$_POST['txt'];
if ( isset($_FILES['fupload'])) {
	$file_name = $_FILES['fupload']['name'];
	$file_type = $_FILES['fupload']['type'];
if(copy($_FILES['fupload']['tmp_name'],"upload\\$email$day".".jpg"))
		print "";
		else
		print "Error occur";
	}


include('..\connection.php');
	  $sql = "UPDATE $teacher SET `name`='$name',`fname`='$fname',`mname`='$mname', `desig`='$desig', `fac`='$fac', `dep`='$dep', `mob`='$mob',`email`='$email',`nation`='$nation',`region`='$region',`pradd`='$pradd',`padd`='$padd',`sex`='$sex', `mon`='$mon' ,`day`='$day',`year`='$year',`jmon`='$jmon' ,`jday`='$jday', `jyear`='$jyear' ,`txt`='$txt' where `index`='$index'";
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
$teacher="teacher";
$sql = "SELECT * FROM  `teacher` where `index`='$id'";
$s=mysql_query($sql);
while($a=mysql_fetch_array($s))
{	

?>
	 
<form action="<? $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" name="form2" id="form2">
	  	
		<input type="hidden" name="index" value="<? print "$a[index]";?>"/>
	  		 <Label for="file">Upload Image:</label> 
    <input type="file" name="fupload" id="fupload">
   
	  <table class="editor" border="0" cellspacing="10">
	          <tr>
          <td class="label">Name:</td>
          <td><div class="field_container">
            <input class="inputtext" id="name" name="name" type="text" size="30" value="<? print "$a[name]";?>"/>
          </div></td>
        </tr>
		 <tr>
          <td class="label">Father's Name:</td>
          <td><div class="field_container">
            <input size="30"class="inputtext" id="fname" name="fname" type="text" value="<? print "$a[fname]";?>"/>
          </div></td>
        </tr>
		 <tr>
          <td class="label">Mother's Name:</td>
          <td><div class="field_container">
            <input class="inputtext" id="mname" name="mname" type="text" size="30" value="<? print "$a[mname]";?>"/>
          </div></td>
        </tr>
		 <tr>
        <td class="label">Designation:</td>
          <td><div class="field_container">
            <select class="select" name="desig" id="desig" >
              <option selected="selected" value="<? print "$a[desig]";?>"><? print "$a[desig]";?></option>
              <option value="Professors">Professors</option>
			   <option value="Associate Professor">Associate Professor</option>
              <option value="Assistant Professor">Assistant Professor</option>
			  <option value="Lecturer">Lecturer</option>
              </select>
          </div>
		  </td>
        </tr>
       <tr>
          <td class="label">Faculty:</td>
          <td><div class="field_container">
            <input class="inputtext" id="fac" name="fac" type="text" size="30" value="<? print "$a[fac]";?>"/>
          </div></td>
        </tr>
       
        <tr>
          <td class="label">Department:</td>
          <td><div class="field_container">
            <input class="inputtext" id="dep" name="dep" type="text" size="30" value="<? print "$a[dep]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Mobile No.  </td>
          <td><div class="field_container">
            <input class="inputtext" id="mob" name="mob" type="text" size="30" value="<? print "$a[mob]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">E-mail:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="email" name="email" type="text" size="30" value="<? print "$a[email]";?>"/>
          </div></td>
        </tr>
	<tr>
          <td class="label">Nationality:  </td>
          <td><div class="field_container">
          <select class="select" name="nation" id="nation">
              <option selected="selected" value="<? print "$a[nation]";?>"><? print "$a[nation]";?></option>
             <option value="Bangladeshi">Bangladeshi</option>
			  <option value="Others">Others</option>
            </select>
		  </div></td>
        </tr>
		<tr>
          <td class="label">Religion:  </td>
          <td><div class="field_container">
           <select class="select" name="region" id="region">
              <option selected="selected" value="<? print "$a[region]";?>"><? print "$a[region]";?></option>
               <option value="Islam">Islam</option>
              <option value="Hindu">Hindu</option>
			  <option value="Others">Others</option>
            </select>
		  </div></td>
        </tr>
		<tr>
          <td class="label">Present Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="pradd" name="pradd" type="text" size="30" value="<? print "$a[pradd]";?>"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Permanent Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="padd" name="padd" type="text" size="30" value="<? print "$a[padd]";?>"/>
          </div></td>
        </tr>
        <tr>
          <td class="label">Sex :</td>
          <td><div class="field_container">
            <select class="select" name="sex" id="sex">
              <option selected="selected" value="<? print "$a[sex]";?>"><? print "$a[sex]";?></option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
          </div></td>
        </tr>
        <tr>
          <td class="label">Date of Birthday:</td>
          <td><div class="field_container">
              <select class="" id="mon" name="mon" onchange='return 
run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, 
&quot;birthday_day&quot;, &quot;birthday_year&quot;);});'>
                <option selected="selected" 
value="<? print "$a[mon]";?>"><? print "$a[mon]";?></option>
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="Jun">Jun</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
              <select name="day" id="day" onchange="" 
autocomplete="off">
                <option selected="selected" value="<? print "$a[day]";?>"><? print "$a[day]";?></option>
                <option
 value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select name="year" id="year" 
onchange='return run_with(this, [&quot;editor&quot;], function() 
{editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});' 
autocomplete="off">
                <option selected="selected" value="<? print "$a[year]";?>"><? print "$a[year]";?></option>
                <option
 value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
              </select>
          </div></td>
        </tr>
		 <tr>
          <td class="label">Joining Date:</td>
          <td><div class="field_container">
              <select class="" id="jmon" name="jmon" onchange='return 
run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, 
&quot;birthday_day&quot;, &quot;birthday_year&quot;);});'>
                <option selected="selected" 
value="<? print "$a[jmon]";?>"><? print "$a[jmon]";?></option>
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="Jun">Jun</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sep">Sep</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
              </select>
              <select name="jday" id="jday" onchange="" 
autocomplete="off">
                <option selected="selected" value="<? print "$a[jday]";?>"><? print "$a[jday]";?></option>
                <option
 value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select name="jyear" id="jyear" 
onchange='return run_with(this, [&quot;editor&quot;], function() 
{editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});' 
autocomplete="off">
                <option selected="selected" value="<? print "$a[jyear]";?>"><? print "$a[jyear]";?></option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
              </select>
          </div></td>
        </tr>
    </table> 
      		
<font color="#9966CC" size="+1" face="Georgia">Enter  CV  text:</font><br />
           <div class="field_container">
              <textarea name="txt" id="txt" name="txt" rows="15" cols="10" style="width: 80%"><? print "$a[txt]";?>
	
	</textarea>
          </div>
   <div class="reg_btn clearfix">
      <label
 class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" 
value="Submit" />
      </label>
	  </div>
  
       </form>	
	   <?
	   }
}
	  ?>
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p>  
<p> <h3><u><a href="Update&DeleteTeacherInformation.php">Back</a></u></h3> </p>

		  
</body>
</html>