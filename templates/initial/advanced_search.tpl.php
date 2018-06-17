<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
				  <td>&nbsp;</td>
                  
				  <td valign="top">&nbsp;</td>
				  <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="30">&nbsp;</td>
                    <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="24" height="25">&nbsp;</td>
                    <td  ><h3 class="page_heading">Advance Search</h3></td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td valign="top" align="center">
                    
                    <br/>
 <form method="GET" name="frmAdvancedSearch" action="advanced_search_submit.php" >
 <table class="table table-bordered" >
 <tr> 
    <td width="15%" align="left" class="vheading">Searching for</td>
    <td align="left">
        <select name="gender" class="content" >
            <option value="M" <?php if($quick['gender']=="F") { echo "selected";}?>>Male</option>
            <option value="F" <?php if($quick['gender']=="M") { echo "selected";}?>>Female</option>
        </select>
    </td>
</tr>
 <tr> 
<td width="15%" align="left" class="vheading">Age</td>
<td align="left">
   <select name="age">
   <option selected value="18 and 100">All ages</option>
   <option value="19 and 21">19-21 yrs</option>
   <option value="22 and 24">22-24 yrs</option>
   <option value="25 and 27">25-27 yrs</option>
   <option value="28 and 30">28-30 yrs</option>
   <option value="31 and 33">31-33 yrs</option>
   <option value="34 and 36">34-36 yrs</option>
   <option value="37 and 39">37-39 yrs</option>
   <option value="40 and 100">&gt; 40 years</option>
   </select>
</td>
</tr>
<tr>
    <td width="15%" align="left" class="vheading">Marital status</td>
    <td>
      <select name="marital_status" >
      <option value="All" selected>All</option>
      <option value="1">Never Married</option>
      <option value="2">Awaiting Divorce</option>
      <option value="3">Divorced</option>
      <option value="4">Widowed</option>
      <option value="5">Annulled</option>
      <option value="6">Married</option>
      </select>
    </td>
</tr>

<tr >  
    <td width="15%" align="left" class="vheading">Height</td>
    <td>
        <select  name="height[]" multiple size=5 >
        <option value="All" selected> All</option>
        <?php echo createDropDownForHeight($db); ?>
        </select>
    </td>
</tr>

<tr >  
    <td width="15%" align="left" class="vheading">Religion</td>
    <td>
    <select name="religion[]" multiple >
        <option value='All' selected>All</option>
        <?php echo createDropDownForReligion($db);?>
    </select>
    </td>
</tr>

<tr> 
    <td width="15%" align="left" class="vheading">Caste</td>
    <td><select  name="caste[]" multiple size=10>
    <option value="All" selected>All</option>
    <?php echo createDropDownForCaste($db); ?></select>
    </td>
</tr>

<tr>  
    <td width="15%" align="left" class="vheading">Mother tongue</td>
    <td>
    <select  name="mothertongue[]" multiple size=4 >
    <option value="All" selected>All</option>
    <?php echo createDropDownForMotherTongue($db) ?>
    </select>
    </td>
</tr>
<tr>  
    <td width="15%" align="left" class="vheading">Educational qualification</td>
    <td>
    <select name="highestdegree[]" multiple size=5 >
    <option value='All' selected>All</option>
    <?php echo createDropDownForHighestdegree($db);?>
    </select>
    </td>
</tr>

<tr>
<td width="15%" align="left" class="vheading">Native state</td>
<td>
    <select name="state[]" multiple size=5 >
    <option value="All" selected>All</option>
    <?php echo createDropDownForState($db);?>
    </select><br> <font size="1" face="verdana" color="red">(leave blank if citizenship is not indian)</font>
</td>
</tr>

<tr> 
<td width="15%" align="left" class="vheading">Physical status</td>
<td>
    <input name="physical_status" type="radio" value='N' checked>
    <font class=text > normal </font>&nbsp;
    <input name="physical_status" type="radio" value="D">
    <font class=text> disabled </font></td>
</tr>
<tr>
    <td colspan="2">
    <input type="hidden" name="token_adsearch" value="1">
    <button type="submit" name="searchprofile" value="1" class="btn btn-danger">Search</button>
    </td>
</tr>
</table>
</form>
                            <p>&nbsp;</p></td>
                            <td width="24" >&nbsp;</td>
                            </tr>
                            <tr>
							<td width="24" height="25">&nbsp;</td>
							<td height="24" >&nbsp;</td>
							<td width="25">&nbsp;</td>
							</tr>
                        </table>
                            
                    </td>
<td width="30">&nbsp;</td>
</tr>

</table></td></tr>
</table>