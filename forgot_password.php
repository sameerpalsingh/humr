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

include_once 'header.php';
?>
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
