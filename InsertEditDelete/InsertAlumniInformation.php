<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<title>DESDM</title>
<h2><a href="#"><center>Enter Alumni Information</center></a></h2>
<center>
<div class="articles">
<table class="editor" border="0" cellspacing="4">
      <tbody>
      <form action="RegisterAlumni.php" enctype="multipart/form-data" method="post"> 
        <tr>
          <td class="label">Full Name:</td>
          <td><div class="field_container">
            <input class="inputtext" id="fu_name" name="fu_name" type="text" size="30"/>
          </div></td>
        </tr>
		 <tr>
          <td class="label">Father's Name:</td>
          <td><div class="field_container">
            <input class="inputtext" id="fname" name="fname" type="text" size="30"/>
          </div></td>
        </tr>
		 <tr>
          <td class="label">Mother's Name:</td>
          <td><div class="field_container">
            <input class="inputtext" id="mname" name="mname" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Date of Birthday:</td>
          <td><div class="field_container">
              <select class="" id="mon" name="mon" onchange='return 
run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, 
&quot;birthday_day&quot;, &quot;birthday_year&quot;);});'>
                <option selected="selected" 
value="none">Month:</option>
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
                <option selected="selected" value="None">Day:</option>
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
                <option selected="selected" value="None">Year:</option>
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
          <td class="label">Reg. NO.:</td>
          <td><div class="field_container">
            <input class="inputtext" id="reg_no" name="reg_no" type="text" size="30"/>
          </div></td>
        </tr>
       
                <tr>
		 <td class="label">Session:</td>
          <td><div class="field_container">
		    
         <?php
	 include('..\connection.php');
	 print "<select class='select' name='ses' id='ses'>";
	 $sql = "SELECT * FROM  session WHERE status LIKE 'Alumni' order by ses DESC";
	 $s=mysql_query($sql);
	 while($a=mysql_fetch_array($s))
			{
				print "<option>$a[ses]</option>";
							
			}
							
    print"</select>";
    ?> 
						</div></td>
        </tr>
		<tr>
          <td class="label">Cgpa:</td>
          <td><div class="field_container">
            <input class="inputtext" id="cgpa" name="cgpa" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Country of Residence :  </td>
          <td><div class="field_container">
            <input class="inputtext" id="con" name="con" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Mailing Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="mail_a" name="mail_a" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Permanent Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="per_add" name="per_add" type="text"size="30" />
          </div></td>
        </tr>
		<tr>
          <td class="label">E-mail:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="email" name="email" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Phone:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="phone" name="phone" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Mobile:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="mob" name="mob" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Website:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="web" name="web" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">School:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="sch" name="sch" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Passing Year:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="spas_y" name="spas_y" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">College:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="coll" name="coll" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Passing Year:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="cpas_y" name="cpas_y" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Highest Degree Attained:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="high_d" name="high_d" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Name of University:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="n_uni" name="n_uni" type="text" size="30"/>
          </div></td>
        </tr>
		
		<tr>
          <td class="label">Passing Year:   </td>
          <td><div class="field_container">
            <input class="inputtext" id="pass_y" name="pass_y" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Present Designation with Name of Organization :  </td>
          <td><div class="field_container">
            <input class="inputtext" id="pre_nam" name="pre_nam" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Present Work Place with Address:  </td>
          <td><div class="field_container">
            <input class="inputtext" id="pre_w_p" name="pre_w_p" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Maried Status  </td>
          <td><div class="field_container">
            <input class="inputtext" id="marid" name="marid" type="text" size="30"/>
          </div></td>
        </tr>
		<tr>
          <td class="label">Name of Spouse if Maried :  </td>
          <td><div class="field_container">
            <input class="inputtext" id="spos" name="spos" type="text" size="30"/>
          </div></td>
        </tr>
		
        <tr id="extra_selects_hack">
          <td>&nbsp;</td>
        </tr>
		 <Label for="file">Upload Image:</label> 
    <input type="file" name="fupload" id="fupload"/>
   
       <tr>
   <td><div class="reg_btn clearfix">
      <label
 class="uiButton uiButtonSpecial uiButtonMedium">
      <input name="submit3" type="submit" 
value="Submit" />
      </label>
	  </td>
	  </tr>
<tr>
<td>
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p></td><td>
<p> <h3><u><a href="InsertInformation.php">Back</a></u></h3> </p>
</div></td>
</tr>
 </form>

      </tbody>
    </table>
</div>
</center>
</html>
