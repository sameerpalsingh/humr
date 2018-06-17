<form method="post" action="registration_submit.php" name="frmRegistration" onsubmit="return login_validate();" >

<table width="100%" border="0" cellpadding="0" cellspacing="2">

<?php
if (isset($message) && $message !='')
{
    ?>
    <tr>
        <td class="error"><?php echo $message; ?></td>
    </tr>
    <?php
}
?> 
     <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
        <tr>
    <td class="s-title" colspan="4" style="border-bottom:1px solid #CCCCCC">Account Details</td>
    </tr>
      <tr>
            <td align="right" valign="top" height="6" colspan="3" style="color:red; font-size:12px; font-family: arial, verdana, sans-serif " >* Required Information</td>
          </tr>
    <tr>
        <tbody>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
            <tr>
            <td width="25%" align="right"><font class="vheading" &nbsp;>Your Email: &nbsp;</font></td>
            <td  align="left">
                <input class="field_text" maxlength="100" size="35" id="emailid" name="emailid" onchange="return checkEmailid();" />&nbsp<span style="color:red;">*</span>
                <span id="emailid_error" class="field_error">Email Id already exists, Please try another.</span>
            </td>
          </tr>
<tr>
            <td colspan="4" height="3"></td>
          </tr>
             <tr>
            <td width="25%" align="right"><font class="vheading" &nbsp;>UserId: &nbsp;</font></td>
            <td  align="left"><input class="field_text" maxlength="100" size="35" name="loginid" onchange="return checkUsername();" /><span style="color:red;">&nbsp;*</span>
			<span id="loginid_error" class="field_error">Loginid Id already exists, Please try another.</span>
	</td>
          </tr>

           <tr>
            <td colspan="4" height="3"></td>
          </tr>
           <tr>
            <td width="25%" align="right"><font class="vheading">Choose Your Password: &nbsp;</font></td>
            <td  align="left"><input class="field_text" maxlength="50" type="password" size="35" name="password" /><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="3"></td>
          </tr>
          <tr>
            <td width="25%" align="right"><font class="vheading">Confirm Password: &nbsp;</font></td>
            <td  align="left"><input class="field_text" maxlength="50" type="password" size="35" name="confirmpassword" /><span style="color:red;">&nbsp;*</span></td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
                              
    <tr>
    <td class="s-title" colspan="1" style="border-bottom:1px solid #CCCCCC">Basic Details</td>
    </tr>
  <!--  <tr>
      <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
        <tbody>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="images/personal-info.gif" alt="" width="131" height="30" /></td>
                </tr>
              </table></td>
          </tr>-->
          <tr>
            <td colspan="4" height="25"></td>
          </tr>
          <tr>
            <td ><font class="text">Your Name:</font></td>
            <td ><input class="box"  maxlength="50" size="25" name="name" /><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
           <tr>
            <td><font class="text">Looking For A Match</font></td>
            <td colspan="3"><font class="text">
              <select
              style="font-size: 9pt; width: 180px; font-family: arial, verdana, sans-serif"
              name="lookingfor">
             <option value="0" selected="selected">Please Select</option>
             <option  value="1">Self</option>
             <option  value="4">Relative/Friend</option>
             <option  value="2">Son</option>
             <option  value="2D">Daughter</option>
             <option  value="6">Brother</option>
             <option  value="6D">Sister</option>
             <option  value="5">Client-Marriage Bureau</option>
             </select>
            </font><span style="color:red;">&nbsp;*</span></td>
         </tr>
          <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
            <td><font class="text">Gender</font></td>
            <td colspan="3"><font class="text">
              <input type="radio" value="M" name="gender" />
              Male
              <input type="radio" value="F" name="gender" />
              Female</font></td>
           </tr>
            <tr>
            <td colspan="4" height="8"></td>
          </tr>
            <tr>
            <td><font class="text">Date Of Birth</font></td>
            <td colspan="3">
            <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="day">
               <option value="0">Day</option>
               <?php
               for($i=1;$i<=31;$i++) {
               ?>
                   <option value="<?php echo $i;?>"><?php echo $i;?></option>							   
                <?php } ?>
            </select>
            <select style="font-size: 9pt; width: 90px; font-family: arial, verdana, sans-serif" size="1" name="month">
              <option value="0" selected="selected">Month</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            <select style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif" size="1" name="year">
              <option value="0" selected="selected">Year</option>
              <?php
               for($i=1970;$i<=date('Y');$i++) {
               ?>
                   <option value="<?php echo $i;?>"><?php echo $i;?></option>							   
                <?php  }  ?>
            </select><span style="color:red;">&nbsp;*</span>                          
            </td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
         <td><font class="text">Marital Status</font></td>
            <td colspan="3"><font class="text">
              <select
               style="font-size: 9pt; width: 120px; font-family: arial, verdana, sans-serif"
               name="maritalstatus">
                <option value="0" selected="selected">-Select Status-</option>
                <option value="1">Never Married</option>
                <option value="2">Awaiting Divorce</option>
                <option value="3">Divorced</option>
                <option value="4">Widowed</option>
                <option value="5">Annulled</option>
                </select>
            </font><span style="color:red;">&nbsp;*</span></td>
          </tr>
        <tr>
            <td colspan="4" height="6"></td>
          </tr>
             <tr>
            <td><font class="text">Height</font></td>
            <td colspan="5"><select
             style="font-size: 9pt; width: 120px; font-family: arial, verdana, sans-serif"
             size="1" name="height">
                <option value="0" selected="selected">-Select Height-</option>								
                <?php	
                echo createDropDownForHeight($db,20); 
                ?>
            </select><span style="color:red;">&nbsp;*</span>
          </td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
            <tr>
            <td><font class="text">Country Living In</font></td>
            <td colspan="3"><font class="text">
              <select
               style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="livingin">
                <option value="0" selected="selected">-Select One-</option>
                <?php
                    echo createDropDownForCountries($db,1);
                ?>
              </select>
            </font><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
           <tr>
            <td><font class="text">State</font></td>
            <td colspan="3">
              <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="state">
                <option value="0" selected="selected">-Select One-</option>
                <?php
                    echo createDropDownForState($db,10);
                ?>
              </select><span style="color:red;">&nbsp;*</span>
            </td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
            <td><font class="text">City</font></td>
            <td colspan="3">
              <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="city">
                <option value="0" selected="selected">-Select One-</option>
                <?php
                    echo createDropDownForCities($db);
                ?>
              </select><span style="color:red;">&nbsp;*</span>
            </td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
            <td><font class="text">Contact Number</font></td>
            <td colspan="2">
            <table>
                <tr>
                <td colspan="2"><input type="checkbox" checked="checked" value="1" name="mobileno" />Mobile
                        <span style="padding-left:35px;">&nbsp;</span>
                        <input type="checkbox" id="checklandline" value="2" name="landlineNo" onclick="return showlandline();" />LandLine</font></td>
                </tr>
                <tr>
                    <td><input type="text" style="width: 36px;" id="country_code_mob" name="country_code_mob" value="+91" >
                        <input type="text" style="width: 100px;" maxlength="10" value="Mobile" onclick="return check_mobile();" id="mobile_input" name="mobile"><span style="color:red;">&nbsp;*</span>
                    </td>
                    <td>
                        <input type="text" maxlength="15" onclick="return check_landline();" value="Landline" style="display:none;width:100px" id="landline_input" name="landline">
                    </td>
                </tr>
                <!--<tr>
                    <td colspan="2">
                        <font class="text">
                        <select name="showmobile"  class="text">&nbsp;
                        <option  selected  value="y">Show to accepted/paid members</option>
                        <option  value="n">Don't show to anybody</option>
                        </select>
                        </font>
                    </td>
                </tr>-->
            </table>
            </td>
           </tr>
        
         <tr>
            <td colspan="4" height="5"></td>
          </tr>          
            <tr>
            <td colspan="4" height="6"></td>
          </tr>
            <tr>
            <td width="25%" ><font class="text" >Your Contact Address</font></td>
            <td  colspan="2">
            <textarea name="contact_address" id="" cols="15" rows="2" style="width: 300px;" onkeydown="fixme(this)" onblur="fixme(this)"></textarea>
            <span style="color:red;">&nbsp;*</span></td>
          </tr>
           
        <tr>
            <td colspan="4" height="6"></td>
          </tr>
           <tr>
            <td><font class="text">Religion</font></td>
            <td colspan="3"><font class="text">
              <select style="font-size: 9pt; width: 120px; font-family: arial, verdana, sans-serif" name="religion">
            <?php
               echo createDropDownForReligion($db, 2);
            ?>
              </select>
            </font><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
           <td><font class="text">Caste</font></td>
           <td colspan="3">
           <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif" name="caste">
              <option value="0">-Select any one option-</option>
              <?php
              echo createDropDownForCaste($db);
              ?>
            </select><span style="color:red;">&nbsp;*</span>
            </td>
          </tr>
          <tr>
          <td colspan="4" height="6"></td>
          </tr>
          <tr>
            <td><font class="text">Raasi / Moon Sign</font></td>
            <td colspan="3"><font class="text">
            <select style="font-size: 9pt; width: 140px; font-family: arial, verdana, sans-serif" name="raasi">
                <!--<option value="0">-Select any one-</option>-->
               <?php
                echo createDropDownForRaasi();
               ?>
              </select>
            </font><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="6"></td>
          </tr>
          <tr>
            <td><font class="text">Mother tongue (state of origin) * </font></td>
            <td colspan="3"><font class="text">
 <select style="font-size: 9pt; width: 260px; font-family: arial, verdana, sans-serif" size="1" name="mothertongue">
                <option value="0">-Select any
                  one-</option>
               <?php
               echo createDropDownForMotherTongue($db);
               ?>
              </select>
            </font><span style="color:red;">&nbsp;*</span></td>
          </tr>
           <tr>
            <td colspan="4" height="5"></td>
          </tr>
           <tr>
            <td valign="top">&nbsp;</td>
            <td colspan="3" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top" width="90">&nbsp;
                <input type="hidden" value="1" name="Token" /></td>
            <td colspan="3" align="left"><font face="verdana" size="2">
             <input type="image" src="images/crt_btn.png" name="submit" id="img_submit" />
              </font><font face="arial" size="2">&nbsp; </font></td>
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




