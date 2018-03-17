<?php
include("includes/application_top.php");

//checking the username with password

$db = new sql_db;
$id=$_REQUEST['id'];
if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}

//$sess_user_name = $_SESSION['sess_user_name'];
//$sess_user_id = (int)$_SESSION['sess_user_id'];

$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$id' and hum_members_profile.user_id='$id'");


//$rs = $db->executeQuery('SELECT * FROM hum_registration WHERE id='.$sess_user_id);
$row = $db->fetchRow($rs);

$familyvalues			=$row['family_values'];
$familytype				=$row['family_type'];
$familystatus			=$row['family_status'];
$fatheroccupation		=$row['father_occupation'];
$motheroccupation		=$row['mother_occupation'];
$brother				=$row['brother'];
$sister					=$row['sister'];
$livewith				=$row['live_with_parents'];
$aboutfamily			=$row['about_family'];



//$err_message = $_GET['err_message'];

if (isset($_GET['mess'])) {
    $message = "*Your profile is updated successfully*";
}

?>

<script>
function submit_this(){
	
	// the fields that are to be processed
	//var field1 = $("input[@name=field1]").val();
	//var field2 = $("input[@name=field2]").val();

	// ajax call to itself 
	//$.post("form.php", {input1: field1, input2: field2}, function(data){$("#message").text(data);});

	
	//return false;
	}

</script>


