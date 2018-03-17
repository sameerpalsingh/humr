<?php
include("includes/application_top.php");
if (isset($_POST["token"]))
{

    $db = new sql_db;
    $sql = "select password, emailid, loginid from hum_members where emailid='".$_POST['emailid']."' or loginid='".$_POST['username']."' ";
    $rs = $db->executeQuery($sql);
    if ($num = $db->numRows($rs) > 0) {
        $row = $db->fetchRow($rs);

        $password = $row['password'];
        $emailid = $row['emailid'];
        $loginid = $row['loginid'];

        $to = $emailid;
        $from = SITE_EMAIL;
        $header = "From: $from \n";
        $subject = SUBJECT_FORGOT_PASSWORD;
        $message = "Please find below your emailid";

        if (!@mail($to, $subject, $message, $header )) {
            $msg = "Could not send email. please write to us.";
        } else {
        $msg = "Your password has been sent to your email.";
        }
    } else {

        $msg = "invalid emailid or loginid";

    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITE_TITLE;?></title>
<meta name="description" content="<?php echo SITE_DESCRIPTION;?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;?>" />
<link href="templates/initial/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
            <td valign="top"><?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="30">&nbsp;</td>
                <td valign="top"><?php include(DIR_FS_TEMPLATES."forgot_password.tpl.php");?></td>
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
              </table></td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?></table>
</body>
</html>
