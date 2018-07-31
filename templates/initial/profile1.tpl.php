<form method="post" action="profile1_submit.php" name="frmRegistration" onsubmit="return login_validate3();" >
<table width="100%" border="0" cellpadding="0" cellspacing="0">
					
				<?php
				if (isset($message))
				{
					?>
					<tr>
					  <td><?php echo $message; ?></td>
					</tr>
					<?php
				}
				?>
                    <tr>
                      <td class="s-title" colspan="2">Your Education &amp; Professional Details</td>
                      <td class="s-title" align="right" width="25%">Step-4</td>
                    
                    <tr>
                      <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								</table>
							</td>
                          </tr>
                       <tr>
					        <td width="25%" ><font class="text" >Educational Background </font></td>
                            <td  colspan="2"style="font-size: 11px; font-family: arial, verdana, sans-serif">Write about your educational qualifications, place of study etc.<br/>
							<textarea name="educational_background" id="education" cols="15" rows="2" style="width: 300px;" onkeydown="fixme(this)" onblur="fixme(this)"></textarea>
							</td>
						</tr>
							
						 <tr>
                            <td colspan="4" height="10"></td>
                          </tr>
                        <tr>
                            <td><font class="text">Work Status </font></td>
                            <td colspan="3"><font class="text">
                              <select
                               style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                               name="workstatus">
                                
								<!--
                                <?php
                                    echo createDropDownForWorkStatus($db,$workstatus);
                                ?>
								-->
								<option value="0" selected="selected">-Select any One-</option>
                                <option value="1">Not Working</option>
                                <option value="2">Employed</option>
                                <option value="3">Entrepreneur</option>
								<option value="4">Consultant</option>
                                <option value="5">Student</option>
                                <option value="6">Academia</option>
								<option value="7">Defence</option>
								<option value="8">Independent Worker/Freelancer</option>
                                </select>
                            </font></td>
                          </tr>
						   <tr>
                            <td colspan="4" height="8"></td>
                          </tr>
						  <tr>
					        <td width="25%" ><font class="text" >Professional Background </font></td>
                            <td  colspan="2"style="font-size: 11px; font-family: arial, verdana, sans-serif">Write about your current and past work experience.<br/>
							<textarea name="professional_background" id="about_yourself" cols="15" rows="2" style="width: 300px;" onkeydown="fixme(this)" onblur="fixme(this)"	></textarea>
							</td>
						</tr>
						   <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						 <tr>
                      <td class="s-title" colspan="4">Additional Details About You</td>
                    </tr>
					  <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><font class="text">Blood Group</font></td>
                            <td colspan="3"><font class="text">
                              <select
                               style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                                name="bloodgroup">
                                <option value="0" selected="selected">-Select One-</option>
                                <!--<?php
                                    echo createDropDownForbloodgroup($db,$bloodgroup);
                                ?>-->
								<option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
								<option value="4">B-</option>
                                <option value="5">AB+</option>
                                <option value="6">AB-</option>
								<option value="7">O+</option>
								<option value="8">O-</option>
                              </select>
                            </font></td>
                          </tr>
						    <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                                             
                          <tr>
                            <td><font class="text">Physically challenged</font></td>
                            <td colspan="3"><font class="text">
                              <select
                               style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                               name="physicalstatus">
                                <option value="0" selected="selected">-Select any one-</option>
                                <option value="1">None</option>
                                <option value="2">Physically Handicapped from birth</option>
                                <option value="3">Physically Handicapped due to accident</option>
                                <option value="4">Mentally Challenged from birth</option>
                                <option value="5">Mentally Challenged due to accident</option>
                                </select>
                            </font></td>
                          </tr>
						   <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                            <tr>
                            <td><font class="text">Nature Of Handicap</font></td>
                            <td colspan="3"><font class="text">
                              <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                              name="nature_handicap">
                                <option value="0" selected="selected">-Select any one-</option>
								<option value="1">None</option>
                                <option value="2">Cripple</option>
                                <option value="3">Hearing Impaired</option>
                                <option value="4">Visually Impaired</option>
                                <option value="5">Speech Impaired</option>
                                <option value="6">Others</option>
                                </select>
                            </font></td>
                          </tr>
                          
						 <tr>
                            <td colspan="4" height="18"></td>
                          </tr>
                          <tr>
                            <td><font class="text">Spoken languages </font></td>
							<td colspan="4" height="6">
								<div style="height:150px;width:163px;float:left;">

									<span style="float:left;" onclick="selectAll('check','26');">Check All</span>
									<span style="float:right;" onclick="uncheckAll('check','26');" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:163px;border:1px solid #CCCCCC;">
									<div id="check_1" style="display:block;" ><input id="check_sl_1" type="checkbox" value="Arabic" name="Arabic" />Arabic</div>
									<div id="check_2" style="display:block;"><input id="check_sl_2" type="checkbox" value="Assamese" name="Assamese" />Assamese</div>
									<div id="check_3" style="display:block;"><input id="check_sl_3" type="checkbox" value="Bengali" name="Bengali" />Bengali</div>
									<div id="check_4" style="display:block;"><input id="check_sl_4" type="checkbox" value="English" name="English" />English</div>
									<div id="check_5" style="display:block;"><input id="check_sl_5" type="checkbox" value="French" name="French" />French</div>
									<div id="check_6" style="display:block;"><input id="check_sl_6" type="checkbox" value="German" name="German" />German</div>
									<div id="check_7" style="display:block;"><input id="check_sl_7" type="checkbox" value="Gujarati" name="Gujarati" />Gujarati</div>
									<div id="check_8" style="display:block;"><input id="check_sl_8" type="checkbox" value="Hindi" name="Hindi" />Hindi</div>
									<div id="check_9" style="display:block;"><input id="check_sl_9" type="checkbox" value="Kannada" name="Kannada" />Kannada</div>
									<div id="check_10" style="display:block;"><input id="check_sl_10" type="checkbox" value="Kannada" name="Kannada" />Kashmiri</div>
									<div id="check_11" style="display:block;"><input id="check_sl_11" type="checkbox" value="Konkani" name="Konkani" />Konkani</div>
									<div id="check_12" style="display:block;"><input id="check_sl_12" type="checkbox" value="Kutchi" name="Kutchi" />Kutchi</div>
									<div id="check_13" style="display:block;"><input id="check_sl_13" type="checkbox" value="Malayalam" name="Malayalam" />Malayalam</div>
									<div id="check_14" style="display:block;"><input id="check_sl_14" type="checkbox" value="Mandarin" name="Mandarin" />Mandarin</div>
									<div id="check_15" style="display:block;"><input id="check_sl_15" type="checkbox" value="Marathi" name="Marathi" />Marathi</div>
									<div id="check_16" style="display:block;"><input id="check_sl_16" type="checkbox" value="Marwadi" name="Marwadi" />Marwadi</div>
									<div id="check_17" style="display:block;"><input id="check_sl_17" type="checkbox" value="Oriya" name="Oriya" />Oriya</div>
									<div id="check_18" style="display:block;"><input id="check_sl_18" type="checkbox" value="Portuguese" name="Portuguese" />Portuguese</div>
									<div id="check_19" style="display:block;"><input id="check_sl_19" type="checkbox" value="Punjabi" name="Punjabi" />Punjabi</div>
									<div id="check_20" style="display:block;"><input id="check_sl_20" type="checkbox" value="Pushto" name="Pushto" />Pushto</div>
									<div id="check_21" style="display:block;"><input id="check_sl_21" type="checkbox" value="Sindhi" name="Sindhi" />Sindhi</div>
									<div id="check_22" style="display:block;"><input id="check_sl_22" type="checkbox" value="Spanish" name="Spanish" />Spanish</div>
									<div id="check_23" style="display:block;"><input id="check_sl_23" type="checkbox" value="Tamil" name="Tamil" />Tamil</div>
									<div id="check_24" style="display:block;"><input id="check_sl_24" type="checkbox" value="Telugu" name="Telugu" />Telugu</div>
									<div id="check_25" style="display:block;"><input id="check_sl_25" type="checkbox" value="Tulu" name="Tulu" />Tulu</div>
									<div id="check_26" style="display:block;"><input id="check_sl_26" type="checkbox" value="Urdu" name="Urdu" />Urdu</div>
								</div>
								<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Language Here.</span>
							</div>
														<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 50px" onclick="check('check');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 50px" onclick="check('disp');"/>
							</div>

							
							<div style="width:163px;float:left;">
									<span style="float:left;" onclick="selectAll('disp','26');">Check All </span>
									<span style="float:right;" onclick="uncheckAll('disp','26');">Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:163px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<div id="disp_1" style="display:none;"><input id="disp_sl_1" type="checkbox" value="Arabic" name="spoken[]" />Arabic</div>
									<div id="disp_2" style="display:none;"><input id="disp_sl_2" type="checkbox" value="Assamese" name="spoken[]" />Assamese</div>
									<div id="disp_3" style="display:none;"><input id="disp_sl_3" type="checkbox" value="Bengali" name="spoken[]" />Bengali</div>
									<div id="disp_4" style="display:none;"><input id="disp_sl_4" type="checkbox" value="English" name="spoken[]" />English</div>
									<div id="disp_5" style="display:none;"><input id="disp_sl_5" type="checkbox" value="French" name="spoken[]" />French</div>
									<div id="disp_6" style="display:none;"><input id="disp_sl_6" type="checkbox" value="German" name="spoken[]" />German</div>
									<div id="disp_7" style="display:none;"><input id="disp_sl_7" type="checkbox" value="Gujarati" name="spoken[]" />Gujarati</div>
									<div id="disp_8" style="display:none;"><input id="disp_sl_8" type="checkbox" value="Hindi" name="spoken[]" />Hindi</div>
									<div id="disp_9" style="display:none;"><input id="disp_sl_9" type="checkbox" value="Kannada" name="spoken[]" />Kannada</div>
									<div id="disp_10" style="display:none;"><input id="disp_sl_10" type="checkbox" value="Kashmiri" name="spoken[]" />Kashmiri</div>
									<div id="disp_11" style="display:none;"><input id="disp_sl_11" type="checkbox" value="Konkani" name="spoken[]" />Konkani</div>
									<div id="disp_12" style="display:none;"><input id="disp_sl_12" type="checkbox" value="Kutchi" name="spoken[]" />Kutchi</div>
									<div id="disp_13" style="display:none;"><input id="disp_sl_13" type="checkbox" value="Malayalam" name="spoken[]" />Malayalam</div>
									<div id="disp_14" style="display:none;"><input id="disp_sl_14" type="checkbox" value="Mandarin" name="spoken[]" />Mandarin</div>
									<div id="disp_15" style="display:none;"><input id="disp_sl_15" type="checkbox" value="Marathi" name="spoken[]" />Marathi</div>
									<div id="disp_16" style="display:none;"><input id="disp_sl_16" type="checkbox" value="Marwadi" name="spoken[]" />Marwadi</div>
									<div id="disp_17" style="display:none;"><input id="disp_sl_17" type="checkbox" value="Oriya" name="spoken[]" />Oriya</div>
									<div id="disp_18" style="display:none;"><input id="disp_sl_18" type="checkbox" value="Portuguese" name="spoken[]" />Portuguese</div>
									<div id="disp_19" style="display:none;"><input id="disp_sl_19" type="checkbox" value="Punjabi" name="spoken[]" />Punjabi</div>
									<div id="disp_20" style="display:none;"><input id="disp_sl_20" type="checkbox" value="Pushto" name="spoken[]" />Pushto</div>
									<div id="disp_21" style="display:none;"><input id="disp_sl_21" type="checkbox" value="Sindhi" name="spoken[]" />Sindhi</div>
									<div id="disp_22" style="display:none;"><input id="disp_sl_22" type="checkbox" value="Spanish" name="spoken[]" />Spanish</div>
									<div id="disp_23" style="display:none;"><input id="disp_sl_23" type="checkbox" value="Tamil" name="spoken[]" />Tamil</div>
									<div id="disp_24" style="display:none;"><input id="disp_sl_24" type="checkbox" value="Telugu" name="spoken[]" />Telugu</div>
									<div id="disp_25" style="display:none;"><input id="disp_sl_25" type="checkbox" value="Tulu" name="spoken[]" />Tulu</div>
									<div id="disp_26" style="display:none;"><input id="disp_sl_26" type="checkbox" value="Urdu" name="spoken[]" />Urdu</div>
								</div>
								<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Language Must Be Checked.</span>
							</td>
                          </tr>
						   <tr>
                            <td colspan="4" height="35"></td>
                          </tr>
						 
                           <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="3" align="left">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" width="90">&nbsp;
                                <input type="hidden" value="1" name="Token" /></td>
                            <td align="left"><font face="verdana" size="2">
                             <input type="image" src="images/save_cont_btn.png" name="submit" style="float:left;"/ >
							 </font></td>
							</tr>

							<tr>
                              <td><font face="arial" size="2">&nbsp;</font></td>
							  <td align="right" valign="top" colspan="3">  
							  <a href="profile2.php" style="color:#057ec3; font-size:14px; font-family: arial, verdana, sans-serif " ><br />Skip to Next page</a></td>

                          </tr> 
                        </tbody>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </form>
<script type="text/javascript">
function fixme(element)
{
    if(element.value != '')
    {
        var val = element.value;
        var pattern = new RegExp('[ ]+', 'g');
        val = val.replace(pattern, ' ');
        element.value = val;
    }
}
</script>