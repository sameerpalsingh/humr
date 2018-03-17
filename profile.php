<?php
include("includes/application_top.php");
$sql_profile = "select * from hum_registration where id='".$_SESSION['sess_user_id']."'";
$db = new sql_db;
$db->executeQuery($sql_profile);

if(empty($_SESSION['sess_user_id'])) {
    header("Location: registration.php");
    exit;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<link href="<?php echo DIR_FS_TEMPLATES?>style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function dispaly_Horoscope() {
	document.getElementById("dispaly_Horoscope").style.display = "block";
	document.getElementById("scanned_Horoscope").style.display = "none";
}

function scanned_Horoscope() {
	document.getElementById("scanned_Horoscope").style.display = "block";
	document.getElementById("dispaly_Horoscope").style.display = "none";
}
function limitText(limitField, limitCount) {
	limitCount.value = limitField.value.replace(/\s{2,}/g, ' ').length;
	limitField.value = limitField.value.replace(/\s{2,}/g, ' ');
	
}

function login_validate2() {

    /*
	if(document.frmRegistration.Name.value.length<1){
        alert ("Please enter the name field !!");
        document.frmRegistration.Name.focus();
        return false;
    }
	var name = /^[A-Za-z ]+$/;
	 if(!name.test(document.frmRegistration.Name.value)){
        alert ("Please enter the Correct Name !!");
        document.frmRegistration.Name.focus();
        return false;
    }
	*/
	 if(document.frmRegistration.subcast.value == ""){
        alert ("Please enter Sub-Caste/Surname field !!");
        document.frmRegistration.subcast.focus();
        return false;
    }
	var cast = /^[A-Za-z ]+$/;
	 if(!cast.test(document.frmRegistration.subcast.value)){
        alert ("Please enter the Correct Sub-Caste/Surname !!");
        document.frmRegistration.subcast.focus();
        return false;
    }
    
	var gotra = /^[A-Za-z ]+$/;
	 if(!gotra.test(document.frmRegistration.gotra.value) && (document.frmRegistration.gotra.value !="")){
        alert ("Please enter the Correct Gotra/Gothram !!");
        document.frmRegistration.gotra.focus();
        return false;
    }
     if(document.frmRegistration.origin.value == ""){
        alert ("Please enter Ancestral Origin (Native) field !!");
        document.frmRegistration.origin.focus();
        return false;
    }
	var ancestral = /^[A-Za-z ]+$/;
	 if(!ancestral.test(document.frmRegistration.origin.value)){
        alert ("Please enter the Correct Ancestral Origin (Native) Field !!");
        document.frmRegistration.origin.focus();
        return false;
    }
	
	
	
   

	//###########################################""Family Details""####################################################
	
	
	
	
	/*
   else if (document.frmRegistration.relegion.selectedIndex == 0){
        alert ("Please select your relegion !!");
        document.frmRegistration.relegion.focus();
        return false;
    }
   else if (document.frmRegistration.caste.selectedIndex == 0){
        alert ("Please select caste !!");
        document.frmRegistration.caste.focus();
        return false;
    }
   else if (document.frmRegistration.raasi.selectedIndex == 0){
        alert ("Please select raasi !!");
        document.frmRegistration.raasi.focus();
        return false;
    }
   else if (document.frmRegistration.mothertongue.selectedIndex == 0){
        alert ("Please select your mother tongue !!");
        document.frmRegistration.mothertongue.focus();
        return false;
    }
   else if (document.frmRegistration.education.selectedIndex == 0){
        alert ("Please select education !!");
        document.frmRegistration.education.focus();
        return false;
   }
   else if (document.frmRegistration.detaileducation.value.length < 1){
        alert ("Please select detail education !!");
        document.frmRegistration.detaileducation.focus();
        return false;
   }
   else if (document.frmRegistration.occupation.selectedIndex == 0){
        alert ("Please select occupation !!");
        document.frmRegistration.occupation.focus();
        return false;
    }
   else if (document.frmRegistration.income.selectedIndex == 0){
        alert ("Please select your annual income !!");
        document.frmRegistration.income.focus();
        return false;
    }
   else if (document.frmRegistration.citizenship.selectedIndex == 0){
        alert ("Please select citizenship !!");
        document.frmRegistration.citizenship.focus();
        return false;
    }
   else if (document.frmRegistration.livingin.selectedIndex == 0){
        alert ("Please select country living in !!");
        document.frmRegistration.livingin.focus();
        return false;
    }
   else if (document.frmRegistration.nativestate.selectedIndex == 0){
        alert ("Please select your native state !!");
        document.frmRegistration.nativestate.focus();
        return false;
    }
   else if (document.frmRegistration.residingcity.selectedIndex == 0){
        alert ("Please enter your residing city !!");
        document.frmRegistration.residingcity.focus();
        return false;
    }
//Email Validation script------------
   else if(document.frmRegistration.emailid.value == "" ) {
        alert("Please enter your E-mail ID.");
        document.frmRegistration.emailid.focus();
        return false;
    }
   else if (document.frmRegistration.emailid.value.length != 0) {
                    if(document.frmRegistration.emailid.value.indexOf(" ") != -1)    {
                    alert("Pls. Enter Correct E-Mail Id without spaces.");
                    document.frmRegistration.emailid.focus();
                    return false;
                    }
                    if(document.frmRegistration.emailid.value.indexOf("@") == -1)    {
                    alert("Invalid E-Mail Id..!");
                    document.frmRegistration.emailid.focus();
                    return false;
                    }
                //return true;

                validarr = document.frmRegistration.emailid.value.split("@");
                if(validarr[0].length==0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.frmRegistration.emailid.focus();
                return false;
                }
                if(validarr[1].indexOf("@") >=0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.frmRegistration.emailid.focus();
                return false;
                }
                if(validarr[1].length==0)       {
                alert("Pls. Enter Correct Email Id..! ");
                document.frmRegistration.emailid.focus();
                return false;
                }
                if(validarr[1].length != 0)       {

                    if(validarr[1].indexOf(".") == -1)         {
                    alert("Pls. Enter Correct Email Id..!");
                    document.frmRegistration.emailid.focus();
                    return false;
                    }
                    validemail = validarr[1].split(".");
                     if(validemail[0].length==0)           {
                     alert("Pls. Enter Correct Email Id..!");
                     document.frmRegistration.emailid.focus();
                     return false;
                    }
                    if(validemail[1].length==0)          {
                    alert("Pls. Enter Correct Email Id..!");
                    document.frmRegistration.emailid.focus();
                    return false;
                    }
                }

        }
//-----------till here------------------/*

if (document.frmRegistration.loginid.value.length < 4){
	
		//alert(document.frmRegistration.divLogin.value);
        alert("Pls. enter your LoginId!!");
        document.frmRegistration.loginid.focus();
        return false;
   }
else if (document.frmRegistration.divLogin.value.length > 0){
        alert("Pls. enter your LoginId!!");
        document.frmRegistration.loginid.focus();
        return false;
   }
else if (document.frmRegistration.password.value.length == 0) {
        alert("Kindly enter desired Password.");
        document.frmRegistration.password.focus();
        return false;
    }
else if ( (document.frmRegistration.password.value.length < 4) || (document.frmRegistration.password.value.length > 15 )) {
        alert("Invalid Password !! . Password should be greater than 4 characters and less than 15 characters.");
        document.frmRegistration.password.focus();
        return false;
    }
else if (document.frmRegistration.password2.value.length == 0) {
        alert("Kindly confirm your desired Password.");
        document.frmRegistration.password2.focus();
        return false;
    }
else if ( (document.frmRegistration.password.value) != (document.frmRegistration.password2.value) ){
        alert("Please enter same Passwords.");
        document.frmRegistration.password2.focus();
        return false;
    }
else if (document.frmRegistration.registeredby.selectedIndex == 0){
        alert ("Pls. Select Who has Register this Profile !");
        document.frmRegistration.registeredby.focus();
        return false;
    }
else if (document.frmRegistration.referredby.selectedIndex == 0){
        alert ("Pls. Select Who has Referred you to Our Site!!");
        document.frmRegistration.referredby.focus();
        return false;
    }
else if (document.frmRegistration.terms.checked==false){
        alert ("Pls. Tick the Terms & Condition Box !!");
        document.frmRegistration.terms.focus();
        return false;
    }
   return true;
   */
}

//-->
</script>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="223" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
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
                  <td width="24" height="25"><img src="images/box1.gif" alt="" width="25" height="25" /></td>
                  <td  style="border-top:1px solid #676666">&nbsp;</td>
                  <td width="25" align="right"><img src="images/box2.gif" alt="" width="25" height="25" /></td>
                </tr>
                <tr>
                  <td width="24" style="border-left:1px solid #676666">&nbsp;</td>
                  <td> <?php include(DIR_FS_TEMPLATES."profile.tpl.php"); ?> </td>
                  <td width="24" style="border-right:1px solid #676666">&nbsp;</td>
                </tr>
                <tr>
                  <td width="24" height="25"><img src="images/box3.gif" alt="" width="25" height="25" /></td>
                  <td height="24" style="border-bottom:1px solid #676666">&nbsp;</td>
                  <td width="25"><img src="images/box4.gif" alt="" width="25" height="25" /></td>
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
          </table></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>

</body>
</html>
