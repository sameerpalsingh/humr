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
$sess_user_id   = (int)$_SESSION['sess_user_id'];

$err_message = "";
$message = "";

$rs = $db->executeQuery("SELECT * FROM
                        hum_registration LEFT JOIN hum_members_profile 
                        ON (hum_registration.id = hum_members_profile.user_id)
                        WHERE hum_registration.id='$sess_user_id'");

$row = $db->fetchRow($rs);

$name					= $row['name'];
$userid					= $row['loginid'];
$password				= $row['password'];
$gender					= $row['gender'];
$dob					= $row['dob'];
$dobArr					= explode("-", $dob);
$maritalstatus                          = $row['marital_status'];
$lookingfor				= $row['looking_for'];
$height					= $row['height'];
$bodytype				= $row['bodytype'];
$complexion				= $row['complexion'];
$weight					= $row['weight'];
$physicalstatus                         = $row['challenged'];
$religion				= $row['religion'];
$caste					= $row['caste'];
$subcast				= $row['subcast'];
$gotra					= $row['gotra'];
$ancestralorigin                        = $row['ancestralorigin'];
$nakshatra				= $row['nakshatra'];
$raasi					= $row['raasi'];
$mothertongue                           = $row['mothertongue'];
$manglik				= $row['manglik'];
$language				= $row['languages'];
$highestdegree                          = $row['highestdegree'];
//$detaileducation                      = $row['detaileducation'];
$workarea                               = $row['workarea'];
$workstatus                             = $row['work_status'];
$educational_background                 = $row['educational_background'];
$professional_background                = $row['professional_background'];
$annualincome                           = $row['annualincome'];
$physical_status                        = $row['physical_status'];
$diet					= $row['diet'];
$smoke					= $row['smoke'];
$drink					= $row['drink'];
$citizenship                            = $row['country'];
$livingin                               = $row['livingin'];
$nativestate                            = $row['state'];
$city                   = $row['city'];
$emailid                = $row['emailid'];
$contact_number         = $row['contact_number'];
$contact_address        = $row['contact_address'];
$bloodgroup             = $row['bloodgroup'];
$description            = $row['aboutyourself'];

/******************family**********************************/

$familyvalues     = !empty($row['family_values'])?$row['family_values']:'N/A';
$familytype       = !empty($row['family_type'])?$row['family_type']:'N/A';
$familystatus     = !empty($row['family_status'])?$row['family_status']:'N/A';
$fatheroccupation = !empty($row['father_occupation'])?$row['father_occupation']:'N/A';
$motheroccupation = !empty($row['mother_occupation'])?$row['mother_occupation']:'N/A';
$brother          = !empty($row['brother'])?$row['brother']:'N/A';
$sister           = !empty($row['sister'])?$row['sister']:'N/A';
$livewith         = !empty($row['live_with_parents'])?$row['live_with_parents']:'N/A';
$aboutfamily      = !empty($row['about_family'])?$row['about_family']:'N/A';

/******************Desired Partner**********************************/

$p_age      = !empty($row['partner_age'])?$row['partner_age']:'N/A';
$p_status   = !empty($row['partner_marital_status'])?$row['partner_marital_status']:'N/A';
$p_height   = !empty($row['partner_height'])?$row['partner_height']:'';
$p_region   = !empty($row['partner_state_region'])?$row['partner_state_region']:'N/A';
$p_religion = !empty($row['partner_religion'])?$row['partner_religion']:'N/A';
$p_cast     = !empty($row['partner_cast'])?$row['partner_cast']:'N/A';
$p_income   = !empty($row['partner_annual_income'])?$row['partner_annual_income']:'N/A';
$p_desc     = !empty($row['desired_partner'])?$row['desired_partner']:'N/A';

$pheight=explode('to',$p_height);
if ($p_height == '') {
    $pheightfrom = "";
    $pheightto   = "";
} else {
    $heightfrom=$pheight[0];
    $heightto=$pheight[1];
    $height1=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$heightfrom);
    $pheightfrom = $db->fetchRow($height1);
    $height2=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$heightto);
    $pheightto = $db->fetchRow($height2);
}

if (isset($highestdegree) && $highestdegree > 0) {
    $highestdegree=$db->executeQuery('SELECT highestdegree FROM hum_highestdegree WHERE id='.$highestdegree);
    $degree = $db->fetchRow($highestdegree);    
} else {
    $degree = array('highestdegree'=>'');
}

