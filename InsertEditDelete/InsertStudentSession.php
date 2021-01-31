<!--
Designed and Developed By : Tanjela Aman Nisa
							Computer Science and Engineering 
							6th Batch, Session : 2007-2008
							Patuakhali Science and Technology University
							Mobile : +880-1714 902043
							Email  : nisa2501@gmail.com ... 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DESDM</title>

<h2><a href="#"><center>ENTER STUDENT SESSION</center></a></h2>
<div class="articles">
<center>
 <form action="RegisterSession.php" enctype="multipart/form-data" method="post">

    <table class="editor" border="0" cellspacing="13">
       <tr>
          <td class="label">Session:</td>
          <td><div class="field_container">
            <input class="inputtext" id="ses" name="ses" type="text" size="30"/>
          </div></td>
        </tr>
		
        <tr>
          <td class="label">Status :</td>
          <td><div class="field_container">
            <select class="select" name="status" id="status">
              <option selected="selected" value="none">Select:</option>
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
<tr>
<td>
<p> <h3><u><a href=logout.php>Log out</a></u></h3> </p></td><td>
<p> <h3><u><a href="InsertInformation.php">Back</a></u></h3> </p>
</div></td>
</tr>
</table>
	   </form>
	   <center>
</div>


