<form method="post" action="registration1_submit.php" name="frmRegistration" enctype="multipart/form-data" onsubmit="return login_validate1();" >

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
				<!--
				<input type="hidden" name="emailid" id="" value="<?php echo $_REQUEST["emailid"];?>" />
				<input type="hidden" name="loginid" id="" value="<?php echo $_REQUEST["loginid"];?>" />
				<input type="hidden" name="password" id="" value="<?php echo $_REQUEST["password"];?>" />
				<input type="hidden" name="name" id="" value="<?php echo $_REQUEST["name"];?>" />
				<input type="hidden" name="lookingfor" id="" value="<?php echo $_REQUEST["lookingfor"];?>" />
				<input type="hidden" name="gender" id="" value="<?php echo $_REQUEST["gender"];?>" />
				<input type="hidden" name="day" id="" value="<?php echo $_REQUEST["day"];?>" />
				<input type="hidden" name="month" id="" value="<?php echo $_REQUEST["month"];?>" />
				<input type="hidden" name="year" id="" value="<?php echo $_REQUEST["year"];?>" />
				<input type="hidden" name="maritalstatus" id="" value="<?php echo $_REQUEST["maritalstatus"];?>" />
				<input type="hidden" name="height" id="" value="<?php echo $_REQUEST["height"];?>" />	
				<input type="hidden" name="livingin" id="" value="<?php echo $_REQUEST["livingin"];?>" />	
				<input type="hidden" name="state" id="" value="<?php echo $_REQUEST["state"];?>" />	
			    <input type="hidden" name="city" id="" value="<?php echo $_REQUEST["city"];?>" />		

				<input type="hidden" name="mobile" id="" value="<?php echo $_REQUEST["mobile"];?>" />

				<input type="hidden" name="contact_address" id="" value="<?php echo $_REQUEST["contact_address"];?>" />
				<input type="hidden" name="religion" id="" value="<?php echo $_REQUEST["religion"];?>" />
				<input type="hidden" name="caste" id="" value="<?php echo $_REQUEST["caste"];?>" />
				<input type="hidden" name="raasi" id="" value="<?php echo $_REQUEST["raasi"];?>" />
				<input type="hidden" name="weight" id="" value="<?php echo $_REQUEST["weight"];?>" />

				<input type="hidden" name="mothertongue" id="" value="<?php echo $_REQUEST["mothertongue"];?>" />
				<!--  <input type="hidden" name="address" id="" value="<?php echo $_REQUEST["address"];?>" />

	            <input type="hidden" name="citizenship" id="" value="<?php echo $_REQUEST["citizenship"];?>" />

				<input type="hidden" name="occupation" id="" value="<?php echo $_REQUEST["occupation"];?>" />
				<input type="hidden" name="weight" id="" value="<?php echo $_REQUEST["weight"];?>" />
				<input type="hidden" name="education" id="" value="<?php echo $_REQUEST["education"];?>" />-->


				<tr>
                   
                      <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                        
						<tr>
                      <td class="s-title" colspan="2" style="border-bottom:1px solid #CCCCCC" width="200">more about <?php echo $_SESSION['sess_full_name'];?>..</td>
                    </tr>
					<tr>
                           <td align="right" valign="top" height="6" colspan="3" style="color:red; font-size:12px; font-family: arial, verdana, sans-serif " >* Required Information</td>
                          </tr>
					<tbody>
                           <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
						   <tr>
                            <td><font class="text">Highest Degree</font></td>
                            <td colspan="3"><font class="text">
                              <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="highestdegree" >		
								 <option value="0" selected="selected">-Select Highest Degree-</option>
								 <?php
                                echo createDropDownForHighestdegree($db,$highestdegree);
                            ?> 

                                <!--<option value="0" selected="selected">-Select any One-</option>
								<optgroup label="Professional Degrees">
                                <option value="1">BAMS</option>
                                <option value="2">BHMS</option>
                                <option value="3">B.E/B.Tech</option>
								 <option value="4">B.Pharma</option>
                                <option value="5">CA</option>
                                <option value="6">CS</option>
								 <option value="7">DM</option>
                                <option value="8">ICWA</option>
                                <option value="9">MBBS / BDS</option>
								<option value="10">MCA / PGDCA</option>
								 <option value="16">MBA / PGDM</option>
                                <option value="11">M.Pharma</option>
                                <option value="12">Ph. D</option>
								<optgroup label="Post-Graduate Degrees">
								 <option value="13">M.A</option>
                                <option value="14">M.Com</option>
								<option value="15">M.Sc</option>
                                <option value="17">ML / LLM</option>
								<optgroup label="Graduate Degrees">
								<option value="18">B.A</option>
                                <option value="19">B.Com</option>
								<option value="20">B.Sc</option>
                                <option value="21">High School</option>
                                <option value="22">Trade School</option>
								<option value="23">Diploma</option>
                                <option value="24">Other</option>-->
                        </select>
                            </font>&nbsp<span style="color:red;">*</span></td>
                          </tr>
						    <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                          <tr>
                            <td><font class="text">Work Area</font></td>
                            <td colspan="5">
			                <select style="font-size: 9pt; width: 200px;font-family: arial, verdana, sans-serif" size="1" name="workarea">
                               <option value="0" selected="selected">-Select Workarea-</option> 
							 <?php
                             echo createDropDownForWorkarea($db);
                            ?>


								<!--<option value="0" selected="selected">-Select any one-</option>-->
                                <option value="1">Looking for a job</option>
                                <option value="2">Accounts</option>
                                <option value="3">Advertising</option>
                                <option value="4">Agent</option>
                                <option value="5">Ticketing</option>
                                <option value="6">Acting</option>
                                <option value="7">Architecture</option>
                                <option value="8">Banking</option>
                                <option value="9">Journalism</option>
                                <option value="10">Corporate Communication</option>
                                <option value="11">Corporate Planning</option>
                                <option value="12">Customer Services</option>
                                <option value="13">Businessman</option>
                                <option value="14">Export/Import</option>
                                <option value="15">Fashion</option>
                                <option value="16">Front Office</option>
                                <option value="18">Graphic design</option>
		                        <option value="19">Restaurants</option>
                                <option value="20">Human Resource</option>
                                <option value="21">Software</option>
                                <option value="22">Hardware/Telecom</option>
                                <option value="23">Law</option>
                                <option value="24">Logistics/SCM</option>
                                <option value="25">Healthcare</option>
                                <option value="27">Packaging</option>
                                <option value="28">Service Engineering</option>
                                <option value="29">Engineering/R&D</option>
                                <option value="30">Sales</option>
                                <option value="31">Security</option>
								<option value="32">Graphic design</option>
		                        <option value="33">Project Management</option>
                                <option value="34">Teaching</option>
                                <option value="35">Agriculture</option>
                                <option value="36">Civil Services (IAS/ IFS/ IPS/ IRS)</option>
                                <option value="37">Defence</option>
                                <option value="38">Govt. Services</option>
                                <option value="39">Retired</option>
                                <option value="40">Social Services</option>
                                <option value="41">Sports</option>
                                <option value="42">Beautician/Fitness Professional</option>
                                <option value="43">Student</option>
                                <option value="44">Merchant Navy</option>
								<option value="45">Others</option>
                                <option value="46">Not working</option>
                            </select>&nbsp<span style="color:red;">*</span>
							</td>
                         </tr>
						<tr>
                            <td colspan="4" height="6"></td>
                        </tr>
						 <tr>
                            <td><font class="text">Annual Income</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" size="1" name="annualincome">
							<option value="0" selected="selected">-Select Income-</option>

						        <?php
						          echo createDropDownForIncome($income_id);
					            ?>
								</select>
                            </font>&nbsp<span style="color:red;">*</span></td>
                         </tr>

						 <tr>
                            <td colspan="4" height="6"></td>
                        </tr>


						  <tr>
                            <td><font class="text">Weight</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" size="1" name='weight'>
								<option value="0" selected="selected">-Select weight-</option>
						        <?php
						          echo createDropDownForWeight($db,$weight);
					            ?>
								</select>
                                                              
                            </font>&nbsp<span style="color:red;">*</span></td>
                          </tr>


                          <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Physical status</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr>
								<td><input type="radio" value="N" name="physical_status" checked />Normal</td>
								<td><input type="radio" value="D" name="physical_status" />Disable</td>
								</tr>
							</table>
							</font>
                             </tr>
							 <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Diet</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr>
								<td><input type="radio" value="Y" name="diet" checked/>Vegeterian</td>
								<td><input type="radio" value="N" name="diet" />Non-Vegeterian</td>
								</tr>
							</table>
							</font>
                             </tr>
							 <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Smoke</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr>
									<td><input type="radio" value="Y" name="smoke" />Yes</td>
									<td><input type="radio" value="N" name="smoke" checked/>No</td>
									<td><input type="radio" value="O" name="smoke" />Occasionally</td>
								</tr>
							</table>
							</font>
                             </tr>
							   <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Drink</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr >
									<td><input type="radio" value="Y" name="drink" />Yes</td>
									<td><input type="radio" value="N" name="drink" checked />No</td>
									<td><input type="radio" value="O" name="drink" />Occasionally</td>
								</tr>
							</table>
							</font>
                             </tr>
							    <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Body Type</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr>
									<td><input type="radio" value="1" name="bodytype" />Slim</td>
									<td><input type="radio" value="2" name="bodytype" checked />Average</td>
									<td><input type="radio" value="3" name="bodytype" />Athletic</td>
									<td><input type="radio" value="4" name="bodytype" />Heavy</td>
								</tr>
							</table>
							</font>
                             </tr>
							 	    <tr>
                            <td colspan="4" height="6"></td>
                          </tr>
                           <tr>
                            <td><font class="text">Complexion</font></td>
                            <td colspan="2">
							<font class="text">
							<table>
								<tr>
									<td><input type="radio" value="1" name="complexion" />Very Fair</td>
									<td><input type="radio" value="2" name="complexion" checked />Fair</td>
									<td><input type="radio" value="3" name="complexion" />Wheatish</td>
									<td><input type="radio" value="4" name="complexion" />Wheatish Brown</td>
									<td><input type="radio" value="5" name="complexion" />Dark</td>
								</tr>
							</table>
							</font>
                            </tr>
							    <tr>
                            <td colspan="4" height="6"></td>
                          </tr>


						  
						  <tr>
						  <td>
						  </td>
						  </tr>
						  			
              
						  <tr>
                            <td><font class="text">Write about Yourself</font></td>
                            
							<td 
							style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your family background, education, lifestyle, interests, hobbies etc<br/>
							<span style="float:left;font-size: 12pt; width: 300px; font-family: arial, verdana, sans-serif;"> 
							
							<textarea name="about_yourself" id="about_yourself" cols="35" rows="5" class="fl" onKeyDown="limitText(this.form.about_yourself,this.form.countdown,500);" 
							onKeyUp="limitText(this.form.about_yourself,this.form.countdown);"></textarea>
							<span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of characters- 50)</span>
							<span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="about_yourself_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
							</span>
							</span>
							<span style="float:right;">
							
							<b style="font-size: 12px;margin-left:0px; font-family: arial, verdana, sans-serif">Here you can write about</b><br/>
							<li style="margin-left:10px;"><i class="text"></i>Your Personality, Values, Lifestyle.</li>
							<li style="margin-left:10px;"><i class="text"></i>Your education � school and college</li>
							<li style="margin-left:10px;"><i class="text"></i>Your Occupation, Income and Goals </li>
							<li style="margin-left:10px;"><i class="text"></i>Your family �  Dad, Mom, Siblings </li>
							
							</span>
							</td>
							</tr>
					
                
                          <tr>
                            <td><font class="text">Upload Photo</font></td>
                            <td><input type="file" name="fimage" id="fimage" onchange="return checkfile();">
                            </td>
                          </tr>
						  	<tr>
                            <td valign="top" width="90">&nbsp;</td>
                            <td colspan="4"><input type="checkbox" checked="checked" onClick="apply()" id="terms" />    
							<a  href="#">I Accept the Terms &amp; Conditions</a><br/>
							<span id="emailid_error" style="display:none;color:blue;border:0px solid;padding:1px;width:285px; line-height: 11px;">Please Check the Terms &amp; Conditions Checkbox First</span></td>
                            </tr>
							
                          <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="3" align="left">&nbsp;</td>
                          </tr>
                            <tr>
                            <td valign="top" width="90">&nbsp;
                            <input type="hidden" value="1" name="Token" /></td>
                            <td colspan="3" align="left"><font face="verdana" size="2">
                            <input type="image" src="images/fin_reg.png" id="submit_form" name="sub"/>
                            </font><font face="arial" size="2">&nbsp; </font></td>
                          </tr>
                        </tbody>
                        </table>
                        </td>
                        </tr>
                        </table>
                        </form>

<script type="text/javascript">
							
function apply() {
	 if($("#terms").attr('checked')) {
		$("#emailid_error").css('display','none');
		document.getElementById("submit_form").disabled = false;
		return false;
	 }
	 else {
		$("#emailid_error").css('display','block');
		document.getElementById("submit_form").disabled = true;
		return false;
	 }
}
function checkfile(){
 var filename = document.frmRegistration.fimage.value.split('.');
var len = filename.length;
if(filename[len-1] != "png" && filename[len-1] != "docx" && filename[len-1] != "pdf" && filename[len-1] != "jpg" && filename[len-1] != "jpeg" && filename[len-1] != "gif" && filename[len-1] != "bmp") {
alert("file you have uploded don't support,please upload only Images files");
return false;
}

}
</script> 