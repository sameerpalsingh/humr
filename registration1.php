<?php
include("includes/application_top.php");
$db = new sql_db;

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
<script src="<?php echo DIR_WS_JS?>jquery-1.2.6.js" type="text/JavaScript"></script>

<script type="text/javascript">
<!--
function limitText(limitField, limitCount) {
	limitCount.value = limitField.value.replace(/\s{2,}/g, ' ').length;
	limitField.value = limitField.value.replace(/\s{2,}/g, ' ');
}

function login_validate1() {
    if(document.frmRegistration.highestdegree.selectedIndex == 0) {
        alert ("Please select highest degree");
        document.frmRegistration.highestdegree.focus();
        return false;
    } else if(document.frmRegistration.workarea.selectedIndex == 0) {
        alert ("Please select workarea");
        document.frmRegistration.workarea.focus();
        return false;
    } else if(document.frmRegistration.annualincome.selectedIndex == 0) {
        alert ("Please select annual income");
        document.frmRegistration.annualincome.focus();
        return false;
    } else if(document.frmRegistration.weight.value== 0) {
        alert ("Please select weight");
        document.frmRegistration.weight.focus();
        return false;
    } else if(document.frmRegistration.about_yourself.value.length < 50 || document.frmRegistration.about_yourself.value.length > 500 ) {
      alert ("Write something about family background, education, lifestyle, interests, hobbies etc.\nPlease enter atleast 50 characters and maximum 500 characters.");
      document.frmRegistration.about_yourself.focus();
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
                  <td> <?php include(DIR_FS_TEMPLATES."registration1.tpl.php"); ?> </td>
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