if (isset($nakshatra) && $nakshatra > 0) {
    $nakshatra=$db->executeQuery('SELECT nakshatra FROM hum_nakshatra WHERE id='.$nakshatra);
    $nak = $db->fetchRow($nakshatra);
} else {
    $nak = '';
}

if (isset($height) && $height > 0) {
    $height=$db->executeQuery('SELECT height FROM hum_height WHERE id='.$height);
    $high = $db->fetchRow($height);
} else {
    $high = '';
}

if (isset($bloodgroup) && $bloodgroup > 0) {
    $bloodgroup=$db->executeQuery('SELECT bloodgroup FROM hum_bloodgroup WHERE id='.$bloodgroup);
    $blood = $db->fetchRow($bloodgroup);
} else {
    $blood = '';
}

if (isset($religion) && $religion > 0) {
    $religion=$db->executeQuery('SELECT religion FROM hum_religion WHERE id='.$religion);
    $rel = $db->fetchRow($religion);
} else {
    $rel = "";
}

if (isset($caste) && $caste > 0) {
    $caste=$db->executeQuery('SELECT caste FROM hum_caste WHERE id='.$caste);
    $cast = $db->fetchRow($caste);
} else {
    $cast = "";
}

if (isset($city) && $city > 0) {
    $city=$db->executeQuery('SELECT city FROM hum_cities WHERE id='.$city);
    $citi = $db->fetchRow($city);
} else {
    $citi = "";
}

if (isset($citizenship) && $citizenship > 0) {
    $citizen=$db->executeQuery('SELECT country FROM hum_countries WHERE id='.$citizenship);
    $cont = $db->fetchRow($citizen);
} else {
    $cont = "";
}

if (isset($livingin) && $livingin > 0) {
    $livingin=$db->executeQuery('SELECT country FROM hum_countries WHERE id='.$livingin);
    $living = $db->fetchRow($livingin);
} else {
    $living = "";
}

if (isset($nativestate) && $nativestate > 0) {
    $nativestate=$db->executeQuery('SELECT state FROM hum_state WHERE id='.$nativestate);
    $stat = $db->fetchRow($nativestate);
} else {
    $stat = "";
}

if (isset($workarea) && $workarea > 0) {
    $workarea=$db->executeQuery('SELECT workarea FROM hum_workarea WHERE id='.$workarea);
    $work = $db->fetchRow($workarea);
} else {
    $work = array("workarea"=>"");
}

if (isset($workstatus) && $workstatus > 0) {
    $workstatus=$db->executeQuery('SELECT workstatus FROM hum_workstatus WHERE id='.$workstatus);
    $status = $db->fetchRow($workstatus);
} else {
    $status = "";
}

if (isset($weight) && $weight > 0) {
    $weight=$db->executeQuery('SELECT weight FROM hum_weight WHERE id='.$weight);
    $kg = $db->fetchRow($weight);
} else {
    $kg = "";
}

//$pic=$db->executeQuery('SELECT image_name_original_size FROM hum_members_images WHERE id='.$pic);
//$img = $db->fetchRow($pic);

if (isset($mothertongue) && $mothertongue > 0) {
    $mothertongue=$db->executeQuery('SELECT mother_tongue FROM hum_mother_tongue WHERE id='.$mothertongue);
    $tongue = $db->fetchRow($mothertongue);
} else {
    $tongue = "";
}

if (isset($physicalstatus) && $physicalstatus > 0) {
    $physical=$db->executeQuery('SELECT physicalstatus FROM hum_challenged WHERE id='.$physicalstatus);
    $phy = $db->fetchRow($physical);
} else {
    $phy = "";
}

$sql_images = "SELECT image_name_100_size
               FROM hum_members_images,hum_registration
               WHERE hum_members_images.id=hum_registration.pic and hum_members_images.member_id=".$_SESSION['sess_user_id'];
$rs_images = $db->executeQuery($sql_images);

$contact=explode(',', $contact_number);
$mobile   = isset($contact[0])?$contact[0]:'';
$landline = isset($contact[1])?$contact[1]:'';

$dateofbirth = explode('-',$dob);
$year  = $dateofbirth[0];
$month = isset($dateofbirth[1])?$dateofbirth[1]:'';
$day   = isset($dateofbirth[2])?$dateofbirth[2]:'';

