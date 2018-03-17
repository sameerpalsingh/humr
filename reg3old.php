<form method="post" action="" name="frmRegistration4" onsubmit="return login_validate4();" >

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
							<font style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif">&nbsp; to&nbsp;</font>
                            <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="toage"> <option>---</option>
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
                            <td colspan="4" height="6"></td>
                          </tr>
                         <tr>
                            <td><font class="text" valign="center">Marital Status</font></td>
							<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">
								<div style="height:150px;width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;" onclick="selectAll('check','6');">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<div id="check_0" style="display:block;" ></div>
									<div id="check_1" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_1');" type="checkbox" name="" value=""/ >&nbsp;Never Married</div>
									<div id="check_2" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_2');" type="checkbox" name="" value=""/ >&nbsp;Awaiting Divorce</div>
									<div id="check_3" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_3');" type="checkbox" name="" value=""/ >&nbsp;Divorced</div>
									<div id="check_4" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_4');" type="checkbox" name="" value=""/ >&nbsp;Other</div>
									<div id="check_5" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_5');" type="checkbox" name="" value=""/ >&nbsp;Widowed</div>
									<div id="check_6" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="check('check_6');" type="checkbox" name="" value=""/ >&nbsp;Annulled</div>
									</div>
							</div>
							<div style="float:left;">&nbsp; &nbsp;</div>
							<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;" onclick="selectAll('disp','6');">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<span style="color: rgb(10, 137, 254);margin:15px;">------------</span><br />
									<div id="disp_0" style="display:block;" ></div>
									<div id="disp_1" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_1');" type="checkbox" name="" value=""/ >&nbsp;Never Married</div>
									<div id="disp_2" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_2');" type="checkbox" name="" value=""/ >&nbsp;Awaiting Divorce</div>
									<div id="disp_3" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_3');" type="checkbox" name="" value=""/ >&nbsp;Divorced</div>
									<div id="disp_4" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_4');" type="checkbox" name="" value=""/ >&nbsp;Other</div>
									<div id="disp_5" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_5');" type="checkbox" name="" value=""/ >&nbsp;Widowed</div>
									<div id="disp_6" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="check('disp_6');" type="checkbox" name="" value=""/ >&nbsp;Annulled</div>
									</div>	
									</div>
							</div>
							</td>
                          </tr>
						    <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><font class="text">Height</font></td>
                            <td colspan="3">
                              <select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
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
								<select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      name="toheight">
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
                            <td colspan="4" height="6"></td>
                          </tr>
                         <tr>
                            <td><font class="text" valign="center">Mother Tongue</font></td>
							<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">
								<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<div id="checkmt_0" style="display:block;" ></div>
									<div id="checkmt_1" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt_1');" type="checkbox" name="" value=""/ >&nbsp;All Hindi</div>
									<div id="checkmt-North" style="font-size: 8pt; color:#CC0033;">North</div>
									<div id="checkmt-North_2" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_2');" type="checkbox" name="" value=""/ >&nbsp;All Hindi</div>
									<div id="checkmt-North_3" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_3');" type="checkbox" name="" value=""/ >&nbsp;Hindi/ Delhi</div>
									<div id="checkmt-North_4" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_4');" type="checkbox" name="" value=""/ >&nbsp;Hindi /Madhya Pradesh / Bundelkhand / Chattisgarhi</div>
									<div id="checkmt-North_5" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_5');" type="checkbox" name="" value=""/ >&nbsp;Hindi/U.P./Awadhi/ Bhojpuri/Garhwali</div>
									<div id="checkmt-North_6" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_6');" type="checkbox" name="" value=""/ >&nbsp;Punjabi</div>
									<div id="checkmt-North_7" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_7');" type="checkbox" name="" value=""/ >&nbsp;Bihari/Maithili/Magahi</div>
									<div id="checkmt-North_8" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_8');" type="checkbox" name="" value=""/ >&nbsp;Rajasthani / Marwari / Malwi / Jaipuri</div>
									<div id="checkmt-North_9" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_9');" type="checkbox" name="" value=""/ >&nbsp;Haryanvi</div>
									<div id="checkmt-North_10" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_10');" type="checkbox" name="" value=""/ >&nbsp;Himachali/Pahari</div>
									<div id="checkmt-North_11" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_11');" type="checkbox" name="" value=""/ >&nbsp;Kashmiri/J&amp;K/Dogri/Ladacki</div>
									<div id="checkmt-North_12" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-North_12');" type="checkbox" name="" value=""/ >&nbsp;Sindhi</div>
									<div id="checkmt-West" style="font-size: 8pt; color:#CC0033;">West</div>
									<div id="checkmt-West_13" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_13');" type="checkbox" name="" value=""/ >&nbsp;Marathi/ Maharashtra</div>
									<div id="checkmt-West_14" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_14');" type="checkbox" name="" value=""/ >&nbsp;Gujarati / Kutchi</div>
									<div id="checkmt-West_15" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_15');" type="checkbox" name="" value=""/ >&nbsp;Hindi /Madhya Pradesh / Bundelkhand / Chattisgarhi</div>
									<div id="checkmt-West_16" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_16');" type="checkbox" name="" value=""/ >&nbsp;Konkani</div>
									<div id="checkmt-West_17" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_17');" type="checkbox" name="" value=""/ >&nbsp;Sindhi</div>
									<div id="checkmt-West_18" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-West_18');" type="checkbox" name="" value=""/ >&nbsp;Daman &amp; Diu</div>
									<div id="checkmt-South" style="font-size: 8pt; color:#CC0033;">South</div>
									<div id="checkmt-South_19" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-South_19');" type="checkbox" name="" value=""/ >&nbsp;Tamil</div>
									<div id="checkmt-South_20" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-South_20');" type="checkbox" name="" value=""/ >&nbsp;Kannada/Karnataka</div>
									<div id="checkmt-South_21" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-South_21');" type="checkbox" name="" value=""/ >&nbsp;Malayalee/Keralite</div>
									<div id="checkmt-South_22" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-South_22');" type="checkbox" name="" value=""/ >&nbsp;Nicobarese/Andaman &amp; Nicobar</div>
									<div id="checkmt-South_23" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-South_23');" type="checkbox" name="" value=""/ >&nbsp;Lakshadweep/Mahl</div>
									<div id="checkmt-East" style="font-size: 8pt; color:#CC0033;">East</div>
									<div id="checkmt-East_24" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_24');" type="checkbox" name="" value=""/ >&nbsp;Bengali</div>
									<div id="checkmt-East_25" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_25');" type="checkbox" name="" value=""/ >&nbsp;Oriya</div>
									<div id="checkmt-East_26" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_26');" type="checkbox" name="" value=""/ >&nbsp;Assamese</div>
									<div id="checkmt-East_27" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_27');" type="checkbox" name="" value=""/ >&nbsp;Aurnachali</div>
									<div id="checkmt-East_28" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_28');" type="checkbox" name="" value=""/ >&nbsp;Manipuri</div>
									<div id="checkmt-East_29" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_29');" type="checkbox" name="" value=""/ >&nbsp;Khasi/Meghalaya/Garo/Jaintia</div>
									<div id="checkmt-East_30" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_30');" type="checkbox" name="" value=""/ >&nbsp;Mizo</div>
									<div id="checkmt-East_31" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_31');" type="checkbox" name="" value=""/ >&nbsp;Konyak/Nagaland</div>
									<div id="checkmt-East_32" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_32');" type="checkbox" name="" value=""/ >&nbsp;Sikkim/ Nepali/ Lepcha/ Bhutia/ Limbu</div>
									<div id="checkmt-East_33" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_33');" type="checkbox" name="" value=""/ >&nbsp;Tripuri</div>
									<div id="checkmt-East_34" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkmt('checkmt-East_34');" type="checkbox" name="" value=""/ >&nbsp;Foreign origin</div>
									</div>
							</div>
							<div style="float:left;">&nbsp; &nbsp;</div>
							<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<div id="dispmt_0" style="display:block;" ></div>
									<div style="color: rgb(10, 137, 254);margin:15px;">------------</div>
									<div id="dispmt_1" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt_1');" type="checkbox" name="" value=""/ >&nbsp;All Hindi</div>
									<div id="dispmt-North" style="font-size: 8pt; color:#CC0033;display:none;">North</div>
									<div id="dispmt-North_2" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_2');" type="checkbox" name="" value=""/ >&nbsp;All Hindi</div>
									<div id="dispmt-North_3" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_3');" type="checkbox" name="" value=""/ >&nbsp;Hindi/ Delhi</div>
									<div id="dispmt-North_4" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_4');" type="checkbox" name="" value=""/ >&nbsp;Hindi /Madhya Pradesh / Bundelkhand / Chattisgarhi</div>
									<div id="dispmt-North_5" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_5');" type="checkbox" name="" value=""/ >&nbsp;Hindi/U.P./Awadhi/ Bhojpuri/Garhwali</div>
									<div id="dispmt-North_6" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_6');" type="checkbox" name="" value=""/ >&nbsp;Punjabi</div>
									<div id="dispmt-North_7" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_7');" type="checkbox" name="" value=""/ >&nbsp;Bihari/Maithili/Magahi</div>
									<div id="dispmt-North_8" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_8');" type="checkbox" name="" value=""/ >&nbsp;Rajasthani / Marwari / Malwi / Jaipuri</div>
									<div id="dispmt-North_9" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_9');" type="checkbox" name="" value=""/ >&nbsp;Haryanvi</div>
									<div id="dispmt-North_10" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_10');" type="checkbox" name="" value=""/ >&nbsp;Himachali/Pahari</div>
									<div id="dispmt-North_11" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_11');" type="checkbox" name="" value=""/ >&nbsp;Kashmiri/J&amp;K/Dogri/Ladacki</div>
									<div id="dispmt-North_12" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-North_12');" type="checkbox" name="" value=""/ >&nbsp;Sindhi</div>
									<div id="dispmt-West" style="font-size: 8pt; color:#CC0033;display:none;">West</div>
									<div id="dispmt-West_13" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_13');" type="checkbox" name="" value=""/ >&nbsp;Marathi/ Maharashtra</div>
									<div id="dispmt-West_14" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_14');" type="checkbox" name="" value=""/ >&nbsp;Gujarati / Kutchi</div>
									<div id="dispmt-West_15" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_15');" type="checkbox" name="" value=""/ >&nbsp;Hindi /Madhya Pradesh / Bundelkhand / Chattisgarhi</div>
									<div id="dispmt-West_16" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_16');" type="checkbox" name="" value=""/ >&nbsp;Konkani</div>
									<div id="dispmt-West_17" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_17');" type="checkbox" name="" value=""/ >&nbsp;Sindhi</div>
									<div id="dispmt-West_18" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-West_18');" type="checkbox" name="" value=""/ >&nbsp;Daman &amp; Diu</div>
									<div id="dispmt-South" style="font-size: 8pt; color:#CC0033;display:none;">South</div>
									<div id="dispmt-South_19" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-South_19');" type="checkbox" name="" value=""/ >&nbsp;Tamil</div>
									<div id="dispmt-South_20" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-South_20');" type="checkbox" name="" value=""/ >&nbsp;Kannada/Karnataka</div>
									<div id="dispmt-South_21" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-South_21');" type="checkbox" name="" value=""/ >&nbsp;Malayalee/Keralite</div>
									<div id="dispmt-South_22" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-South_22');" type="checkbox" name="" value=""/ >&nbsp;Nicobarese/Andaman &amp; Nicobar</div>
									<div id="dispmt-South_23" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-South_23');" type="checkbox" name="" value=""/ >&nbsp;Lakshadweep/Mahl</div>
									<div id="dispmt-East" style="font-size: 8pt; color:#CC0033;display:none;">East</div>
									<div id="dispmt-East_24" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_24');" type="checkbox" name="" value=""/ >&nbsp;Bengali</div>
									<div id="dispmt-East_25" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_25');" type="checkbox" name="" value=""/ >&nbsp;Oriya</div>
									<div id="dispmt-East_26" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_26');" type="checkbox" name="" value=""/ >&nbsp;Assamese</div>
									<div id="dispmt-East_27" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_27');" type="checkbox" name="" value=""/ >&nbsp;Aurnachali</div>
									<div id="dispmt-East_28" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_28');" type="checkbox" name="" value=""/ >&nbsp;Manipuri</div>
									<div id="dispmt-East_29" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_29');" type="checkbox" name="" value=""/ >&nbsp;Khasi/Meghalaya/Garo/Jaintia</div>
									<div id="dispmt-East_30" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_30');" type="checkbox" name="" value=""/ >&nbsp;Mizo</div>
									<div id="dispmt-East_31" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_31');" type="checkbox" name="" value=""/ >&nbsp;Konyak/Nagaland</div>
									<div id="dispmt-East_32" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_32');" type="checkbox" name="" value=""/ >&nbsp;Sikkim/ Nepali/ Lepcha/ Bhutia/ Limbu</div>
									<div id="dispmt-East_33" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_33');" type="checkbox" name="" value=""/ >&nbsp;Tripuri</div>
									<div id="dispmt-East_34" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkmt('dispmt-East_34');" type="checkbox" name="" value=""/ >&nbsp;;Foreign origin</div>
									</div>
									</div>
							</div>
							</td>
                          </tr>
						    <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						    <tr>
                            <td><font class="text" valign="center">Religion</font></td>
							<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">
								<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;" onclick="selectAllrl('checkrl','10')">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<div id="checkrl_1" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_1');" type="checkbox" name="" value=""/ >&nbsp;Hindu</div>
									<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>
									<div id="checkrl_2" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_2');" type="checkbox" name="" value=""/ >&nbsp;Buddhist</div>
									<div id="checkrl_3" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_3');" type="checkbox" name="" value=""/ >&nbsp;Christian</div>
									<div id="checkrl_4" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_4');" type="checkbox" name="" value=""/ >&nbsp;Hindu</div>
									<div id="checkrl_5" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_5');" type="checkbox" name="" value=""/ >&nbsp;Jain</div>
									<div id="checkrl_6" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_6');" type="checkbox" name="" value=""/ >&nbsp;Jewish</div>
									<div id="checkrl_7" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_7');" type="checkbox" name="" value=""/ >&nbsp;Muslim</div>
									<div id="checkrl_8" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_8');" type="checkbox" name="" value=""/ >&nbsp;Parsi</div>
									<div id="checkrl_9" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_9');" type="checkbox" name="" value=""/ >&nbsp;Sikh</div>
									<div id="checkrl_10" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkrl('checkrl_10');" type="checkbox" name="" value=""/ >&nbsp;Other</div>
									</div>
							</div>
							<div style="float:left;">&nbsp; &nbsp;</div>
							<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;"onclick="selectAllrl('disprl','10')">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<div id="disprl_1" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_1');" type="checkbox" name="" value=""/ >&nbsp;Hindu</div>
									<span style="color: rgb(10, 137, 254);margin:15px;">------------</span>
									<div id="disprl_2" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_2');" type="checkbox" name="" value=""/ >&nbsp;Buddhist</div>
									<div id="disprl_3" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_3');" type="checkbox" name="" value=""/ >&nbsp;Christian</div>
									<div id="disprl_4" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_4');" type="checkbox" name="" value=""/ >&nbsp;Hindu</div>
									<div id="disprl_5" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_5');" type="checkbox" name="" value=""/ >&nbsp;Jain</div>
									<div id="disprl_6" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_6');" type="checkbox" name="" value=""/ >&nbsp;Jewish</div>
									<div id="disprl_7" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_7');" type="checkbox" name="" value=""/ >&nbsp;Muslim</div>
									<div id="disprl_8" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_8');" type="checkbox" name="" value=""/ >&nbsp;Parsi</div>
									<div id="disprl_9" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_9');" type="checkbox" name="" value=""/ >&nbsp;Sikh</div>
									<div id="disprl_10" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkrl('disprl_10');" type="checkbox" name="" value=""/ >&nbsp;Other</div>
									</div>
									</div>
							</div>
							</td>
                          </tr>
						   <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						  </tr>
						   </tr>
						    <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						    <tr>
                            <td><font class="text" valign="center">Cast</font></td>
							<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">
								<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<input type="checkbox" name="" value="">Hindu<br/>
									<span style="color: rgb(10, 137, 254);margin:15px;">------------</span><br />
									<input type="checkbox" name="" value="">Buddhist<br/>
									<input type="checkbox" name="" value="">Christian<br/>
									<input type="checkbox" name="" value="">Hindu<br/>
									<input type="checkbox" name="" value="">Jain<br/>
									<input type="checkbox" name="" value="">Jewish<br/>
									<input type="checkbox" name="" value="">Muslim<br/>
									<input type="checkbox" name="" value="">Parsi<br/>
									<input type="checkbox" name="" value="">Sikh<br/>
									<input type="checkbox" name="" value="">Other<br/>
									</div>
							</div>
							<div style="float:left;">&nbsp; &nbsp;</div>
							<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;vertical-align:bottom;border:1px solid #CCCCCC;">
										Any
									</div>
							</div>
							</td>
                          </tr>
						   <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						    <tr>
                            <td><font class="text" valign="center">Annual Income</font></td>
							<td  colspan="2"style="font-size: 10px; font-family: arial, verdana, sans-serif">
								<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;border:1px solid #CCCCCC;">
									<div id="checkan_1" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_1');" type="checkbox" name="" value=""/ >&nbsp;No Income</div>
									<div id="checkan_2" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_2');" type="checkbox" name="" value=""/ >&nbsp;Under Rs.50,000</div>
									<div id="checkan_3" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_3');" type="checkbox" name="" value=""/ >&nbsp;Rs.50,001 - 1,00,000</div>
									<div id="checkan_4" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_4');" type="checkbox" name="" value=""/ >&nbsp;Rs.1,00,001 - 2,00,000</div>
									<div id="checkan_5" style="display:block;" >&nbsp;<img src="images/checkbox1.gif"
									onclick="checkan('checkan_5');" type="checkbox" name="" value=""/ >&nbsp;Rs.2,00,001 - 3,00,000</div>
									<div id="checkan_6" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_6');" type="checkbox" name="" value=""/ >&nbsp;Rs.3,00,001 - 4,00,000</div>
									<div id="checkan_7" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_7');" type="checkbox" name="" value=""/ >&nbsp;Rs.4,00,001 - 5,00,000</div>
									<div id="checkan_8" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_8');" type="checkbox" name="" value=""/ >&nbsp;Rs.5,00,001 - 7,50,000</div>
									<div id="checkan_9" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_9');" type="checkbox" name="" value=""/ >&nbsp;Rs.7,50,001 - 10,00,000</div>
									<div id="checkan_10" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_10');" type="checkbox" name="" value=""/ >&nbsp;Rs.10,00,001 - 15,00,000</div>
									<div id="checkan_11" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_11');" type="checkbox" name="" value=""/ >&nbsp;Rs.15,00,001 - 20,00,000</div>
									<div id="checkan_12" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_12');" type="checkbox" name="" value=""/ >&nbsp;Rs.20,00,001 - 25,00,000</div>
									<div id="checkan_13" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_13');" type="checkbox" name="" value=""/ >&nbsp;Rs.25,00,001 and above</div>
									<div id="checkan_14" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_14');" type="checkbox" name="" value=""/ >&nbsp;Under $25,000</div>
									<div id="checkan_15" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_15');" type="checkbox" name="" value=""/ >&nbsp;$25,001 - 40,000</div>
									<div id="checkan_16" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_16');" type="checkbox" name="" value=""/ >&nbsp;$40,001 - 60,000</div>
									<div id="checkan_17" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_17');" type="checkbox" name="" value=""/ >&nbsp;$60,001 - 80,000</div>
									<div id="checkan_18" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_18');" type="checkbox" name="" value=""/ >&nbsp;$80,001 - 100,000</div>
									<div id="checkan_19" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_19');" type="checkbox" name="" value=""/ >&nbsp;$100,001 - 150,000</div>
									<div id="checkan_20" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_20');" type="checkbox" name="" value=""/ >&nbsp;$150,001 - 200,000</div>
									<div id="checkan_21" style="display:block;" >&nbsp;<img src="images/checkbox1.gif" onclick="checkan('checkan_21');" type="checkbox" name="" value=""/ >&nbsp;$200,001 and above</div>
									</div>
							</div>
							<div style="float:left;">&nbsp; &nbsp;</div>
							<div style="width:250px;float:left;">
									<span style="float:left;">Selected Items </span>
									<span style="float:right;">Select All</span>&nbsp;
									<div style="overflow-x:hidden;overflow-y:scroll;height:150px;width:250px;vertical-align:bottom;border:1px solid #CCCCCC;">
									<div style="color: rgb(10, 137, 254);margin:15px;">------------</div>
									<div id="dispan_1" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_1');" type="checkbox" name="" value=""/ >&nbsp;No Income</div>
									<div id="dispan_2" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_2');" type="checkbox" name="" value=""/ >&nbsp;Under Rs.50,000</div>
									<div id="dispan_3" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_3');" type="checkbox" name="" value=""/ >&nbsp;Rs.50,001 - 1,00,000</div>
									<div id="dispan_4" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_4');" type="checkbox" name="" value=""/ >&nbsp;Rs.1,00,001 - 2,00,000</div>
									<div id="dispan_5" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_5');" type="checkbox" name="" value=""/ >&nbsp;Rs.2,00,001 - 3,00,000</div>
									<div id="dispan_6" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_6');" type="checkbox" name="" value=""/ >&nbsp;Rs.3,00,001 - 4,00,000</div>
									<div id="dispan_7" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_7');" type="checkbox" name="" value=""/ >&nbsp;Rs.4,00,001 - 5,00,000</div>
									<div id="dispan_8" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_8');" type="checkbox" name="" value=""/ >&nbsp;Rs.5,00,001 - 7,50,000</div>
									<div id="dispan_9" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_9');" type="checkbox" name="" value=""/ >&nbsp;Rs.7,50,001 - 10,00,000</div>
									<div id="dispan_10" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_10');" type="checkbox" name="" value=""/ >&nbsp;Rs.10,00,001 - 15,00,000</div>
									<div id="dispan_11" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_11');" type="checkbox" name="" value=""/ >&nbsp;Rs.15,00,001 - 20,00,000</div>
									<div id="dispan_12" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_12');" type="checkbox" name="" value=""/ >&nbsp;Rs.20,00,001 - 25,00,000</div>
									<div id="dispan_13" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_13');" type="checkbox" name="" value=""/ >&nbsp;Rs.25,00,001 and above</div>
									<div id="dispan_14" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_14');" type="checkbox" name="" value=""/ >&nbsp;Under $25,000</div>
									<div id="dispan_15" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_15');" type="checkbox" name="" value=""/ >&nbsp;$25,001 - 40,000</div>
									<div id="dispan_16" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_16');" type="checkbox" name="" value=""/ >&nbsp;$40,001 - 60,000</div>
									<div id="dispan_17" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_17');" type="checkbox" name="" value=""/ >&nbsp;$60,001 - 80,000</div>
									<div id="dispan_18" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_18');" type="checkbox" name="" value=""/ >&nbsp;$80,001 - 100,000</div>
									<div id="dispan_19" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_19');" type="checkbox" name="" value=""/ >&nbsp;$100,001 - 150,000</div>
									<div id="dispan_20" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_20');" type="checkbox" name="" value=""/ >&nbsp;$150,001 - 200,000</div>
									<div id="dispan_21" style="display:none;">&nbsp;<img src="images/cross_sign.gif" onclick="checkan('dispan_21');" type="checkbox" name="" value=""/ >&nbsp;$200,001 and above</div>
									</div>
									</div>
							</div>
							</td>
                          </tr>
						   <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><font class="text">Describe your desired partner</font></td>
                            <td colspan="2"
							  style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your expectations & what you’re looking for.<br/>
							  <span style="float:left;" style="font-size: 12pt; width: 335px; font-family: arial, verdana, sans-serif" > 
							<textarea name="described_partner" id="about_yourself" cols="40" rows="5" class="fl" onKeyDown="limitText(this.form.described_partner,this.form.countdown,500);" 
								onKeyUp="limitText(this.form.described_partner,this.form.countdown);"></textarea><br/>
							<span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 50)</span>
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