function checkEmailid() {
	var emailid = document.frmRegistration.emailid.value;
	if (emailid == '') {
		return false;
	}
	$.ajax({
	   type: "POST",
	   url: "<?php echo DIR_WS_ROOT?>ajax_function.php",
	   data: "f=validateemail&emailid="+emailid,
	   success: function(msg) {
		if(msg == 1) {
			$("#emailid_error").css('display','block');
			document.getElementById("img_submit").disabled=true;
			document.frmRegistration.emailid.focus();
			return false;
		} else {
			$("#emailid_error").css('display','none');
			document.getElementById("img_submit").disabled=false;
			return false;
		}
	   }
	 });
	 return false;
 }

 function checkUsername() {
	var loginid = document.frmRegistration.loginid.value;
	if (loginid == '') {
		return false;
	}
	$.ajax({
		
	   type: "POST",
	   url: "<?php echo DIR_WS_ROOT?>ajax_function.php",
	   data: "f=validatelogin&loginid="+loginid,
	   success: function(msg) {
		if(msg == 1) {
			$("#loginid_error").css('display','block');
			document.getElementById("img_submit").disabled=true;
			document.frmRegistration.loginid.focus();
			return false;
		} else {
			$("#loginid_error").css('display','none');
			document.getElementById("img_submit").disabled=false;
			return false;
		}
	   }
	 });
	 return false;
 }
 
 
 
 function showlandline() {
	 if($("#checklandline").attr('checked')) {
		$("#landline_input").css('display','block');
	 } else {
		$("#landline_input").css('display','none');
	 }
 }

 function check_landline() {
	var landline_val = document.frmRegistration.landline.value;
	if(landline_val == "Landline") {
		document.frmRegistration.landline.value = "";
	}
	return false;
 }
 function check_mobile() {
	var mobile_val = document.frmRegistration.mobile.value;
	if(mobile_val == "Mobile") {
		document.frmRegistration.mobile.value = "";
	}
	return false;
 }
</script>
