<?php
include("includes/application_top.php");

//checking the username with password
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db;

if (isset($messages) && count($messages) > 0) {
    $message = "Note : <br>";
    foreach ($messages as $value) {
        $message.= $value."<br>";
    }
}

$sess_user_name = $_SESSION['sess_user_name'];
$sess_user_id = (int)$_SESSION['sess_user_id'];

$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id='$sess_user_id' and hum_members_profile.user_id='$sess_user_id'");

$row = $db->fetchRow($rs);

$religion           = $row['religion'];
$caste              = $row['caste'];
$subcast            = $row['subcast'];
$gotra              = $row['gotra'];
$ancestralorigin    = $row['ancestralorigin'];
$nakshatra          = $row['nakshatra'];
$raasi              = $row['raasi'];
$mothertongue       = $row['mothertongue'];
$manglik            = $row['manglik'];


//$mothertongue=$db->executeQuery('SELECT mother_tongue FROM hum_mother_tongue WHERE id='.$mothertongue);
//$tongue = $db->fetchRow($mothertongue);

?>

<html>
<head>

<script type="text/javaScript">

function login_validate2() {

    if(document.socialinfo.religion.value == 0){
        alert ("Please select religion field !!");
        document.socialinfo.religion.focus();
        return false;
    }
	else if(document.socialinfo.caste.value == 0){
        alert ("Please select caste field !!");
        document.socialinfo.caste.focus();
        return false;
    }

	else if(document.socialinfo.subcast.value == ""){
        alert ("Please enter Sub-Caste/Surname field !!");
        document.socialinfo.subcast.focus();
        return false;
    }
	var cast = /^[A-Za-z ]+$/;
	 if(!cast.test(document.socialinfo.subcast.value)){
        alert ("Please enter the Correct Sub-Caste/Surname !!");
        document.socialinfo.subcast.focus();
        return false;
    }
   /* if(document.socialinfo.gotra.value == ""){
        alert ("Please enter Gotra/Gothram field !!");
        document.socialinfo.gotra.focus();
        return false;
    }
	var gotra = /^[A-Za-z ]+$/;
	 if(!gotra.test(document.socialinfo.gotra.value)){
        alert ("Please enter the Correct Gotra/Gothram !!");
        document.socialinfo.gotra.focus();
        return false;
    }*/
     if(document.socialinfo.ancestralorigin.value == ""){
        alert ("Please enter Ancestral Origin (Native) field !!");
        document.socialinfo.ancestralorigin.focus();
        return false;
    }
	var ancestral = /^[A-Za-z ]+$/;
	 if(!ancestral.test(document.socialinfo.ancestralorigin.value)){
        alert ("Please enter the Correct Ancestral Origin (Native) Field !!");
        document.socialinfo.ancestralorigin.focus();
        return false;
    }

	/*else if (document.socialinfo.nakshatra.value== 0){
        alert ("Please select Nakshatra !!");
        document.socialinfo.nakshatra.focus();
        return false;
    }*/

	 else if (document.socialinfo.raasi.value == 0){
        alert ("Please select raasi !!");
        document.socialinfo.raasi.focus();
        return false;
    }

	else if (document.socialinfo.rdbmanglik[0].checked == false && document.socialinfo.rdbmanglik[1].checked == false && document.socialinfo.rdbmanglik[2].checked == false && document.socialinfo.rdbmanglik[3].checked == false ) {
		alert("Please select Field Manglik.");
		document.socialinfo.rdbmanglik[0].focus();
		return false;
	}

   else if (document.socialinfo.mothertongue.selectedIndex == 0){
        alert ("Please select your mother tongue !!");
        document.socialinfo.mothertongue.focus();
        return false;
    }
	
	
   
}
</script>

</head>

<form name="socialinfo" method="post" action="socialinfo_update.php" onsubmit="return login_validate2();">