<html>


	
<form name="familydetails" method="post" action="familydetails_update.php?id=<?php echo $id; ?>" onsubmit="return familydetail();">
<table>
<tr>
<td>
<table>
<td colspan="2">
<font class="category"><h3 style="color:#669933">Family-Details</font></h3>
</td>
</tr>
                      <tr>
                            <td><font class="text">Family Values</font></td>
                            <td colspan="3">
							<table>
							<tr>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="1" name="rdbfamilyvalues" <?php if ($familyvalues=='1') echo 'checked'; ?>/>
                              Orthodox</td>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="2" name="rdbfamilyvalues" <?php if ($familyvalues=='2') echo 'checked'; ?>/>
                              Conservative</td>
							  <td style="font-size: 12px; font-family: arial, verdana, sans-serif"> <input type="radio"  value="3" name="rdbfamilyvalues" <?php if ($familyvalues=='3') echo 'checked'; ?>/>
                               Moderate</td>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="4" name="rdbfamilyvalues" <?php if ($familyvalues=='4') echo 'checked'; ?>/>
                               Liberal</td>
							  </tr>
							  </font>
							  </table>
							  </td>
                          </tr>
						  
						  <tr>
							<td height=5px;>
							
							</td>
							</tr>
							
						    <tr>
                            <td><font class="text">Family Type</font></td>
                            <td colspan="3">
							<table>
							<tr>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="1" name="rdbfamilytype" <?php if ($familytype=='1') echo 'checked';?> />Joint Family</td>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="2" name="rdbfamilytype" <?php if ($familytype=='2') echo 'checked';?>/>
                               Nuclear Family</td>
							  <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio"  value="3" name="rdbfamilytype" <?php if ($familytype=='3') echo 'checked';?> />
                               Others</td>
							  </tr>
							  </font>
							  </table>
							   </td>
                          </tr>
						  
						    
						   <tr>
						   <td height=5px;>
						   </td>
						   </tr>
						   
						    <tr>
							<td><font class="text">Family Status </font></td>
                            <td colspan="3">
							<table>
							<tr>
							 <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="1" name="rdbfamilystatus" <?php if ($familystatus=='1') echo 'checked'; ?>/>Rich/Affluent</td>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="2" name="rdbfamilystatus" <?php if ($familystatus=='2') echo 'checked'; ?>/>Upper Middle Class</td>
							  <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio"  value="3" name="rdbfamilystatus" <?php if ($familystatus=='3') echo'checked'; ?>/>Middle Class</td>
							  </tr>
							  </font>
							  </table>
							  </td>
                          
						  <tr>
						  <td height=5px;>
						  </td>
						  </tr>
						  
                            <td><font class="text">Father�s Occupation</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                            name="fatheroccupation">
                                <option value="0" selected="selected">-Select any One-</option>
                                <option value="1" <?php echo ($fatheroccupation== 1)? 'selected' : ''; ?>>Business/Entrepreneur</option>
                                <option value="2" <?php echo ($fatheroccupation== 2)? 'selected' : '' ; ?>>Service - Private</option>
                                <option value="3" <?php echo ($fatheroccupation== 3)? 'selected' : '' ; ?>>Service - Govt./PSU</option>
								<option value="4" <?php echo ($fatheroccupation== 4)? 'selected' : '' ; ?>>Army/Armed Forces</option>
								<option value="5" <?php echo ($fatheroccupation== 5)? 'selected' : '' ; ?>>Civil Services</option>
								<option value="6" <?php echo ($fatheroccupation== 6)? 'selected' : '' ; ?>>Retired</option>
								<option value="7" <?php echo ($fatheroccupation== 7)? 'selected' : '' ; ?>>Not Employed</option>
								<option value="8" <?php echo ($fatheroccupation== 8)? 'selected' : '' ; ?>>Expired</option>
                              </select>
                            </font></td>
                          </tr>
						  
						   <tr>
						   <td height=7px;>
						   </td>
                           </tr>
						   <tr>
                            <td><font class="text">Mother�s Occupation</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                            name="motheroccupation">    
                                <option value="0" selected="selected">-Select any One-</option>
                                <?php createDropDownForMotherOccup($motheroccupation);?>
                            </select>
                            </font></td>
                          </tr>
						  
						  <tr>
						  <td height=7px;>
						  </td>
						  </tr>
						  
						   <tr>
                            <td><font class="text">Brother(s)</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                            name="brother">
                                <option value="0" selected="selected">-Select any One-</option>
                                <option value="1" <?php echo ($brother== 1)? 'selected' : '' ; ?>>1</option>
                                <option value="2" <?php echo ($brother== 2)? 'selected' : '' ; ?>>2</option>
                                <option value="3" <?php echo ($brother== 3)? 'selected' : '' ; ?>>3</option>
								<option value="4" <?php echo ($brother== 4)? 'selected' : '' ; ?>>4</option>
								<option value="4+" <?php echo ($brother== "4+")? 'selected' : '' ; ?>>4+</option>
								</select>
                            </font></td>
                          </tr>
						   <tr>
                            <td  height=7px;></td>
                          </tr>
						  
						   <tr>
                            <td><font class="text">Sister(s)</font></td>
                            <td colspan="3"><font class="text">
                            <select style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
                            name="sister">
                                <option value="0" selected="selected">-Select any One-</option>
                                <option value="1" <?php echo ($sister== 1)? 'selected' : '' ; ?>>1</option>
                                <option value="2" <?php echo ($sister== 2)? 'selected' : '' ; ?>>2</option>
                                <option value="3" <?php echo ($sister== 3)? 'selected' : '' ; ?>>3</option>
								<option value="4" <?php echo ($sister== 4)? 'selected' : '' ; ?>>4</option>
								<option value="4+" <?php echo ($sister== "4+")? 'selected' : '' ; ?>>4+</option>
								</select>
                            </font></td>
                          </tr>
						  <tr>
						  <td height=7px>
						  </td>
                          </tr>
						    <tr>
                            <td><font class="text">Do you live with your parents </font></td>
                            <td colspan="3">
							<table>
							<tr>
							 <td style="font-size: 12px; font-family: arial, verdana, sans-serif">
							 <input type="radio" value="0" name="rdbliveparents" <?php if ($livewith=='0') echo 'checked'; ?>/>
                               Yes &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                              <td style="font-size: 12px; font-family: arial, verdana, sans-serif"><input type="radio" value="1" name="rdbliveparents" <?php if ($livewith=='1') echo 'checked'; ?> />
                              No</td>
							  </tr>
							  
							  </table>
							  </td>
                          </tr>
						   <tr>
                            
                          </tr>
						  <tr>
						  <td height=7px;>
						  </td>
						  </tr>
						  
						  <tr>
                            <td valign="top"><font class="text">Write about your Family</font></td>
                            <td colspan="2" style="font-size: 13px; font-family: arial, verdana, sans-serif">Tell us about your parents and/or siblings, what they do, their backgrounds etc.<br/>