if (count($dobArr) == 1) {
    $dobArr[0] = "00";
    $dobArr[1] = "00";
    $dobArr[2] = "0000";
};

function getDayOfDOB($day)
{
    $output = "";
    for ($i=1; $i<=31; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $day) {
            $output.= "selected";

        }
        $output.= ">".$i."</option>";
    }
    return $output;
}
//$month=$dobArr[0];
function getMonthOfDOB($month)
{
    $output = "";
    for ($i=1; $i<=12; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $month) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}

function getYearOfDOB($year)
{
    $output = "";
    for ($i=1960; $i<=1991; $i++) {
        $output.= "<option value='".$i."' ";
        if ($i == $year) {
            $output.= "selected";
        }
        $output.= ">".$i."</option>";
    }
    return $output;
}


//$err_message = $_GET['err_message'];

if (isset($_GET['mess'])) {
    $message = "*Your profile is updated successfully*";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: Welcome to HumRaahi.com ::</title>
<link href="<?php echo DIR_FS_TEMPLATES?>style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo DIR_WS_JS?>func_ajax.js" type="text/JavaScript"></script>

<script type="text/javascript">
<!--
function login_validate() {


    if(document.frmEditProfile.name.value.length<1){
        alert ("Please enter the name field !!");
        document.frmEditProfile.name.focus();
        return false;
    }

    else if(document.frmEditProfile.day.selectedIndex == 0){
        alert ("Please enter date field !!");
        document.frmEditProfile.day.focus();
        return false;
    }
    else if(document.frmEditProfile.month.selectedIndex == 0){
        alert ("Please enter month field !!");
        document.frmEditProfile.month.focus();
        return false;
    }
    else if(document.frmEditProfile.year.selectedIndex == 0){
        alert ("Please enter year field !!");
        document.frmEditProfile.year.focus();
        return false;
    }
    else if (document.frmEditProfile.maritalstatus.selectedIndex == 0){
        alert ("Please select marital status !!");
        document.frmEditProfile.maritalstatus.focus();
        return false;
    }
        else if (document.frmEditProfile.lookingfor.selectedIndex == 0){
        alert ("Please select you are looking for !!");
        document.frmEditProfile.lookingfor.focus();
        return false;
    }
    else if ( document.frmEditProfile.height.selectedIndex == 0 ) {
        alert ("Please select height !!");
        document.frmEditProfile.height.focus();
        return false;
    }
    else if ( document.frmEditProfile.bodytype.selectedIndex == 0 ) {
        alert ("Please select body type !!");
        document.frmEditProfile.bodytype.focus();
        return false;
    }
    else if ( document.frmEditProfile.complexion.selectedIndex == 0 ) {
        alert ("Please select your complexion !!");
        document.frmEditProfile.complexion.focus();
        return false;
    }
    else if ( document.frmEditProfile.weight.selectedIndex == 0 ) {
        alert ("Please select your weight !!");
        document.frmEditProfile.weight.focus();
        return false;
    }
   else if (document.frmEditProfile.relegion.selectedIndex == 0){
        alert ("Please select your relegion !!");
        document.frmEditProfile.relegion.focus();
        return false;
    }
   else if (document.frmEditProfile.caste.selectedIndex == 0){
        alert ("Please select caste !!");
        document.frmEditProfile.caste.focus();
        return false;
    }
   else if (document.frmEditProfile.raasi.selectedIndex == 0){
        alert ("Please select raasi !!");
        document.frmEditProfile.raasi.focus();
        return false;
    }
   else if (document.frmEditProfile.mothertongue.selectedIndex == 0){
        alert ("Please select your mother tongue !!");
        document.frmEditProfile.mothertongue.focus();
        return false;
    }
   else if (document.frmEditProfile.education.selectedIndex == 0){
        alert ("Please select education !!");
        document.frmEditProfile.education.focus();
        return false;
   }
   else if (document.frmEditProfile.detaileducation.value.length < 1){
        alert ("Please select detail education !!");
        document.frmEditProfile.detaileducation.focus();
        return false;
   }
   else if (document.frmEditProfile.occupation.selectedIndex == 0){
        alert ("Please select occupation !!");
        document.frmEditProfile.occupation.focus();
        return false;
    }
   else if (document.frmEditProfile.income.selectedIndex == 0){
        alert ("Please select your annual income !!");
        document.frmEditProfile.income.focus();
        return false;
    }
   else if (document.frmEditProfile.citizenship.selectedIndex == 0){
        alert ("Please select citizenship !!");
        document.frmEditProfile.citizenship.focus();
        return false;
    }
   else if (document.frmEditProfile.livingin.selectedIndex == 0){
        alert ("Please select country living in !!");
        document.frmEditProfile.livingin.focus();
        return false;
    }
   else if (document.frmEditProfile.nativestate.selectedIndex == 0){
        alert ("Please select your native state !!");
        document.frmEditProfile.nativestate.focus();
        return false;
    }
   else if (document.frmEditProfile.residingcity.selectedIndex == 0){
        alert ("Please enter your residing city !!");
        document.frmEditProfile.residingcity.focus();
        return false;
    }
//Email Validation script------------
   else if(document.frmEditProfile.emailid.value == "" ) {
        alert("Please enter your E-mail ID.");
        document.frmEditProfile.emailid.focus();
        return false;
    }
   else if (document.frmEditProfile.emailid.value.length != 0) {
            if(document.frmEditProfile.emailid.value.indexOf(" ") != -1)    {
            alert("Pls. Enter Correct E-Mail Id without spaces.");
            document.frmEditProfile.emailid.focus();
            return false;
            }
            if(document.frmEditProfile.emailid.value.indexOf("@") == -1)    {
            alert("Invalid E-Mail Id..!");
            document.frmEditProfile.emailid.focus();
            return false;
            }
            //return true;

            validarr = document.frmEditProfile.emailid.value.split("@");
            if(validarr[0].length==0)       {
            alert("Pls. Enter Correct Email Id..! ");
            document.frmEditProfile.emailid.focus();
            return false;
            }
            if(validarr[1].indexOf("@") >=0)       {
            alert("Pls. Enter Correct Email Id..! ");
            document.frmEditProfile.emailid.focus();
            return false;
            }
            if(validarr[1].length==0) {
                alert("Pls. Enter Correct Email Id..! ");
                document.frmEditProfile.emailid.focus();
                return false;
            }
            if(validarr[1].length != 0) {

                if(validarr[1].indexOf(".") == -1)         {
                alert("Pls. Enter Correct Email Id..!");
                document.frmEditProfile.emailid.focus();
                return false;
                }
                validemail = validarr[1].split(".");
                 if(validemail[0].length==0)           {
                 alert("Pls. Enter Correct Email Id..!");
                 document.frmEditProfile.emailid.focus();
                 return false;
                }
                if(validemail[1].length==0)          {
                alert("Pls. Enter Correct Email Id..!");
                document.frmEditProfile.emailid.focus();
                return false;
                }
            }
        }
//-----------till here------------------/*
if (document.frmEditProfile.loginid.value.length < 4) {
    alert("Pls. enter your LoginId!!");
    document.frmEditProfile.loginid.focus();
    return false;
}
else if (document.frmEditProfile.password.value.length == 0) {
        alert("Kindly enter desired Password.");
        document.frmEditProfile.password.focus();
        return false;
    }
else if ( (document.frmEditProfile.password.value.length < 4) || (document.frmEditProfile.password.value.length > 15 )) {
        alert("Invalid Password !! . Password should be greater than 4 characters and less than 15 characters.");
        document.frmEditProfile.password.focus();
        return false;
    }
else if (document.frmEditProfile.password2.value.length == 0) {
        alert("Kindly confirm your desired Password.");
        document.frmEditProfile.password2.focus();
        return false;
    }
else if ( (document.frmEditProfile.password.value) != (document.frmEditProfile.password2.value) ){
        alert("Please enter same Passwords.");
        document.frmEditProfile.password2.focus();
        return false;
    }
else if (document.frmEditProfile.registeredby.selectedIndex == 0){
        alert ("Pls. Select Who has Register this Profile !");
        document.frmEditProfile.registeredby.focus();
        return false;
    }
else if (document.frmEditProfile.referredby.selectedIndex == 0){
        alert ("Pls. Select Who has Referred you to Our Site!!");
        document.frmEditProfile.referredby.focus();
        return false;
    }
else if (document.frmEditProfile.terms.checked==false){
        alert ("Pls. Tick the Terms & Condition Box !!");
        document.frmEditProfile.terms.focus();
        return false;
    }


   return true;
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
                  <td> <?php include(DIR_FS_TEMPLATES."edit_member.tpl.php"); ?> </td>
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