<table>
<tr>
<td>
  <img src="images/social-back.gif" alt="" height="30"/></td>
  </tr>
   <tr>
						<td>
						&nbsp;
						</td>
						</tr>
                         <tr>
                         <td><font class="text">Religion</font></td>
                         <td>
                         <select style="font-size: 9pt; width:260px;" name="religion">
                         <?php
                         echo createDropDownForReligion($db, $religion);
                         ?>
                         </select>
                          </tr>
                          
						  <tr>
						<td height=7px;>
						</td>
						</tr>

						  <tr>
                          <td><font class="text">Caste</font></td>
                          <td>
                          <select style="font-size: 9pt; width:260px;" name="caste">
                          <option value="0">Select caste</option>
                          <?php
                          echo createDropDownForCaste($db, $caste);
                          ?>
                          </select>
						  <!--<?php
						  echo $cast['caste'];
						  ?>-->
                          </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>
                          <td><font class="text">Sub-Caste/Surname</font></td>
                          <td >
                          <input class="box" maxlength="30" name="subcast" style="width:255px;" value="<?php echo $subcast; ?>"/>
                          </td>
                          </tr>
						  <tr>
					<td height=7px;>
						</td>
						</tr>

 					      <tr>
                          <td><font class="text">Gotra/Gothram</font></td>
                          <td >
                          <input class="box" maxlength="30" name="gotra" style="width:255px;" value="<?php echo $gotra; ?>"/>
						  
                            
                          </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>

						  <tr>
                          <td><font class="text">Ancrstral Origin (Native)</font></td>
                          <td >
                          <input class="box" maxlength="30" name="ancestralorigin" style="width:255px;" value="<?php echo $ancestralorigin; ?>"/>
                            
                          </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>

						  <tr>
                          <td><font class="text">Nakshatra</font></td>
                          <td>
                          <select style="font-size: 9pt;width:260px;" name="nakshatra">
                          <option value="0">-Select Nakshatra-</option>
                          <?php
                          echo createDropDownForNakshatra($db, $nakshatra);
                          ?>
						  </font>
						  </td>
                          </tr>
                             
                          </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>

                          <tr>
                          <td><font class="text">Raasi / Moon Sign</font></td>
                          <td>
                          <select style="font-size: 9pt; width:260px;" name="raasi">
                          <?php
                          echo createDropDownForRaasi($raasi);
                          ?>
                          </select>
                          </font>
						  
						  </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>
						<tr>
                          <td><font class="text">Manglik </font></td>
                          <td ><font class="text"></font>
						  <font class="txt">
						  <input type="radio" <?php echo ($manglik == "1")? 'checked' : '';?> value="1" name="manglik" />No
                          <input type="radio" <?php echo ($manglik == "2")? 'checked' : '';?> value="2" name="manglik" />Yes
					      <input type="radio" <?php echo ($manglik == "3")? 'checked' : '';?> value="3" name="manglik" /> Don't Know
                          <input type="radio" <?php echo ($manglik == "4")? 'checked' : '';?> value="4" name="manglik" />Angshik (Partial Manglik)
					      </font>
						  </td>
                          </tr>
						   <tr>
						<td height=7px;>
						</td>
						</tr>
                          <tr>
                          <td><font class="text">Mother tongue (state of origin) * </font></td>
                          <td>
                          <select style="font-size: 9pt; " name="mothertongue">
                          <option value="0">Select</option>
						  <?php
                          echo createDropDownForMotherTongue($db,$mothertongue);
                          ?>
                          </select>
                          </font>
                          </td>
                          </tr>
						  <tr>
						<td height=7px;>
						</td>
						</tr>
                          

						  <tr>
						  <td>&nbsp;</td>
						  </tr>
						  <tr>

		<td></td>
		<td>
		 <input type="image"src="images/submit.gif" title="Click To Update" width="76" height="22" border="0" />
		&nbsp;
		<!--<input type="submit" id="cancel" value="Cancel" onclick="tb_remove()">--></td>
		</tr>
</table>

<style>
.txt{font-size: 12px; font-family: arial, verdana, sans-serif;width: 80px;};
</style>
</html>