<span style="float:left;" style="font-size: 12pt; width: 200px; font-family: arial, verdana, sans-serif" > 
<textarea name="about_yourfamily" id="about_yourself" style="width: 420px; height:130px;"value="<?php echo stripslashes($aboutfamily); ?>" cols="40" rows="5" class="fl" onKeyDown="limitText(this.form.about_yourfamily,this.form.countdown,500);" 
      onKeyUp="limitText(this.form.about_yourfamily,this.form.countdown);"><?php echo stripslashes($aboutfamily); ?></textarea><br/>
<span style="float:right;font-size:9px; font-family: arial, verdana, sans-serif;">(Minimum number of Characters- 100)</span>
<span style="float:left;font-size:9px; font-family: arial, verdana, sans-serif;"name="wordcount">Number Of Characters : <input id="about_yourself_count" type="text" style="background: none repeat scroll 0% 0% transparent; border: 0pt none; width: 21px; color: rgb(0, 155, 0);" size="4" value="0" name="countdown" readonly="">
</span>
							</span>
							
							</td>
							</tr>
							<tr>
							<td>
							&nbsp;
							</td>
							</tr>
							<tr>

		<td></td>
		<td>
		 <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
		&nbsp;
		<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		</tr>
                        
                            </tbody>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </form>
<script type="text/javascript">
function checkfile() {
	var filename = document.familydetails.horoscope_file.value.split('.');
	var len = filename.length;
	if(filename[len-1] != "doc" && filename[len-1] != "docx" && filename[len-1] != "pdf" && filename[len-1] != "jpg" && filename[len-1] != "jpeg" && filename[len-1] != "gif" && filename[len-1] != "bmp") {
		alert("file you have uploded don't support,please upload only");
		return false;
	}
}

function familydetail()
{

	 if (document.familydetails.rdbfamilyvalues[0].checked == false && document.familydetails.rdbfamilyvalues[1].checked == false && document.familydetails.rdbfamilyvalues[2].checked == false && document.familydetails.rdbfamilyvalues[3].checked == false ) {
			alert("Please select Field Family Values.");
				document.familydetails.rdbfamilyvalues[0].focus();
				return false;
	}
	else if (document.familydetails.rdbfamilytype[0].checked == false && document.familydetails.rdbfamilytype[1].checked == false && document.familydetails.rdbfamilytype[2].checked == false ) {
			alert("Please select Field Family Type.");
				document.familydetails.rdbfamilytype[0].focus();
				return false;
	}
	else if (document.familydetails.rdbfamilystatus[0].checked == false && document.familydetails.rdbfamilystatus[1].checked == false && document.familydetails.rdbfamilystatus[2].checked == false ) {
			alert("Please select Field Family Status .");
				document.familydetails.rdbfamilystatus[0].focus();
				return false;
	}
     else if ( document.familydetails.fatheroccupation.selectedIndex == 0 ) {
        alert ("Please select Father�s Occupation !!");
        document.familydetails.fatheroccupation.focus();
        return false;
    }
    else if ( document.familydetails.motheroccupation.selectedIndex == 0 ) {
        alert ("Please select Mother�s Occupation !!");
        document.familydetails.motheroccupation.focus();
        return false;
    }
    else if ( document.familydetails.brother.selectedIndex == 0 ) {
        alert ("Please select your Brother(s) !!");
        document.familydetails.brother.focus();
        return false;
    }
    else if ( document.familydetails.sister.selectedIndex == 0 ) {
        alert ("Please select your Sister(s) !!");
        document.familydetails.sister.focus();
        return false;
    }
	else if (document.familydetails.rdbliveparents[0].checked == false && document.familydetails.rdbliveparents[1].checked == false ) {
			alert("Please select Field Do you live with your parents .");
				document.familydetails.rdbliveparents[0].focus();
				return false;
	}
	else if(document.familydetails.about_yourfamily.value == 0){
        alert ("Please Write about your Family!!");
        document.familydetails.about_yourfamily.focus();
        return false;
	}
	if(document.familydetails.about_yourfamily.value.length < 100 || document.familydetails.about_yourfamily.value.length > 500 ) {
      alert ("Please enter Minimun 100 Char upto 500 char.......");
      document.familydetails.about_yourfamily.focus();
      return false;
    }
}
	function limitText(limitField, limitCount) {
	limitCount.value = limitField.value.length;
}

</script>
</table>
</form>


</html>














