<?php
include 'includes/application_top.php';
if (!isset($_SESSION['sess_user_id'])) {
    header("location: login.php");
    exit;
}

$db = new sql_db();

$sess_user_name = $_SESSION['sess_user_name'];
$sess_user_id = (int)$_SESSION['sess_user_id'];

function getMemberDetails($memberId) {
    global $db;
    $sql_member = "SELECT *
                   FROM hum_registration
                   WHERE id='".$memberId."' ";
    $rs_member  = $db->executeQuery($sql_member);
    return $db->fetchRow($rs_member);
}

$sql = "SELECT contact_by, DATE_FORMAT(contact_date, '%d %b %Y') as contact_date FROM hum_member_contact WHERE contact_id='$sess_user_id' ORDER BY id DESC";
$rs = $db->executeQuery($sql);

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
        <td width="223" height="537" valign="top"><?php include(DIR_FS_INCLUDES."left.inc.php"); ?></td>
        <td valign="top">
        <?php include(DIR_FS_INCLUDES."header.inc.php"); ?>
        <?php include(DIR_FS_TEMPLATES."wl_interest_received.tpl.php"); ?>
        </td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
