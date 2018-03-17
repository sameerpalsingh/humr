<!--[if IE 8]>
<style type="text/css">
	/* css for IE 8 */
</style>
<![endif]-->

<!--[if lt IE 8]>
	<link href="ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<form method="post" action="profile2_submit.php" name="frmRegistration" onsubmit="return login_validate4();" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<style>
</style>

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
                      <td class="s-title" style="border-bottom:1px solid #CCCCCC">Your Partner Preferences</td>
                    </tr>
                    <tr>
                      <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><font class="text">Age</font></td>
                            <td colspan="3">
							<select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="age">
								<option>---</option>
								<?php
									for($i=18 ;$i<=70;$i++) {
								?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php
									}
								?>
                            </select>
							<font style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif">&nbsp; to &nbsp;</font>
                            <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="uptoage"> <option>---</option>
								<?php
									for($i=18 ;$i<=70;$i++) {
								?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php
									}
								?>
                            </select>
                                </td>
								</tr>
								<tr>
                            <td colspan="4" height="15">&nbsp;</td>
                          </tr>
								  
<tr>
                            <td ><font class="text" valign="center">Marital Status</font></td>
							<!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
								 <td colspan="4">
								<div style="width:165px;height:210px ;float:left;">

									<span style="float:left;" onclick="selectAll('check','6');"> Check All</span>
									<span style="float:right;" onclick="uncheckAll('check','6');" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="check_1" style="display:block;"><input id="check_ms_1" type="checkbox" value="Never Married" name="Never Married" />Never Married</div>
									<div id="check_2" style="display:block;" ><input id="check_ms_2" type="checkbox" value="Awaiting Divorce" name="Awaiting Divorce" />Awaiting Divorce</div>
									<div id="check_3" style="display:block;" ><input id="check_ms_3" type="checkbox" value="Divorced" name="Divorced" />Divorced</div>
									<div id="check_4" style="display:block;" ><input id="check_ms_4" type="checkbox" value="Other" name="Other" />Other</div>
									<div id="check_5" style="display:block;" ><input id="check_ms_5" type="checkbox" value="Widowed" name="Widowed" />Widowed</div>
									<div id="check_6" style="display:block;" ><input id="check_ms_6" type="checkbox" value="Annulled" name="Annulled" />Annulled</div>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Marital Status Here.</span>
									</div>

							
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="check('check');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="check('disp');"/>
							</div>
							<div style="width:165px;height:210px;float:left;">

									<span style="float:left;" onclick="selectAll('disp','6');">Check All</span>
									<span style="float:right;" onclick="uncheckAll('disp','6');" >Uncheck All</span>&nbsp;

									
									
									
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="disp_1" style="display:none;"><input id="disp_ms_1" type="checkbox" value="Never Married" name="mrtstatus[]" />Never Married</div>
									<div id="disp_2" style="display:none;"><input id="disp_ms_2" type="checkbox" value="Awaiting Divorce" name="mrtstatus[]" />Awaiting Divorce</div>
									<div id="disp_3" style="display:none;"><input id="disp_ms_3" type="checkbox" value="Divorced" name="mrtstatus[]" />Divorced</div>
									<div id="disp_4" style="display:none;"><input id="disp_ms_4" type="checkbox" value="Other" name="mrtstatus[]" />Other</div>
									<div id="disp_5" style="display:none;"><input id="disp_ms_5" type="checkbox" value="Widowed" name="mrtstatus[]" />Widowed</div>
									<div id="disp_6" style="display:none;"><input id="disp_ms_6" type="checkbox" value="Annulled" name="mrtstatus[]" />Annulled</div>
									</div>	
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
									</div>
							</td>
                          </tr>

                         <!--<tr>
                            <td ><font class="text" valign="center">Marital Status</font></td>
							
								<td colspan="4">
								<div style="height:150px;width:165px;float:left;">
									<span style="float:left;" onclick="selectAll('check','6');"> Check All</span>
									<span style="float:right;" onclick="uncheckAll('check','6');" >Uncheck All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">

									
									
									<div id="check_1" style="display:block;"><input id="check_ms_1" type="checkbox" value="Never Married" name="Never Married" />Never Married</div>
									<div id="check_2" style="display:block;" ><input id="check_ms_2" type="checkbox" value="Awaiting Divorce" name="Awaiting Divorce" />Awaiting Divorce</div>
									<div id="check_3" style="display:block;" ><input id="check_ms_3" type="checkbox" value="Divorced" name="Divorced" />Divorced</div>
									<div id="check_4" style="display:block;" ><input id="check_ms_4" type="checkbox" value="Other" name="Other" />Other</div>
									<div id="check_5" style="display:block;" ><input id="check_ms_5" type="checkbox" value="Widowed" name="Widowed" />Widowed</div>
									<div id="check_6" style="display:block;" ><input id="check_ms_6" type="checkbox" value="Annulled" name="Annulled" />Annulled</div>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Marital Status Here.</span>
									</div>
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="check('check');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="check('disp');"/>
							</div>
							<div style="width:165px;float:left;">

									<span style="float:left;" onclick="selectAll('disp','6');">Check All</span>
									<span style="float:right;" onclick="uncheckAll('disp','6');" >Uncheck All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;vertical-align:bottom;border:1px solid #CCCCCC;">

									<!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>
									
									<div id="disp_1" style="display:none;"><input id="disp_ms_1" type="checkbox" value="Never Married" name="mrtstatus[]" />Never Married</div>
									<div id="disp_2" style="display:none;"><input id="disp_ms_2" type="checkbox" value="Awaiting Divorce" name="mrtstatus[]" />Awaiting Divorce</div>
									<div id="disp_3" style="display:none;"><input id="disp_ms_3" type="checkbox" value="Divorced" name="mrtstatus[]" />Divorced</div>
									<div id="disp_4" style="display:none;"><input id="disp_ms_4" type="checkbox" value="Other" name="mrtstatus[]" />Other</div>
									<div id="disp_5" style="display:none;"><input id="disp_ms_5" type="checkbox" value="Widowed" name="mrtstatus[]" />Widowed</div>
									<div id="disp_6" style="display:none;"><input id="disp_ms_6" type="checkbox" value="Annulled" name="mrtstatus[]" />Annulled</div>
									</div>	
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
									</div>
							</div>
							</td>

                          </tr>-->
						  <tr>
                            <td colspan="4" height="15">&nbsp;</td>
                          </tr>
						    
                          <tr>
                            <td><font class="text">Height</font></td>
                            <td colspan="3">
                              <select style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
                               name="height">
							   <option>------</option>
                               <option value="1">4' 0&quot; (1.22 mts)</option>

								<option value="2">4' 1&quot; (1.24 mts)</option>
								<option value="3">4' 2&quot; (1.28 mts)</option>
								<option value="4">4' 3&quot; (1.31 mts)</option>
								<option value="5">4' 4&quot; (1.34 mts)</option>
								<option value="6">4' 5&quot; (1.35 mts)</option>

								<option value="7">4' 6&quot; (1.37 mts)</option>
								<option value="8">4' 7&quot; (1.40 mts)</option>
								<option value="9">4' 8&quot; (1.42 mts)</option>
								<option value="10">4' 9&quot; (1.45 mts)</option>
								<option value="11">4' 10&quot; (1.47 mts)</option>

								<option value="12">4' 11&quot; (1.50 mts)</option>
								<option value="13">5' 0&quot; (1.52 mts)</option>
								<option value="14">5' 1&quot; (1.55 mts)</option>
								<option value="15">5' 2&quot; (1.58 mts)</option>
								<option value="16">5' 3&quot; (1.60 mts)</option>

								<option value="17">5' 4&quot; (1.63 mts)</option>
								<option value="18">5' 5&quot; (1.65 mts)</option>
								<option value="19">5' 6&quot; (1.68 mts)</option>
								<option value="20">5' 7&quot; (1.70 mts)</option>
								<option value="21">5' 8&quot; (1.73 mts)</option>

								<option value="22">5' 9&quot; (1.75 mts)</option>
								<option value="23">5' 10&quot; (1.78 mts)</option>
								<option value="24">5' 11&quot; (1.80 mts)</option>
								<option value="25">6' 0&quot; (1.83 mts)</option>
								<option value="26">6' 1&quot; (1.85 mts)</option>

								<option value="27">6' 2&quot; (1.88 mts)</option>
								<option value="28">6' 3&quot; (1.91 mts)</option>
								<option value="29">6' 4&quot; (1.93 mts)</option>
								<option value="30">6' 5&quot; (1.96 mts)</option>
								<option value="31">6' 6&quot; (1.98 mts)</option>

								<option value="32">6' 7&quot; (2.01 mts)</option>
								<option value="33">6' 8&quot; (2.03 mts)</option>
								<option value="34">6' 9&quot; (2.06 mts)</option>
								<option value="35">6' 10&quot; (2.08 mts)</option>
								<option value="36">6' 11&quot; (2.11 mts)</option>

								<option value="37">7' (2.13 mts) plus</option>

								</select >
								<font style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif">&nbsp; to&nbsp;</font>
								<select style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
                                name="uptoheight">
							   <option>------</option>
                               <option value="1">4' 0&quot; (1.22 mts)</option>

								<option value="2">4' 1&quot; (1.24 mts)</option>
								<option value="3">4' 2&quot; (1.28 mts)</option>
								<option value="4">4' 3&quot; (1.31 mts)</option>
								<option value="5">4' 4&quot; (1.34 mts)</option>
								<option value="6">4' 5&quot; (1.35 mts)</option>

								<option value="7">4' 6&quot; (1.37 mts)</option>
								<option value="8">4' 7&quot; (1.40 mts)</option>
								<option value="9">4' 8&quot; (1.42 mts)</option>
								<option value="10">4' 9&quot; (1.45 mts)</option>
								<option value="11">4' 10&quot; (1.47 mts)</option>

								<option value="12">4' 11&quot; (1.50 mts)</option>
								<option value="13">5' 0&quot; (1.52 mts)</option>
								<option value="14">5' 1&quot; (1.55 mts)</option>
								<option value="15">5' 2&quot; (1.58 mts)</option>
								<option value="16">5' 3&quot; (1.60 mts)</option>

								<option value="17">5' 4&quot; (1.63 mts)</option>
								<option value="18">5' 5&quot; (1.65 mts)</option>
								<option value="19">5' 6&quot; (1.68 mts)</option>
								<option value="20">5' 7&quot; (1.70 mts)</option>
								<option value="21">5' 8&quot; (1.73 mts)</option>

								<option value="22">5' 9&quot; (1.75 mts)</option>
								<option value="23">5' 10&quot; (1.78 mts)</option>
								<option value="24">5' 11&quot; (1.80 mts)</option>
								<option value="25">6' 0&quot; (1.83 mts)</option>
								<option value="26">6' 1&quot; (1.85 mts)</option>

								<option value="27">6' 2&quot; (1.88 mts)</option>
								<option value="28">6' 3&quot; (1.91 mts)</option>
								<option value="29">6' 4&quot; (1.93 mts)</option>
								<option value="30">6' 5&quot; (1.96 mts)</option>
								<option value="31">6' 6&quot; (1.98 mts)</option>

								<option value="32">6' 7&quot; (2.01 mts)</option>
								<option value="33">6' 8&quot; (2.03 mts)</option>
								<option value="34">6' 9&quot; (2.06 mts)</option>
								<option value="35">6' 10&quot; (2.08 mts)</option>
								<option value="36">6' 11&quot; (2.11 mts)</option>

								<option value="37">7' (2.13 mts) plus</option>

								</select >
							
                            </font></td>
                          </tr>
						  <tr>
                            <td colspan="4" height="15">&nbsp;</td>
                          </tr>
                          	 
                         <tr>
                            <td><font class="text" valign="center">State(Region)</font></td>
							<!--  <td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
								<td colspan="4">
								<div style="width:165px;height:150px;float:left;">
								<span style="float:left;" onclick="selectAllmt('checkmt','31');">Check All</span>
									<span style="float:right;"onclick="uncheckAllmt('checkmt','31');" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="checkmt_1" style="display:block;" ><input id="checkmt_mt_1" type="checkbox" value="All Hindi" name="All India" />All India</div>
									<div id="checkmt-North" style="font-size: 8pt; color:#CC0033;">North</div>
									
									<div id="checkmt_2" style="display:block;" ><input id="checkmt_mt_2" type="checkbox" value="All Hindi" name="Haryana" />Haryana</div>
									
									<div id="checkmt_3" style="display:block;" ><input id="checkmt_mt_3" type="checkbox" value="Himachal Pradesh" name="Himachal Pradesh" />Himachal Pradesh</div>
									
									<div id="checkmt_4" style="display:block;" ><input id="checkmt_mt_4" type="checkbox" value="Jammu & Kashmir" name="Jammu & Kashmir" />Jammu & Kashmir</div>
									
									<div id="checkmt_5" style="display:block;" ><input id="checkmt_mt_5" type="checkbox" value="Punjab" name="Punjab" />Punjab</div>
									
									<div id="checkmt_6" style="display:block;" ><input id="checkmt_mt_6" type="checkbox" value="Uttaranchal" name="Uttaranchal" />Uttaranchal</div>
									
									<div id="checkmt_7" style="display:block;" ><input id="checkmt_mt_7" type="checkbox" value="Uttar Pradesh" name="Uttar Pradesh" />Uttar Pradesh</div>
									
									<div id="checkmt" style="font-size: 8pt; color:#CC0033;">West</div>
									<div id="checkmt_8" style="display:block;" ><input id="checkmt_mt_8" type="checkbox" value="Andhra Pradesh" name="Andhra Pradesh" />Andhra Pradesh</div>
									
									<div id="checkmt_9" style="display:block;" ><input id="checkmt_mt_9" type="checkbox" value="Chhatishgarh" name="Chhatishgarh" />Chhatishgarh</div>
									
									<div id="checkmt_10" style="display:block;" ><input id="checkmt_mt_10" type="checkbox" value="Goa" name="Goa" />Goa</div>
									
									<div id="checkmt_11" style="display:block;" ><input id="checkmt_mt_11" type="checkbox" value="Gujarat" name="Gujarat" />Gujarat</div>
									
									<div id="checkmt_12" style="display:block;" ><input id="checkmt_mt_12" type="checkbox" value="Rajasthan" name="Rajasthan"/>Rajasthan</div>
									
									<div id="checkmt_13" style="display:block;" ><input id="checkmt_mt_13" type="checkbox" value="Madhya Pradesh " name="Madhya Pradesh " />Madhya Pradesh </div>
									
									<div id="checkmt_14" style="display:block;" ><input id="checkmt_mt_14" type="checkbox" value="Maharashtra" name="Maharashtra " />Maharashtra </div>
									
									<div id="checkmt_15" style="display:block;" ><input id="checkmt_mt_15" type="checkbox" value="Daman &amp; Diu" name="Daman &amp; Diu" />Daman &amp; Diu</div>

									<div id="checkmt-South" style="font-size: 8pt; color:#CC0033;">South</div>
									<div id="checkmt_16" style="display:block;" ><input id="checkmt_mt_16" type="checkbox" value="Orissa" name="Orissa" />Orissa</div>
									
									<div id="checkmt_17" style="display:block;" ><input id="checkmt_mt_17" type="checkbox" value="Karnataka" name="Karnataka" />Karnataka</div>
									
									<div id="checkmt_18" style="display:block;" ><input id="checkmt_mt_18" type="checkbox" value="Kerala " name="Kerala " />Kerala </div>
									
									<div id="checkmt_19" style="display:block;" ><input id="checkmt_mt_19" type="checkbox" value="Tamil Nadu" name="Tamil Nadu" />Tamil Nadu</div>
									
									<div id="checkmt_20" style="display:block;" ><input id="checkmt_mt_20" type="checkbox" value="Lakshadweep/Mahl" name="Lakshadweep/Mahl" />Lakshadweep/Mahl</div>

									<div id="checkmt-East" style="font-size: 8pt; color:#CC0033;">East</div>
									<div id="checkmt_21" style="display:block;" ><input id="checkmt_mt_21" type="checkbox" value="Assam" name="Assam" />Assam</div>

									<div id="checkmt_22" style="display:block;" ><input id="checkmt_mt_22" type="checkbox" value="Arunachal Pradesh" name="Arunachal Pradesh" />Arunachal Pradesh</div>
									
									<div id="checkmt_23" style="display:block;" ><input id="checkmt_mt_23" type="checkbox" value="Bihar" name="Bihar" />Bihar</div>
									
									<div id="checkmt_24" style="display:block;" ><input id="checkmt_mt_24" type="checkbox" value="Jharkhand" name="Jharkhand" />Jharkhand</div>
									
									<div id="checkmt_25" style="display:block;" ><input id="checkmt_mt_25" type="checkbox" value="Sikkim " name="Sikkim " />Sikkim </div>
									
									<div id="checkmt_26" style="display:block;" ><input id="checkmt_mt_26" type="checkbox" value="Manipur" name="Manipur" />Manipur</div>
									
									<div id="checkmt_27" style="display:block;" ><input id="checkmt_mt_27" type="checkbox" value="Mizoram" name="Mizoram" />Mizoram</div>
									
									<div id="checkmt_28" style="display:block;" ><input id="checkmt_mt_28" type="checkbox" value="Meghalaya" name="Meghalaya" />Meghalaya</div>
									
									<div id="checkmt_29" style="display:block;" ><input id="checkmt_mt_29" type="checkbox" value="Nagaland" name="Nagaland" />Nagaland</div>
									
									<div id="checkmt_30" style="display:block;" ><input id="checkmt_mt_30" type="checkbox" value="Tripura" name="Tripura" />Tripura</div>
									
									<div id="checkmt_31" style="display:block;" ><input id="checkmt_mt_31" type="checkbox" value="Foreign origin" name="Foreign origin" />Foreign origin</div>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select State(Region) Here.</span>
							</div>
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="checkmt('checkmt_mt_');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="checkmt('dispmt_mt_');"/>
							</div>
							
							<div style="width:165px;float:left;">

									<span style="float:left;"onclick="selectAllmt('dispmt','31');">Check All </span>
									<span style="float:right;" onclick="uncheckAllmt('dispmt','31');" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<div id="dispmt_1" style="display:none;" ><input id="dispmt_mt_1" type="checkbox" value="All Hindi" name="region[]" />All India</div>
									
									<div id="dispmt" style="font-size: 8pt; color:#CC0033;">North</div>
									<div id="dispmt_2" style="display:none;" ><input id="dispmt_mt_2" type="checkbox" value="Haryana" name="region[]" />Haryana</div>
									
									<div id="dispmt_3" style="display:none;" ><input id="dispmt_mt_3" type="checkbox" value="Himanchal Pradesh" name="region[]" />Himanchal Pradesh</div>
									
									<div id="dispmt_4" style="display:none;" ><input id="dispmt_mt_4" type="checkbox" value="Jammu & Kashmir" name="region[]" />Jammu & Kashmir</div>
									
									<div id="dispmt_5" style="display:none;" ><input id="dispmt_mt_5" type="checkbox" value="Punjab" name="region[]" />Punjab</div>
									
									<div id="dispmt_6" style="display:none;" ><input id="dispmt_mt_6" type="checkbox" value="Uttaranchal" name="region[]" />Uttaranchal</div>
									
									<div id="dispmt_7" style="display:none;" ><input id="dispmt_mt_7" type="checkbox" value="Uttar Pradesh" name="region[]" />Uttar Pradesh</div>
									
									<div id="dispmt" style="font-size: 8pt; color:#CC0033;">West</div>
									<div id="dispmt_8" style="display:none;" ><input id="dispmt_mt_8" type="checkbox" value="Andhra Pradesh" name="region[]"/>Andhra Pradesh</div>
									
									<div id="dispmt_9" style="display:none;" ><input id="dispmt_mt_9" type="checkbox" 
									value="Chhatishgarh" name="region[]" />Chhatishgarh</div>
									
									<div id="dispmt_10" style="display:none;" ><input id="dispmt_mt_10" type="checkbox" value="Goa" 
									name="region[]" />Goa</div>
									
									<div id="dispmt_11" style="display:none;" ><input id="dispmt_mt_11" type="checkbox" value="Gujarat" name="region[]" />Gujarat</div>
									
									<div id="dispmt_12" style="display:none;" ><input id="dispmt_mt_12" type="checkbox" value="Rajasthan" name="region[]" />Rajasthan</div>
									
									<div id="dispmt_13" style="display:none;" ><input id="dispmt_mt_13" type="checkbox" value="Madhya Pradesh" name="region[]" />Madhya Pradesh</div>
									
									<div id="dispmt_14" style="display:none;;" ><input id="dispmt_mt_14" type="checkbox" value="Maharashtra " name="region[]" />Maharashtra </div>
									
									<div id="dispmt_15" style="display:none;" ><input id="dispmt_mt_15" type="checkbox" value="Daman &amp; Diu" name="region[]" />Daman &amp; Diu</div>
									
									<div id="dispmt-South" style="font-size: 8pt; color:#CC0033;">South</div>
									<div id="dispmt_16" style="display:none;" ><input id="dispmt_mt_16" type="checkbox" value="Orissa" name="region[]" />Orissa</div>
									
									<div id="dispmt_17" style="display:none;" ><input id="dispmt_mt_17" type="checkbox" value="Karnataka" name="region[]" />Karnataka</div>
									
									<div id="dispmt_18" style="display:none;" ><input id="dispmt_mt_18" type="checkbox" value="Kerala" name="region[]" />Kerala</div>
									
									<div id="dispmt_19" style="display:none;" ><input id="dispmt_mt_19" type="checkbox" value="Tamil Nadu" name="region[]" />Tamil Nadu</div>
									
									<div id="dispmt_20" style="display:none;" ><input id="dispmt_mt_20" type="checkbox" value="Lakshadweep/Mahl" name="region[]" />Lakshadweep/Mahl</div>

									<div id="dispmt-East" style="font-size: 8pt; color:#CC0033;">East</div>
									<div id="dispmt_21" style="display:none;" ><input id="dispmt_mt_21" type="checkbox" value="Assam" name="region[]" />Assam</div>
									
									<div id="dispmt_22" style="display:none;" ><input id="dispmt_mt_22" type="checkbox" value="Arunanchl Pradesh" name="region[]" />Arunanchl Pradesh</div>
									<div id="dispmt_23" style="display:none;" ><input id="dispmt_mt_23" type="checkbox" value="Bihar" name="region[]" />Bihar</div>
									
									<div id="dispmt_24" style="display:none;" ><input id="dispmt_mt_24" type="checkbox" value="Jharkhand" name="region[]" />Jharkhand</div>
									
									<div id="dispmt_25" style="display:none;" ><input id="dispmt_mt_25" type="checkbox" value="Sikkim" name="region[]" />Sikkim</div>
									
									<div id="dispmt_26" style="display:none;" ><input id="dispmt_mt_26" type="checkbox" value="Manipur" name="region[]" />Manipur</div>
									
									<div id="dispmt_27" style="display:none;" ><input id="dispmt_mt_27" type="checkbox" value="Mizoram" name="region[]" />Mizoram</div>
									
									<div id="dispmt_28" style="display:none;" ><input id="dispmt_mt_28" type="checkbox" value="Meghalaya" name="region[]" />Meghalaya</div>
									
									<div id="dispmt_29" style="display:none;" ><input id="dispmt_mt_29" type="checkbox" value="Nagaland" name="region[]" />Nagaland</div>
									
									<div id="dispmt_30" style="display:none;" ><input id="dispmt_mt_30" type="checkbox" value="Tripuri" name="region[]" />Tripura</div>
									
									<div id="dispmt_31" style="display:none;" ><input id="dispmt_mt_31" type="checkbox" value="Foreign origin" name="region[]" />Foreign origin</div>
									</div>
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
							</div>
							</div>
							</td>
                          </tr>
						    <tr >
                           <td colspan="4" height="15">&nbsp;</td>
                          </tr>
						    <tr>
                            <td><font class="text" valign="center">Religion</font></td>
							<!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
								 <td colspan="4">
								<div style="width:165px;height:210px ;float:left;">

									<span style="float:left;" onclick="selectAllrl('checkrl','10')">Check All</span>
									<span style="float:right;" onclick="uncheckAllrl('checkrl','10')" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="checkrl_1" style="display:block;" ><input id="checkrl_rl_1" type="checkbox" value="Hindu" name="Hindu"/>Hindu</div>
									<!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>-->
									<div id="checkrl_2" style="display:block;" ><input id="checkrl_rl_2" type="checkbox" value="Buddhist" name="Buddhist" />Buddhist</div>
									<div id="checkrl_3" style="display:block;" ><input id="checkrl_rl_3" type="checkbox" value="Christian" name="Christian" />Christian</div>
									<div id="checkrl_4" style="display:block;" ><input id="checkrl_rl_4" type="checkbox" value="Hindu" name="Hindu" />Hindu</div>
									<div id="checkrl_5" style="display:block;" ><input id="checkrl_rl_5" type="checkbox" value="Jain" name="Jain" />Jain</div>
									<div id="checkrl_6" style="display:block;" ><input id="checkrl_rl_6" type="checkbox" value="Jewish" name="Jewish" />Jewish</div>
									<div id="checkrl_7" style="display:block;" ><input id="checkrl_rl_7" type="checkbox" value="Muslim" name="Muslim" />Muslim</div>
									<div id="checkrl_8" style="display:block;" ><input id="checkrl_rl_8" type="checkbox" value="Parsi" name="Parsi" />Parsi</div>
									<div id="checkrl_9" style="display:block;" ><input id="checkrl_rl_9" type="checkbox" value="Sikh" name="Sikh" />Sikh</div>
									<div id="checkrl_10" style="display:block;" ><input id="checkrl_rl_10" type="checkbox" value="Other" name="Other" />Other</div>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Religion Here.</span>
							</div>

							
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="checkrl('checkrl_rl_');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="checkrl('disprl_rl_');"/>
							</div>
							<div style="width:165px;height:210px;float:left;">

									<span style="float:left;" onclick="selectAllrl('disprl','10')">Check All </span>
									<span style="float:right;" onclick="uncheckAllrl('disprl','10')">Uncheck All</span>&nbsp;

									
									
									
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="disprl_1" style="display:none;"><input id="disprl_rl_1" type="checkbox" value="Hindu" name="religion[]" />Hindu</div>
									<!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>-->
									<div id="disprl_2" style="display:none;"><input id="disprl_rl_2" type="checkbox" value="Buddhist" name="religion[]" />Buddhist</div>
									<div id="disprl_3" style="display:none;"><input id="disprl_rl_3" type="checkbox" value="Christian" name="religion[]" />Christian</div>
									<div id="disprl_4" style="display:none;"><input id="disprl_rl_4" type="checkbox" value="Hindu" name="religion[]" />Hindu</div>
									<div id="disprl_5" style="display:none;"><input id="disprl_rl_5" type="checkbox" value="Jain" name="religion[]" />Jain</div>
									<div id="disprl_6" style="display:none;"><input id="disprl_rl_6" type="checkbox" value="Jewish" name="religion[]" />Jewish</div>
									<div id="disprl_7" style="display:none;"><input id="disprl_rl_7" type="checkbox" value="Muslim" name="religion[]" />Muslim</div>
									<div id="disprl_8" style="display:none;"><input id="disprl_rl_8" type="checkbox" value="Parsi" name="religion[]" />Parsi</div>
									<div id="disprl_9" style="display:none;"><input id="disprl_rl_9" type="checkbox" value="Sikh" name="religion[]" />Sikh</div>
									<div id="disprl_10" style="display:none;"><input id="disprl_rl_10" type="checkbox" value="Other" name="religion[]" />Other</div>
									</div>
								
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
							</div>
							</td>
                          </tr>
						
						 <tr>
                            <td colspan="4" height="10">&nbsp;</td>
                          </tr>
							 <tr>
                            <td><font class="text" valign="center">Cast</font></td>
							<!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
							<td colspan="4" >

								<div style="width:165px;float:left;">
									<span style="float:left;" onclick="selectAllcst('checkcst','<?php echo $total_caste;?>')">Check All</span>
									<span style="float:right;" onclick="uncheckAllcst('checkcst','<?php echo $total_caste;?>')" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<?php
									for($c = 1;$c < $total_caste;$c++) {
									?>
									<div id="checkcst_<?php echo $c; ?>" style="display:block;">
									<input id="checkcst_cheese_<?php echo $c; ?>" type="checkbox" value="<?php echo $caste_name[$c]; ?>" name="Buddhist"/><?php echo $caste_name[$c]; ?></div>
									<?php
									}
									?>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Cast Here.</span>
							</div>
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="checkcst('checkcst_cheese_','<?php echo $total_caste;?>');"/><br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="checkcst('dispcst_cheese_','<?php echo $total_caste;?>');"/>	
							</div>
							<div style="width:165px;float:left;">

									<span style="float:left;"  onclick="selectAllcst('dispcst','<?php echo $total_caste;?>')">Check All</span>
									<span style="float:right;" onclick="uncheckAllcst('dispcst','<?php echo $total_caste;?>')"> Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<?php
									for($c = 1;$c < $total_caste;$c++) {
									?>
									<div id="dispcst_<?php echo $c; ?>" style="display:none;">
									<input id="dispcst_cheese_<?php echo $c; ?>" type="checkbox" value="<?php echo $caste_name[$c]; ?>" name="cast[]"/><?php echo $caste_name[$c]; ?></div>
									<?php
									}
									?>
									</div>
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
							</div>

							</td>
                          </tr>
						  <tr>
                            <td colspan="4" height="15">&nbsp;</td>
                          </tr>
						   
						    <tr>
                            <td><font class="text" valign="center">Annual Income</font></td>
							<!--<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">-->
								 <td colspan="4">
								
								<div style="width:165px;height:215px;float:left;">
									<span style="float:left;" onclick="selectAllan('checkan','21')">Check All</span>
									<span style="float:right;" onclick=" uncheckAllan('checkan','21')" >Uncheck All</span>&nbsp;

									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;border:1px solid #CCCCCC;">
									<div id="checkan_1" style="display:block;" ><input id="checkan_an_1" type="checkbox" value="No Income" name=""/>No Income</div>
									<div id="checkan_2" style="display:block;" ><input id="checkan_an_2" type="checkbox" value="Under Rs.50,000" name="Under Rs.50,000"/>Under Rs.50,000</div>
									<div id="checkan_3" style="display:block;" ><input id="checkan_an_3" type="checkbox" value="Rs.50,001 - 1,00,000" name="Rs.50,001 - 1,00,000"/>Rs.50,001-1,00,000</div>
									<div id="checkan_4" style="display:block;" ><input id="checkan_an_4" type="checkbox" value="Rs.1,00,001 - 2,00,000" name="Rs.1,00,001 - 2,00,000"/>Rs.1,00,001-2,00,000</div>
									<div id="checkan_5" style="display:block;" ><input id="checkan_an_5" type="checkbox" value="Rs.2,00,001 - 3,00,000" name="Rs.2,00,001 - 3,00,000"/>Rs.2,00,001-3,00,000</div>
									<div id="checkan_6" style="display:block;" ><input id="checkan_an_6" type="checkbox" value="Rs.3,00,001 - 4,00,000" name="Rs.3,00,001 - 4,00,000"/>Rs.3,00,001-4,00,000</div>
									<div id="checkan_7" style="display:block;" ><input id="checkan_an_7" type="checkbox" value="Rs.4,00,001 - 5,00,000" name="Rs.4,00,001 - 5,00,000"/>Rs.4,00,001-5,00,000</div>
									<div id="checkan_8" style="display:block;" ><input id="checkan_an_8" type="checkbox" value="Rs.5,00,001 - 7,50,000" name="Rs.5,00,001 - 7,50,000"/>Rs.5,00,001-7,50,000</div>
									<div id="checkan_9" style="display:block;" ><input id="checkan_an_9" type="checkbox" value="Rs.7,50,001 - 10,00,000" name="Rs.7,50,001 - 10,00,000"/>Rs.7,50,001-10,00,000</div>
									<div id="checkan_10" style="display:block;" ><input id="checkan_an_10" type="checkbox" value="Rs.10,00,001 - 15,00,000" name="Rs.10,00,001 - 15,00,000"/>Rs.10,00,001-15,00,000</div>
									<div id="checkan_11" style="display:block;" ><input id="checkan_an_11" type="checkbox" value="Rs.15,00,001 - 20,00,000" name="Rs.15,00,001 - 20,00,000"/>Rs.15,00,001-20,00,000</div>
									<div id="checkan_12" style="display:block;" ><input id="checkan_an_12" type="checkbox" value="Rs.20,00,001 - 25,00,000" name="Rs.20,00,001 - 25,00,000"/>Rs.20,00,001-25,00,000</div>
									<div id="checkan_13" style="display:block;" ><input id="checkan_an_13" type="checkbox" value="Rs.25,00,001 and above" name="Rs.25,00,001 and above"/>Rs.25,00,001 and above</div>
									<div id="checkan_14" style="display:block;" ><input id="checkan_an_14" type="checkbox" value="Under $25,000" name="Under $25,000"/>Under $25,000</div>
									<div id="checkan_15" style="display:block;" ><input id="checkan_an_15" type="checkbox" value="$25,001 - 40,000" name="$25,001 - 40,000"/>$25,001-40,000</div>
									<div id="checkan_16" style="display:block;" ><input id="checkan_an_16" type="checkbox" value="$40,001 - 60,000" name="$40,001 - 60,000"/>$40,001-60,000</div>
									<div id="checkan_17" style="display:block;" ><input id="checkan_an_17" type="checkbox" value="$60,001 - 80,000" name="$60,001 - 80,000"/>$60,001-80,000</div>
									<div id="checkan_18" style="display:block;" ><input id="checkan_an_18" type="checkbox" value="$80,001-100,000" name="$80,001-100,000"/>$80,001-100,000</div>
									<div id="checkan_19" style="display:block;" ><input id="checkan_an_19" type="checkbox" value="$100,001 - 150,000" name="$100,001 - 150,000"/>$100,001-150,000</div>
									<div id="checkan_20" style="display:block;" ><input id="checkan_an_20" type="checkbox" value="$150,001 - 200,000" name="$150,001 - 200,000"/>$150,001-200,000</div>
									<div id="checkan_21" style="display:block;" ><input id="checkan_an_21" type="checkbox" value="$200,001 and above" name="$200,001 and above"/>$200,001 and above</div>
									</div>
									<span id='div_sel_lang' style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_sel_lang'style="float:left;">Select Annual Income Here.</span>
							</div>
							<div style="float:left;margin: 55px 15px;">
								<input type="button" value=">>" name="btnhide" style="height: 20px; width: 30px" onclick="checkan('checkan_an_');"/>			<br/><br/>
								<input type="button" value="<<" name="btnShow" style="height: 20px; width: 30px" onclick="checkan('dispan_an_');"/>
							</div>
							<div style="width:165px;height:215px;float:left;">

									<span style="float:left;" onclick="selectAllan('dispan','21')">Check All </span>
									<span style="float:right;" onclick="uncheckAllan('dispan','21')">Uncheck All</span>&nbsp;

									
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:165px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<!--<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>-->
									<div id="dispan_1" style="display:none;"><input id="dispan_an_1" type="checkbox" value="No" name="" />No Income</div>
									<div id="dispan_2" style="display:none;"><input id="dispan_an_2" type="checkbox" value="Under Rs.50,000" name="income[]" />Under Rs.50,000</div>
									<div id="dispan_3" style="display:none;"><input id="dispan_an_3" type="checkbox" value="Rs.50,001 - 1,00,000" name="income[]" />Rs.50,001-1,00,000</div>
									<div id="dispan_4" style="display:none;"><input id="dispan_an_4" type="checkbox" value="Rs.1,00,001 - 2,00,000" name="income[]" />Rs.1,00,001-2,00,000</div>
									<div id="dispan_5" style="display:none;"><input id="dispan_an_5" type="checkbox" value="Rs.2,00,001 - 3,00,000" name="income[]" />Rs.2,00,001-3,00,000</div>
									<div id="dispan_6" style="display:none;"><input id="dispan_an_6" type="checkbox" value="Rs.3,00,001 - 4,00,000" name="income[]" />Rs.3,00,001-4,00,000</div>
									<div id="dispan_7" style="display:none;"><input id="dispan_an_7" type="checkbox" value="Rs.4,00,001 - 5,00,000" name="income[]" />Rs.4,00,001-5,00,000</div>
									<div id="dispan_8" style="display:none;"><input id="dispan_an_8" type="checkbox" value="Rs.5,00,001 - 7,50,000" name="income[]" />Rs.5,00,001-7,50,000</div>
									<div id="dispan_9" style="display:none;"><input id="dispan_an_9" type="checkbox" value="Rs.7,50,001 - 10,00,000" name="income[]" />Rs.7,50,001-10,00,000</div>
									<div id="dispan_10" style="display:none;"><input id="dispan_an_10" type="checkbox" value="Rs.10,00,001 - 15,00,000" name="income[]" />Rs.10,00,001-15,00,000</div>
									<div id="dispan_11" style="display:none;"><input id="dispan_an_11" type="checkbox" value="Rs.15,00,001 - 20,00,000" name="income[]" />Rs.15,00,001-20,00,000</div>
									<div id="dispan_12" style="display:none;"><input id="dispan_an_12" type="checkbox" value="Rs.20,00,001 - 25,00,000" name="income[]" />Rs.20,00,001-25,00,000</div>
									<div id="dispan_13" style="display:none;"><input id="dispan_an_13" type="checkbox" value="Rs.25,00,001 and above" name="income[]" />Rs.25,00,001 and above</div>
									<div id="dispan_14" style="display:none;"><input id="dispan_an_14" type="checkbox" value="Under $25,000" name="income[]" />Under $25,000</div>
									<div id="dispan_15" style="display:none;"><input id="dispan_an_15" type="checkbox" value="$25,001 - 40,000" name="income[]" />$25,001-40,000</div>
									<div id="dispan_16" style="display:none;"><input id="dispan_an_16" type="checkbox" value="$40,001 - 60,000" name="income[]" />$40,001-60,000</div>
									<div id="dispan_17" style="display:none;"><input id="dispan_an_17" type="checkbox" value="$60,001 - 80,000" name="income[]" />$60,001-80,000</div>
									<div id="dispan_18" style="display:none;"><input id="dispan_an_18" type="checkbox" value="$80,001 - 100,000" name="income[]" />$80,001-100,000</div>
									<div id="dispan_19" style="display:none;"><input id="dispan_an_19" type="checkbox" value="$100,001 - 150,000" name="income[]" />$100,001-150,000</div>
									<div id="dispan_20" style="display:none;"><input id="dispan_an_20" type="checkbox" value="$150,001 - 200,000" name="income[]" />$150,001-200,000</div>
									<div id="dispan_21" style="display:none;"><input id="dispan_an_21" type="checkbox" value="$200,001 and above" name="income[]" />$200,001 and above</div>
									</div>
									<span id='divlang'  style="font-size: 8pt; font-family: arial, verdana, sans-serif;color:#d50033;" name='div_lang'>Must Be Checked.</span>
									</div>

							</div>
							</td>
                          </tr>
						  <tr>
                            <td colspan="4" height="25">&nbsp;</td>
                          </tr>
						   
                          <tr>
                            <td><font class="text">Describe your desired partner</font></td>
                            <td colspan="2"
							  style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your expectations & what you’re looking for.<br/>
							  <span style="float:left;" style="font-size: 12pt; width: 335px; font-family: arial, verdana, sans-serif" > 
							<textarea name="described_partner" id="about_your_partner" cols="40" rows="5" class="fl" onKeyDown="limitText(this.form.described_partner,this.form.countdown,500);" 
								onKeyUp="limitText(this.form.described_partner,this.form.countdown);"></textarea><br/>
							<span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 100)</span>
							<span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="described_partner_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
							</span>
							</span>
							
							</td>
							</tr>
                        
                         <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="3" align="left">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" width="200">&nbsp;
                                <input type="hidden" value="1" name="Token" /></td>
                            <td colspan="3" ><font face="verdana" size="2">
                                  <input type="image" src="images/save_exit_btn.png" name="submit" style="float:left;"/ >
								
                              </font><font face="arial" size="2">&nbsp;</font></td>
							  <td align="left" colspan="4">  <a href="#" style="float:left;color:#057ec3; font-size:14px; font-family: arial, verdana, sans-serif " ><br />Skip To Upload Photo</a></td>
                          </tr>
                        </tbody>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </form>
