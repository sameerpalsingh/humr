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

$sql = "SELECT credit, description, DATE_FORMAT(credit_time, '%d %b %Y') as credit_date "
        . "FROM hum_credits "
        . "WHERE member_id='$sess_user_id' AND loginid='$sess_user_name' ORDER BY id DESC";
$rs = $db->executeQuery($sql);

$sql_profile = "SELECT hr.id, hr.loginid, hr.name, hr.pic, hr.age, hr.caste, hr.city, hr.country, hr.contact_number, hr.contact_address, DATE_FORMAT(hcu.used_time, '%d %b %Y') as credit_date   
    FROM hum_registration hr, hum_credits_used hcu
    WHERE hr.id=hcu.member_used_for AND hcu.member_used_by='$sess_user_id' ";
$rs_profile = $db->executeQuery($sql_profile);

$sql_credit = "SELECT credit_received, credit_used FROM "
        . " (SELECT SUM(credit) as credit_received FROM hum_credits WHERE member_id='$sess_user_id') as A, "
        . " (SELECT COUNT(id) as credit_used FROM hum_credits_used WHERE member_used_by='$sess_user_id') as B" ;
$rs_credit = $db->executeQuery($sql_credit);

$row_credit = $db->fetchRow($rs_credit);

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
        <?php include(DIR_FS_TEMPLATES."my_credits.tpl.php"); ?>
        </td></tr>
    </table></td>
  </tr>
<?php include(DIR_FS_TEMPLATES."footer.tpl.php"); ?>
</table>
</body>
</html>
