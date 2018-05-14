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

$rs = $db->executeQuery('SELECT * FROM hum_registration,hum_members_profile WHERE hum_registration.id=hum_members_profile.id');

$row = $db->fetchRow($rs);

$gender         = $row['gender'];
$dob             = $row['dob'];
$dobArr         = explode("-", $dob);
$maritalstatus     = $row['marital_status'];
$lookingfor     = $row['looking_for'];
$height         = $row['height'];
$bodytype         = $row['bodytype'];
$complexion     = $row['complexion'];
$weight         = $row['weight'];
$physicalstatus = $row['physical_status'];
$relegion         = $row['religion'];
$caste            = $row['caste'];
$raasi            = $row['raasi'];
$mothertongue    = $row['mothertongue'];
$manglik        = $row['manglik'];
$education        = $row['education'];
$detaileducation= $row['detaileducation'];
$occupation        = $row['occupation'];
$income            = $row['annualincome'];
$citizenship    = $row['citizenship'];
$livingin        = $row['country'];
$nativestate    = $row['state'];
$city            = $row['city'];
$emailid        = $row['email_id'];
$telephone       = $row['contact_number'];
$address        = $row['address'];
$description   = $row['aboutyourself'];

//print_r($dobArr);
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


$err_message = $_GET['err_message'];

if (isset($_GET['mess'])) {
    $message = "*Your profile is updated successfully*";
}

include_once 'header.php';
?>
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
                  <!--<td> <?php include(DIR_FS_TEMPLATES."edit_member.tpl.php"); ?> </td>-->
				  <td> <?php include(DIR_FS_TEMPLATES."myprofile.html"); ?> </td>
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

</body>
</html>
