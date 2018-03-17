<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
				  <td>&nbsp;</td>
                  
				  <td valign="top">&nbsp;</td>
				  <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="30">&nbsp;</td>
                    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="24" height="25">&nbsp;</td>
                    <td  >&nbsp;</td>
                    <td width="25" align="right">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="24" >&nbsp;</td>
                    <td valign="top" align="center">
                    <table class="box2" cellspacing="2" cellpadding="1" width="73%" border="0">
                    <tbody>
                    <tr>
                    <td width="625" colspan="6" align="left" valign="middle"><div align="center"><b class="heading">
                    <?php $nam=explode(" ",$_SESSION['sess_full_name']);
						$nam1=$nam[0];
						echo ucwords($nam1); ?>, you can refine your search here.</b></div></td>
                    </tr>
                    </tbody>
                    </table>
                    <br/>
 <table width="626" border="0">
 <tbody>
 </tbody>
 </table>
 <form method="GET" name="frmAdvancedSearch" action="advanced_search_submit.php" >
 <table class=box2 width=73%>
 <tr> <td width="44">&nbsp;</td>
 <td align="left" class=text>Searching for</td>
 <td colspan="4" align="left"><!--<input type="hidden" name='gender' value=
					  <?php if($quick['gender']=='M') {
						  echo "F";
					  }
					  else{
						  echo "M";
					  }
					  ?>
					  ><font face="verdana" size="2">
 <?php if($quick['gender']=='M') {
						  echo "Female";
					  }
					  else{
						  echo "Male";
					  }
					  ?>
                           </font>-->
						   <select name="gender" class="content" >
                          <option value="M" <?php if($quick['gender']=="F") { echo "selected";}?>>Male</option>
                          <option value="F" <?php if($quick['gender']=="M") { echo "selected";}?>>Female</option>
                      </select></td>
                           </tr>
 <tr bgcolor="">
 <td>&nbsp;</td>
                           <td width="110" align="left"><font class=text><b>Age</b></font></td>
                           <td width="490" colspan=4 align="left"><font face=verdana size=2>
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
                              </font></td>
                          </tr>
 <tr bgcolor="">
 <td>&nbsp;</td>
                            <td width="110" align="left"><font class=text><b>Marital status</b></font></td>
                            <td width="490" colspan=4 align="left"><font face=verdana size=2>
                              <select name="marital_status" >
                              <option value="All" selected>All</option>
                              <option value="1">Never Married</option>
                              <option value="2">Awaiting Divorce</option>
                              <option value="3">Divorced</option>
                              <option value="4">Widowed</option>
                              <option value="5">Annulled</option>
                              <option value="6">Married</option>
                              </select>
                              </font></td>
                            </tr>

                            <tr bgcolor="">  <td>&nbsp;</td>
                            <td width="110" align="left"><font class=text><b>Height</b></font></td>
                            <td width="490" colspan="4" align="left"><font face="verdana" size=2>
                            <select  name="height[]" multiple size=5 >
							<option value="All" selected> All</option>
                            <?php echo createDropDownForHeight($db); ?>
                            </select>
                            </font></td>
                            </tr>
                            <tr bgcolor="">
                           
                           
<tr bgcolor="">  <td>&nbsp;</td>
                            <td width="110" align="left"><font class=text><b>Relegion</b></font></td>
                            <td width="490" colspan=4 align="left"><font face=verdana size=2>
                            <select name="religion[]" size=1 multiple >
							<option value='All' selected>All</option>
							<option value=1>hindu</option>
							<option value=2>muslim</option>
							<option value=3>sikh</option>
							<option value=4>christian</option>
							<option value=5>budhist</option>
							<option value=6>jain</option>
							<option value=7>bahai</option>
							<option value=8>parasi</option>
                            </select>
	                        </font></td>
                            </tr>
<tr bgcolor=""> <td>&nbsp;</td>
                            
							<td width="110" align="left"><font class=text><b>Caste</b></font></td>
                            <td width="490" colspan=4 align="left"><select  name="caste[]" multiple size=10>
                            <option value="All" selected>All</option>
                            <?php echo createDropDownForCaste($db); ?></select>
</td>
</tr>
<tr bgcolor="">  <td>&nbsp;</td>
                            <td width="110" align="left"><font class=text><b>Mother tongue</b></font></td>
                            <td width="490" colspan=4 align="left"><font face=verdana size=2>
                            <select  name="mothertongue[]" multiple size=4 >
                            <option value="All" selected>All</option>
                            <?php echo createDropDownForMotherTongue($db) ?>
                            </select>
                            </font></td>
</tr>
<tr bgcolor="">  <td>&nbsp;</td>
                            <td width="110" align="left"><font class=text><b>Educational qualification</b>
                            </font></td>
                            <td width="490" colspan=4 align="left"><font face=verdana  size=2>
                            <select name="highestdegree[]" multiple size=5 >
                            <option value='All' selected>All</option>
                            <?php echo createDropDownForHighestdegree($db);?>
                            </select>
</font></td>
</tr>
<tr bgcolor=""> <td>&nbsp;</td>
<td align="left"><font class=text><b>Native state</b></font></td>
<td  colspan=4 align="left"><select name="state[]" multiple size=5 >
                            <option value="All" selected>All</option>
                            <?php echo createDropDownForState($db);?>
                            </select><br> <font size="1" face="verdana" color="red">(leave blank if citizenship is not indian)</font></td>
</tr>

<tr bgcolor=""> <td>&nbsp;</td>
<td align=left ><font class=text><b>Physical status</b></font></td>
                            <td  colspan=4 align="left"><font>
                            <input name="physical_status" type="radio" value='N' checked>
                            <font class=text > normal </font>&nbsp;
                            <input name="physical_status" type="radio" value="D">
                            <font class=text> disabled </font></td>
</tr>
 
<tr>
<td>
&nbsp;
</td>
</tr>

<tr>
                            <th height="5" colspan=4><font color="#ffffff" size="2" face="verdana">
                            <input type="hidden" name="token_adsearch" value="1">
                            <input type="image" src="<?php echo DIR_WS_IMAGES;?>search.jpg" name="searchprofile" value=1>
</font></th>
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
							</table></td>
<td width="30">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
			                <td valign="top">&nbsp;</td>
						    <td>&nbsp;</td>
							</tr>
							<tr>
							<td>&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td>&nbsp;</td>
							</tr>
</table></td></tr>
</table>